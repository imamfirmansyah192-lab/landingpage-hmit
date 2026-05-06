<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] flex justify-center items-center min-h-screen text-white">

<div class="bg-[#112240] p-8 rounded-xl w-full max-w-xl">

    <h2 class="text-2xl font-bold mb-6 text-center">
        Tambah Mahasiswa
    </h2>

    <form action="/admin/tambah"
      method="POST"
      enctype="multipart/form-data">
    @csrf

        <input name="nim"
               placeholder="NIM"
               class="w-full p-2 mb-3 text-black rounded">

        <input name="nama"
               placeholder="Nama"
               class="w-full p-2 mb-3 text-black rounded">

        <input name="prodi"
               placeholder="Prodi"
               class="w-full p-2 mb-3 text-black rounded">

        <input name="email"
               placeholder="Email"
               class="w-full p-2 mb-3 text-black rounded">

        <input name="alamat"
               placeholder="Alamat"
               class="w-full p-2 mb-3 text-black rounded">

        <input type="file"
            name="foto"
            class="w-full p-2 mb-3 bg-white text-black rounded">

        <input type="password"
               name="password"
               placeholder="Password"
               class="w-full p-2 mb-3 text-black rounded">

        <button class="w-full bg-yellow-400 text-black py-2 rounded font-semibold">
            Tambah Mahasiswa
        </button>
    </form>

    <div class="text-center mt-4">
        <a href="/admin"
           class="text-gray-400 hover:underline">
            Kembali
        </a>
    </div>

</div>

</body>
</html>