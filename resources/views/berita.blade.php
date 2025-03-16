<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal Berita Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl md:text-2xl font-bold text-blue-600">
                📰 Portal Berita Indonesia
            </h1>
            <a href="{{ url('/') }}" class="text-sm md:text-base text-gray-700 hover:text-blue-600 font-medium">
                Home
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">

        <!-- Kategori -->
        <div class="mb-6 flex justify-center flex-wrap gap-3">
            @foreach ($kategoris as $kat)
                <a href="{{ url('/kategori/' . $kat) }}"
                    class="px-4 py-2 rounded-full text-sm font-medium transition-all
                                  {{ request()->is("kategori/$kat") ? 'bg-blue-600 text-white' : 'bg-white text-blue-600 border border-blue-500 hover:bg-blue-600 hover:text-white' }}">
                    {{ ucfirst($kat) }}
                </a>
            @endforeach
        </div>

        @if ($kategori)
            <h2 class="text-xl font-semibold mb-6 text-center capitalize text-blue-700">
                Menampilkan kategori: {{ $kategori }}
            </h2>
        @endif

        <!-- List Berita -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse ($berita as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}" class="w-full h-72 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $item['title'] }}</h3>
                        <p class="text-sm text-gray-500 mb-2">
<<<<<<< HEAD
                            <!-- {{ \Carbon\Carbon::parse($item['pubDate'])->translatedFormat('d F Y H:i') }} -->
                            {{ \Carbon\Carbon::parse($item['pubDate'])->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}

=======
<!--                             {{ \Carbon\Carbon::parse($item['pubDate'])->translatedFormat('d F Y H:i') }} -->
                            {{ \Carbon\Carbon::parse($item['pubDate'])->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}

                            
>>>>>>> 087c3446723bb88cf5a5d42e16449eea0d86b1db
                        </p>
                        <p class="text-gray-700 text-sm mb-3 line-clamp-3">
                            {{ $item['description'] }}
                        </p>
                        <a href="{{ $item['link'] }}" target="_blank"
                            class="inline-block text-sm font-semibold text-blue-500 hover:text-blue-700">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-600">Tidak ada berita tersedia.</p>
            @endforelse
        </div>
    </div>

</body>

</html>
