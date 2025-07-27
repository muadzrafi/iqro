@extends('blog')

@section('konten')

<section class="max-w-[1240px] mx-auto px-4">

    <style>
     /* ===== HERO SECTION STYLES ===== */
        .hero-section {
        position: relative;
        height: 100vh;
        min-height: 500px;
        max-height: 900px;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                    url('https://ptqiqro.id/public/foto/8.jpg') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        overflow: hidden;
        text-align: center;
        }

        .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(26, 116, 70, 0.7) 0%, rgba(245, 183, 0, 0.5) 100%);
        z-index: 1;
        }

        .hero-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .hero-content {
        position: relative;
        z-index: 2;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .hero-title {
        font-size: clamp(2rem, 8vw, 3.5rem);
        font-weight: 800;
        margin-bottom: 15px;
        line-height: 1.2;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        width: 100%;
        }

        .hero-highlight {
        background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline-block;
        }

        .hero-subtitle {
        font-size: clamp(1rem, 4vw, 1.5rem);
        margin-bottom: 30px;
        opacity: 0.9;
        text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 100%;
        max-width: 90%;
        }

        .hero-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;
        }

        .hero-button {
        padding: 12px 25px;
        border-radius: 50px;
        font-weight: 600;
        font-size: clamp(0.9rem, 3vw, 1.1rem);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        }

        .hero-button.primary {
        background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
        color: var(--hijau-tua);
        box-shadow: 0 5px 15px rgba(245, 183, 0, 0.4);
        }

        .hero-button.secondary {
        background: transparent;
        color: white;
        border: 2px solid white;
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        }

        .hero-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(245, 183, 0, 0.5);
        }

        /* Media Queries */
        @media (max-width: 768px) {
        .hero-section {
            min-height: 400px;
        }
        
        .hero-buttons {
            gap: 10px;
        }
        
        .hero-button {
            padding: 10px 20px;
        }
        
        .hero-subtitle {
            max-width: 100%;
        }
        }

        @media (max-width: 480px) {
        .hero-content {
            width: 95%;
            padding: 10px;
        }
        
        .hero-title {
            margin-bottom: 10px;
        }
        
        .hero-subtitle {
            margin-bottom: 20px;
        }
        
        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .hero-button {
            width: 100%;
            max-width: 250px;
            justify-content: center;
        }
        }
        </style>

<!-- ===== MODERN NEWS SECTION ===== -->
<section class="sigma-news-section">
  <class="container">
    <!-- Header with Animated Elements -->
    <div class="sigma-section-header text-center">
      <div class="sigma-header-decoration">
        <div class="sigma-ornament sigma-ornament-left">✧</div>
        <h2 class="sigma-section-title-news">
          <span class="sigma-title-line">Berita</span> <span class="sigma-title-highlight">Terkini</span>
        </h2>
        <div class="sigma-ornament sigma-ornament-right">✧</div>
      </div>
      <p class="sigma-section-subtitle">Update kegiatan dan informasi terkini PTQ IQRO'</p>
      <div class="sigma-header-underline"></div>
    </div>

    {{-- Filter Kategori --}}
    <div class="flex flex-wrap justify-center gap-3 mb-8">
    <button
        class="filter-btn px-4 py-2 text-sm font-medium rounded-full bg-green-800 text-white shadow hover:bg-green-700 transition"
        data-filter="all"
    >
        <i class="fas fa-layer-group mr-2"></i> Semua
    </button>

    @foreach($categories as $category)
        <button
            class="filter-btn px-4 py-2 text-sm font-medium rounded-full bg-gray-100 text-gray-700 hover:bg-green-700 hover:text-white shadow transition"
            data-filter="category-{{ $category->id }}"
        >
            <i class="fas fa-tag mr-2"></i> {{ $category->name }}
        </button>
    @endforeach
</div>


    {{-- Daftar Postingan --}}
    <section class="max-w-[1240px] mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-6 mb-10">
        @foreach ($latest as $item)
        @php
            $bodyText = strip_tags($item->content);
        @endphp
        <div 
            class="post-card group bg-white border border-gray-200 rounded-2xl p-4 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out" 
            data-category="category-{{ $item->category_id }}"
        >
            <div class="mb-4 overflow-hidden rounded-xl">
                <img 
                    src="{{ Storage::url($item->thumbnail) }}" 
                    alt="{{ $item->title }}" 
                    class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition duration-300 ease-in-out"
                >
            </div>
            <p class="inline-block px-3 py-1 mb-2 text-[10px] font-medium uppercase tracking-wide text-white bg-green-700 rounded-full">
                {{ $item->category->name }}
            </p>
            <h3 class="font-semibold text-xl text-gray-800 mb-1 line-clamp-2">
                {{ $item->title }}
            </h3>
            <p class="text-gray-500 text-sm mb-2">
                Oleh: <span class="font-medium text-gray-700">{{ $item->author }}</span>
            </p>
            <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">
                {{ \Illuminate\Support\Str::words($bodyText, 20) }}
            </p>
            <div class="flex justify-between items-center">
                <a href="{{ route('baca', $item->slug) }}" class="text-white bg-green-700 hover:bg-green-800 px-4 py-2 text-sm rounded-full transition">
                    Baca
                </a>
                <span class="text-xs text-gray-400">
                    {{ $item->created_at->format('d M Y') }}
                </span>
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- Script filter --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const posts = document.querySelectorAll('.post-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');

                // Active button styling
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-green-800', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                button.classList.add('bg-green-800', 'text-white');
                button.classList.remove('bg-gray-200', 'text-gray-700');

                // Filter posts
                posts.forEach(post => {
                    const category = post.getAttribute('data-category');
                    if (filter === 'all' || filter === category) {
                        post.classList.remove('hidden');
                    } else {
                        post.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>

@endsection
