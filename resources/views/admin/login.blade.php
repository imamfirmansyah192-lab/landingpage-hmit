<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0a192f] flex justify-center items-center min-h-screen text-white">

    <div class="bg-[#112240] p-8 rounded-xl shadow-lg w-full max-w-md">

        <h2 class="text-2xl font-bold text-center mb-6 text-red-400">
            Login Admin
        </h2>

        {{-- ERROR --}}
        @if(session('error'))
            <div class="bg-red-500 p-2 mb-4 rounded text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <input type="text"
                   name="nim"
                   placeholder="NIM Admin"
                   required
                   class="w-full p-2 mb-4 rounded text-black">

            <input type="password"
                   name="password"
                   placeholder="Password"
                   required
                   class="w-full p-2 mb-4 rounded text-black">

            <button class="w-full bg-red-500 py-2 rounded font-semibold hover:bg-red-600 transition">
                Login Admin
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="/login"
               class="text-gray-400 hover:underline">
                Kembali ke Login Mahasiswa
            </a>
        </div>

    </div>

</body>
</html>