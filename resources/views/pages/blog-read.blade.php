@extends('blog')

@section('konten')

{{-- Navbar sederhana --}}
<nav class="max-w-7xl mx-auto px-4 py-4 mt-10 flex items-center justify-between">
    <a href="{{ url('/blog') }}" class="text-blue-600 hover:underline font-semibold text-lg">
        ← Kembali ke Beranda
    </a>
</nav>

{{-- Artikel utama --}}
<section class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md overflow-hidden mt-4 mb-10">
    <div class="p-6 sm:p-8">
        {{-- Thumbnail --}}
        <div class="mb-6">
            <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                class="w-full h-64 object-cover rounded-xl">
        </div>

        {{-- Judul --}}
        <h1 class="text-3xl font-bold text-gray-800 leading-tight mb-4">
            {{ $article->title }}
        </h1>

        {{-- Optional metadata --}}
        <p class="text-sm text-gray-500 mb-6">
            Ditulis pada {{ $article->created_at->format('d M Y') }}
        </p>

        {{-- Isi konten --}}
        <div class="prose max-w-none prose-lg prose-slate">
            {!! $article->content !!}
        </div>
    </div>
</section>

{{-- Berita Lainnya --}}
<section class="max-w-7xl mx-auto mb-16 px-4">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Berita Lainnya</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 pb-10">
        @foreach($others as $item)
        <a href="{{ route('baca', $item->slug) }}" class="bg-white rounded-xl shadow hover:shadow-lg transition duration-200 overflow-hidden">
            <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->title }}" class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">{{ \Illuminate\Support\Str::limit($item->title, 50) }}</h3>
                <p class="text-sm text-gray-600">{{ \Illuminate\Support\Str::words(strip_tags($item->content), 12) }}</p>
            </div>
        </a>
        @endforeach
    </div>
</section>

@endsection
