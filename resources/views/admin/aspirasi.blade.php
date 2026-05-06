<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aspirasi Mahasiwa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0a192f] text-white min-h-screen p-8">

<h1 class="text-3xl font-bold mb-6 text-red-400">
    Aspirasi Mahasiswa
</h1>

<div class="mt-6 space-y-4">

@forelse($aspirasis as $aspirasi)

    <div class="bg-[#112240] p-6 rounded-xl">

        <div class="flex items-center justify-between">

            <div>
                <h2 class="text-xl font-bold text-yellow-400">
                    {{ $aspirasi->nama }}
                </h2>

                <p class="text-gray-400">
                    NIM: {{ $aspirasi->nim }}
                </p>
            </div>

            <p class="text-sm text-gray-400">
                {{ $aspirasi->created_at }}
            </p>

        </div>

        <div class="mt-4">

            <h3 class="font-bold mb-2">
                Deskripsi Aspirasi:
            </h3>

            <p class="text-gray-300">
                {{ $aspirasi->isi }}
            </p>

        </div>

        @php
            $points = json_decode($aspirasi->points);
        @endphp

        @if($points)

            <div class="mt-4">

                <h3 class="font-bold mb-2">
                    Point Aspirasi:
                </h3>

                <ul class="list-disc ml-6 text-gray-300">

                    @foreach($points as $point)
                        <li>{{ $point }}</li>
                    @endforeach

                </ul>

            </div>

        @endif

    </div>

@empty

    <div class="bg-[#112240] p-6 rounded-xl text-center text-gray-400">
        Belum ada aspirasi mahasiswa.
    </div>

@endforelse

</div>

<div class="mt-6">
    <a href="/admin"
       class="bg-red-700 px-3 py-2 rounded inline-block">
        Kembali
    </a>
</div>

</body>
</html>