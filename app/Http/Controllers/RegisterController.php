<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input dari form
        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:users,nim',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Simpan data ke database (tabel users)
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Enkripsi password
        ]);

        // Redirect setelah sukses daftar
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}

