<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buat Aspirasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white flex items-center justify-center min-h-screen">

<div class="bg-[#112240] p-8 rounded-xl shadow-lg w-full max-w-lg">

    <h2 class="text-2xl font-bold text-center mb-6">Buat Aspirasi</h2>

    <form action="/aspirasi" method="POST">
        @csrf

        <!-- DESKRIPSI -->
        <label class="block mb-2 font-semibold">Deskripsi Aspirasi</label>
        <textarea name="deskripsi" rows="4" required
            class="w-full p-2 text-black rounded mb-4"
            placeholder="Tulis deskripsi aspirasi..."></textarea>

        <!-- POINT ASPIRASI -->
        <label class="block mb-2 font-semibold">Point Aspirasi</label>

        <div id="points-container">
            <input type="text" name="points[]" 
                class="w-full p-2 text-black rounded mb-2"
                placeholder="Point 1">
        </div>

        <!-- TOMBOL TAMBAH POINT -->
        <button type="button" onclick="tambahPoint()" 
            class="mb-4 bg-blue-500 px-3 py-1 rounded">
            + Tambah Point
        </button>

        <!-- SUBMIT -->
        <button class="w-full bg-yellow-400 text-black py-2 rounded font-semibold">
            Kirim Aspirasi
        </button>

    </form>

    <a href="/mahasiswa" class="block text-center mt-4 text-gray-400 hover:underline">
        Kembali
    </a>

</div>

<script>
function tambahPoint() {
    const container = document.getElementById('points-container');

    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'points[]';
    input.placeholder = 'Point tambahan';
    input.className = 'w-full p-2 text-black rounded mb-2';

    container.appendChild(input);
}
</script>

</body>
</html>