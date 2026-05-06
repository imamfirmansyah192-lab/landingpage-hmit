<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    public function index()
    {
        if (!session('login')) {
            return redirect('/login');
        }

        return view('aspirasi');
    }

public function store(Request $request)
{
    $request->validate([
        'deskripsi' => 'required'
    ]);

    DB::table('aspirasis')->insert([
        'nim' => session('nim'),

        'isi' => $request->deskripsi,

        'points' => json_encode($request->points),

        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect('/mahasiswa')
        ->with('success', 'Aspirasi berhasil dikirim!');
}
}