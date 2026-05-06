<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!session('login') || session('role') != 'admin') {
            return redirect('/login');
        }

        $mahasiswas = DB::table('users')
            ->where('role', 'mahasiswa')
            ->get();

        return view('admin.dashboard', compact('mahasiswas'));
    }

    public function create()
    {
        if (!session('login') || session('role') != 'admin') {
            return redirect('/login');
        }

        return view('admin.tambah');
    }

public function aspirasi()
{
    if (!session('login') || session('role') != 'admin') {
        return redirect('/login');
    }

    $aspirasis = DB::table('aspirasis')
        ->join('users', 'aspirasis.nim', '=', 'users.nim')
        ->select(
            'aspirasis.*',
            'users.nama'
        )
        ->latest()
        ->get();

    return view('admin.aspirasi', compact('aspirasis'));
}

public function store(Request $request)
{
    $request->validate([
        'nim' => 'required|unique:users,nim',
        'nama' => 'required',
        'prodi' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:5',
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
        'role' => 'mahasiswa',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect('/admin')
        ->with('success', 'Mahasiswa berhasil ditambahkan');
}

    public function destroy($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();

        return redirect('/admin')
            ->with('success', 'Mahasiswa berhasil dihapus');
    }
}