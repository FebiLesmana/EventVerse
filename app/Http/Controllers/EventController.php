<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Eventlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
   public function show($id)
{
    $dataEvent = EventList::find($id);

    $title = $dataEvent->nama;

    return view('user.details.detailevent', compact('title', 'dataEvent'));
}
    public function dashboard()
    {
     // Mengambil data event terbaru dari database (atau sesuai kebutuhan)
    $dataEvent = EventList::orderBy('waktu', 'desc')->take(5)->get(); // Mengambil 5 event terbaru
    // dd($dataEvent);
    return view('user.dashboard.dash', compact('dataEvent'));
    }

    public function index()
    {
        $title = 'Ajukan';
        return view('user.register_event.register', compact('title'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_event' => 'required|string|max:100',
            'jenis' => 'required|string|max:30',
            'deskripsi' => 'required|string|max:150',
            'tempat' => 'required|string|max:20',
            'waktu' => 'required|date',
            'pembicara' => 'nullable|string|max:30',
            'organizer' => 'required|string|max:30',
            'instagram' => 'nullable|string|max:30',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi file gambar max 2MB
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->with('message', [
                'status' => false,
                'message' => $validator->errors()->first()
            ])->withInput();
        }

        // Upload file poster
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $posterPath = $file->store('posters', 'public'); // simpan di storage/app/public/posters
        } else {
            return redirect()->back()->with('message', [
                'status' => false,
                'message' => 'Poster wajib diupload'
            ])->withInput();
        }
        // Simpan data ke database
        EventList::create([
            'nama' => $request->nama_event,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
            'pembicara' => $request->pembicara,
            'organizer' => $request->organizer,
            'instagram' => $request->instagram,
            'poster' => $posterPath,
        ]);

        // Method untuk mengambil data event dan menampilkannya di dashboard

        return redirect()->route('event-index')->with('message', [
            'status' => true,
            'message' => 'Event berhasil didaftarkan'
        ]);
    }

    public function toggleFavorite($id)
    {
        $user = auth()->user();

        $isFavoriteAlereadyExist = Favorite::where('user_id', $user->id)->where('event_id', $id)->first();

        if($isFavoriteAlereadyExist) {
            $isFavoriteAlereadyExist->delete();

            return response()->json([
                'status' => "removed",
                'message' => 'Successfuly removed from favorite'
            ]);
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'event_id' => $id
            ]);

            return response()->json([
                'status' => "added",
                'message' => 'Successfully add to favorite'
            ]);
        }
    }

    public function showFavorites()
    {
        $title = "Disukai";
        $user = auth()->user();
        $favoriteEvents = Favorite::where('user_id', $user->id)->latest()->get();

        return view('user.disukai.suka', compact('title', 'favoriteEvents'));
    }


}
