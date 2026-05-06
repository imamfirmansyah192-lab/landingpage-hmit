<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:users,nim',
            'nama' => 'required',
            'prodi' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5',
            'foto' => 'required|image'
        ]);

        $namaFile = time() . '.' . $request->foto->extension();

        $request->foto->move(public_path('uploads'), $namaFile);

        DB::table('users')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'foto' => $namaFile,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa'
        ]);

        return redirect('/login')
            ->with('success', 'Berhasil daftar, silakan login!');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('nim', $request->nim)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {

            Cookie::queue('login', true, 60);
            Cookie::queue('nim', $user->nim, 60);
            Cookie::queue('role', $user->role, 60);

            session([
            'login' => true,
            'nim' => $user->nim,
            'role' => $user->role
        ]);

            if ($user->role == 'admin') {
                return redirect('/admin');
            }

            return redirect('/mahasiswa');
        }

        return back()->with('error', 'NIM atau password salah!');
    }

public function logout()
{
    Cookie::queue(Cookie::forget('login'));
    Cookie::queue(Cookie::forget('nim'));
    Cookie::queue(Cookie::forget('role'));

    session()->flush();

    return redirect('/login');
}
}