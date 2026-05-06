<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white">

<div class="flex justify-center items-center min-h-screen">

    <div class="bg-[#112240] p-8 rounded-xl shadow-lg w-full max-w-md text-center">

        <h1 class="text-2xl font-bold mb-6">Dashboard Mahasiswa</h1>

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="bg-green-500 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- FOTO --}}
        <img src="{{ asset('uploads/' . $user->foto) }}" 
             class="w-28 h-28 object-cover rounded-full mx-auto mb-4">

        {{-- DATA --}}
        <p><b>NIM:</b> {{ $user->nim }}</p>
        <p><b>Nama:</b> {{ $user->nama }}</p>
        <p><b>Prodi:</b> {{ $user->prodi }}</p>
        <p><b>Email:</b> {{ $user->email }}</p>
        <p><b>Alamat:</b> {{ $user->alamat }}</p>

        {{-- TOMBOL --}}
        <div class="mt-6 space-y-3">

            <a href="/aspirasi" 
               class="block bg-yellow-400 text-black py-2 rounded font-semibold">
                Buat Aspirasi
            </a>

            <a href="/logout" 
               class="block bg-red-500 py-2 rounded">
                Logout
            </a>

            <div class="mt-8 text-left">

    <h2 class="text-xl font-bold mb-4">
        Riwayat Aspirasi
    </h2>

    @forelse($aspirasis as $aspirasi)

        <div class="bg-[#0f2342] p-4 rounded mb-4">

            <p class="font-bold text-yellow-400">
                {{ $aspirasi->isi }}
            </p>

            @php
                $points = json_decode($aspirasi->points);
            @endphp

            @if($points)
                <ul class="list-disc ml-5 mt-2">
                    @foreach($points as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            @endif

            <p class="text-sm text-gray-400 mt-3">
                {{ $aspirasi->created_at }}
            </p>

        </div>

    @empty

        <p class="text-gray-400">
            Belum ada aspirasi.
        </p>

    @endforelse

</div>

        </div>

    </div>

</div>

</body>
</html>