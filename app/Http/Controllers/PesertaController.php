<?php

namespace App\Http\Controllers;

use App\Models\PesertaList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    public function index()
    {
        $title = 'Daftar';
        return view('user.register_user.register', compact('title'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_peserta' => 'required|string|max:100',
            'nim' => 'required|string|max:30',
            'fakultas' => 'required|string|max:30',
            'email' => 'required|email|max:30',
            'no_hp' => 'required|string|max:15',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->with('message', [
                'status' => false,
                'message' => $validator->errors()->first()
            ])->withInput();
        }
        // Simpan data ke database
        PesertaList::create([
            'nama_peserta' => $request->nama_peserta,
            'nim' => $request->nim,
            'fakultas' => $request->fakultas,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('peserta-index')->with('message', [
            'status' => true,
            'message' => 'Peserta berhasil didaftarkan'
        ]);
    }
}
