<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SweetAlert2\Laravel\Swal;


class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        // VALIDASI MANUAL
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            Swal::error([
                'title' => 'Login gagal!',
                'text' => 'Email dan password harus diisi dengan benar.',
            ]);

            return back()->withErrors($validator)->withInput();
        }

        // Jika validasi lolos → coba login
        if (Auth::attempt($request->only('email', 'password'))) {
            Swal::toastSuccess([
                'title' => 'Berhasil!',
                'text' => 'Login berhasil!'
            ]);
            return redirect()->route('employees.index');
        }

        // Jika email/password salah
        Swal::error([
            'title' => 'Login gagal!',
            'text' => 'Email atau password salah.',
        ]);

        return back()->withErrors(['error' => 'Invalid credentials'])->withInput();
    }


    public function store(Request $request)
    {
        // misal validasi atau simpan data
        // setelah berhasil:
        Swal::success([
            'title' => 'Berhasil!',
            'text' => 'Data sudah tersimpan.',
        ]);

        return redirect()->route('home');
    }

    public function showRegisterForm()
    {
        return view('users.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        try {
            // Buat user sekali saja
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Notifikasi sukses
            Swal::success([
                'title' => 'Berhasil!',
                'text' => 'Register berhasil! Silakan login.',
            ]);

            return redirect()->route('users.login');
        } catch (\Exception $e) {
            // Notifikasi gagal
            Swal::error([
                'title' => 'Gagal!',
                'text' => 'Register gagal, coba lagi.',
            ]);

            return redirect()->back()->withInput();
        }
    }
}
