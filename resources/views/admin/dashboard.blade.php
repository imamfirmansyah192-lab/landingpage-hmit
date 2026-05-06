<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white min-h-screen p-8">

<h1 class="text-3xl font-bold mb-6 text-red-400">
    Dashboard Admin
</h1>

@if(session('success'))
    <div class="bg-green-500 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<a href="/admin/tambah"
   class="bg-yellow-400 text-black px-4 py-2 rounded font-semibold">
    Tambah Mahasiswa
</a>

<a href="/admin/aspirasi"
   class="bg-yellow-500 text-black px-4 py-2 rounded font-semibold ml-2">
    Lihat Aspirasi
</a>

<div class="mt-6 overflow-x-auto">

<table class="w-full bg-[#112240] rounded-lg overflow-hidden">

    <thead class="bg-[#1b3358]">
        <tr>
            <th class="p-3 text-left">NIM</th>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Prodi</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($mahasiswas as $mhs)
        <tr class="border-b border-gray-700">
            <td class="p-3">{{ $mhs->nim }}</td>
            <td class="p-3">{{ $mhs->nama }}</td>
            <td class="p-3">{{ $mhs->prodi }}</td>
            <td class="p-3">{{ $mhs->email }}</td>
            <td class="p-3">

                <a href="/admin/hapus/{{ $mhs->id }}"
                   class="bg-red-500 px-3 py-1 rounded">
                    Hapus
                </a>

            </td>
        </tr>
        @endforeach

    </tbody>

</table>

</div>

<div class="mt-6">
    <a href="/logout"
       class="bg-red-700 px-4 py-2 rounded">
        Logout
    </a>
</div>

</body>
</html>