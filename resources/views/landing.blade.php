<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-[#0f2342] shadow-lg border-b-2 border-yellow-400">
        <h1 class="text-2xl font-bold text-white">HMIT</h1>
        <div>
            <a href="#" class="mx-3 hover:text-yellow-400">Home</a>
            <a href="#" class="mx-3 hover:text-yellow-400">About</a>
            <a href="#" class="mx-3 hover:text-yellow-400">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
   <section class="relative h-screen flex items-center justify-center text-center px-6">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hmit.jpeg') }}" 
             class="w-full h-full object-cover blur-sm opacity-80">
        <div class="absolute inset-0 bg-[#0a192f] opacity-70"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10">
        <h2 class="text-5xl font-extrabold mb-4">
            Selamat Datang di 
            <span class="text-yellow-400 border-b-4 border-yellow-400">HMIT</span>
        </h2>
        <p class="text-lg text-gray-300 mb-8">
            Himpunan Mahasiswa Informatika - Wadah kreativitas, inovasi, dan kolaborasi mahasiswa Informatika.
        </p>
        <a href="#" class="bg-yellow-400 text-[#0a192f] hover:bg-yellow-300 px-6 py-3 rounded-lg text-lg font-semibold shadow-lg">
            Bergabung Sekarang
        </a>
    </div>

</section>

    <!-- Garis pemisah -->
    <div class="w-full h-1 bg-yellow-400"></div>

    <!-- Features -->
    <section class="grid md:grid-cols-3 gap-8 px-10 py-16">
        <div class="bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold mb-3 text-yellow-400">Komunitas</h3>
            <p class="text-gray-300">Bergabung dengan mahasiswa Informatika yang aktif dan kreatif.</p>
        </div>

        <div class="bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold mb-3 text-yellow-400">Kegiatan</h3>
            <p class="text-gray-300">Workshop, seminar, dan event teknologi menarik.</p>
        </div>

        <div class="bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold mb-3 text-yellow-400">Pengembangan</h3>
            <p class="text-gray-300">Tingkatkan skill programming dan soft skill.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0f2342] text-center p-6 border-t-2 border-yellow-400">
        <p class="text-gray-300">© 2026 HMIT - All Rights Reserved</p>
    </footer>

</body>
</html>