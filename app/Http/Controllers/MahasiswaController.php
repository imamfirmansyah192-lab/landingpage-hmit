<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        if (!session('login') || session('role') != 'mahasiswa') {
            return redirect('/login');
        }

        $user = DB::table('users')
            ->where('nim', session('nim'))
            ->first();

        $aspirasis = DB::table('aspirasis')
            ->where('nim', session('nim'))
            ->latest()
            ->get();

        return view('mahasiswa', compact('user', 'aspirasis'));
    }
}