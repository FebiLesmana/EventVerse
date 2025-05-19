<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        $title = 'Daftar';
        
        return view('auth.daftar.daftar', compact('title'));
    }

    public function store(Request $request)
    {
        // Validasi data input dari form
        $rules = [
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:users,nim',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->with('message', [
                'status' => false,
                'message' => $validator->errors()->first()
            ])->withInput();
        }

        // Simpan data ke database (tabel users)
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Enkripsi password
        ]);

        // Redirect setelah sukses daftar
        return redirect()->route('login')->with('message', [
                'status' => true,
                'message' => 'Successfully create new user'
            ]);
    }
}