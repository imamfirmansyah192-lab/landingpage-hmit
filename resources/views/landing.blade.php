<!DOCTYPE html>
<html lang="id ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-[#0f2342] shadow-lg border-b-2 border-red-400">
        <h1 class="text-2xl font-bold text-white">HIMPUNAN MAHASISWA INFORMATIKA</h1>
        <div>
            <a href="#" class="mx-3 hover:text-yellow-400">Home</a>
            <a href="#" class="mx-3 hover:text-yellow-400">About</a>
            <a href="#" class="mx-3 hover:text-yellow-400">Contact</a>
        </div>
    </nav>

   <section class="relative h-screen flex items-center justify-center text-center px-6">


    <div class="absolute inset-0">
        <img src="{{ asset('images/hmit.jpeg') }}" 
             class="w-full h-full object-cover blur-sm opacity-80">
        <div class="absolute inset-0 bg-[#0a192f] opacity-70"></div>
    </div>

 <div class="relative z-20 flex flex-col items-center space-y-4 mt-6">

        <h2 class="text-5xl font-extrabold mb-4">
            Selamat Datang di 
            <span class="text-yellow-400 border-b-4 border-yellow-400">HMIT</span>
        </h2>
        <p class="text-lg text-gray-300 mb-8">
            Himpunan Mahasiswa Informatika - Wadah kreativitas, inovasi, dan kolaborasi mahasiswa Informatika.
        </p>
        <a href="/daftar" class="bg-yellow-400 text-black px-6 py-2 rounded font-semibold shadow-lg">
            Bergabung Sekarang
        </a>

        <a href="/login" class="bg-white text-black px-6 py-2 rounded font-semibold shadow-lg">
            Login
        </a>

    </div>

</section>

    <div class="w-full h-1 bg-yellow-400"></div>

    <div class="relative z-10 text-center pt-14 pb-0">
    <h2 class="text-4xl md:text-5xl font-extrabold text-yellow-400 tracking-wide">
        DEPARTEMEN
    </h2>
    <div class="w-24 h-1 bg-yellow-400 mx-auto mt-3 rounded"></div>
    </div>

   <section class="grid md:grid-cols-3 gap-8 px-10 py-16">

    <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Pengembangan Wawasan Teknologi Informasi</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

    <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Pengembangan Sumber Daya Mahasiswa</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

    <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Kesenian dan Olahraga</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

   <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Ekonomi Kreatif</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

   <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Media</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

    <a href="#" class="feature-card bg-[#0f2342] p-6 rounded-xl shadow-lg border-t-4 border-yellow-400 
    hover:scale-105 hover:bg-[#112d5c] transition block opacity-0 translate-y-10">
        <h3 class="text-xl font-bold mb-3 text-yellow-400">Sosial Masyarakat</h3>
        <p class="text-gray-300">Klik untuk info selengkapnya...</p>
    </a>

</section>

    <footer class="bg-[#0f2342] text-center p-6 border-t-2 border-yellow-400">
        <p class="text-gray-300">© 2026 HMIT - Belajar Doang</p>
    </footer>

    <script>
    const cards = document.querySelectorAll('.feature-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0', 'transition', 'duration-700', 'ease-out');
                }, index * 150); // delay biar muncul satu-satu
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });
</script>
</body>
</html>