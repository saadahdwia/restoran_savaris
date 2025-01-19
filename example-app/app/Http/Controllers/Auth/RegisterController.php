<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        // Menampilkan form register
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Jika validasi gagal, kembali ke form dengan pesan error
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simpan data pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect atau beri pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi Sukses.');
    }
}

