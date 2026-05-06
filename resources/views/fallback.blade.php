<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black h-screen flex items-center justify-center">

    <video autoplay muted loop playsinline 
           class="absolute w-full h-full object-cover">
        <source src="{{ asset('videos/robi.mp4') }}" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-black opacity-60"></div>

    <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-5xl font-bold mb-4">LINK KAMU SALAH WOIII</h1>
        <p class="text-xl mb-6">KAMU CARI APA NYAKK?</p>

        <a href="/" class="mt-6 inline-block bg-yellow-400 text-black px-6 py-2 rounded-lg font-semibold hover:bg-yellow-300">
            Kembali ke Home
        </a>
    </div>

</body>
</html>