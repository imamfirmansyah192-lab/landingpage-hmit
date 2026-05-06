<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran HMIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white flex justify-center items-center min-h-screen">

<div class="bg-[#112240] p-8 rounded-xl w-full max-w-xl">
    <h2 class="text-2xl font-bold mb-6 text-center">Form Pendaftaran HMIT</h2>

    <form action="/daftar" method="POST" enctype="multipart/form-data">
        @csrf

        <input name="nim" placeholder="NIM" required class="w-full mb-3 p-2 text-black">
        <input name="nama" placeholder="Nama" required class="w-full mb-3 p-2 text-black">
        <input name="prodi" placeholder="Prodi" required class="w-full mb-3 p-2 text-black">
        <input name="email" type="email" placeholder="Email" required class="w-full mb-3 p-2 text-black">
        <input name="alamat" placeholder="Alamat" class="w-full mb-3 p-2 text-black">

        <input type="file" name="foto" required class="w-full mb-3 p-2 bg-white text-black">

        <input type="password" name="password" placeholder="Password" required class="w-full mb-3 p-2 text-black">
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-full mb-3 p-2 text-black">

        <button class="w-full bg-yellow-400 text-black py-2 rounded">
            Daftar
        </button>
    </form>
</div>

</body>
</html>