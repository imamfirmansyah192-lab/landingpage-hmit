<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HMIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white flex items-center justify-center min-h-screen">

    <div class="bg-[#112240] p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        {{-- ERROR --}}
        @if(session('error'))
            <div class="bg-red-500 p-2 mb-4 rounded text-center">
                {{ session('error') }}
            </div>
        @endif

<form action="/login" method="POST">
    @csrf

    <input type="text" name="nim" placeholder="NIM" required
        class="w-full p-2 mb-3 text-black rounded">

    <input type="password" name="password" placeholder="Password" required
        class="w-full p-2 mb-3 text-black rounded">

    <button class="w-full bg-yellow-400 text-black py-2 rounded">
        Login
    </button>

    <div class="text-center mt-4">
        <a href="/admin/login" 
            class="text-red-400 hover:underline">
            Login untuk Admin
        </a>
    </div>
</form>

        <p class="text-center mt-4 text-sm text-gray-400">
            Belum punya akun? 
            <a href="/daftar" class="text-yellow-400 hover:underline">Daftar di sini</a>
        </p>
    </div>

</body>
</html>