{{-- resources/views/inputblog.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Berita - PTQ IQRO'</title>
  <link rel="icon" href="/logoptq.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="bg-green-50 min-h-screen font-sans">
  <div class="flex flex-col lg:flex-row max-w-7xl mx-auto mt-10 gap-6 p-4">
    
    {{-- FORM --}}
    <main class="w-full lg:w-1/2 bg-white p-6 rounded-xl shadow-xl">
      <h1 class="text-2xl font-bold text-green-800 mb-4">📝 Tambah Berita Baru</h1>
      <form id="newsForm" class="space-y-4">
        <input type="text" id="judul" placeholder="Judul Berita" class="input-style" />
        <input type="text" id="penulis" placeholder="Penulis" class="input-style" />
        <input type="date" id="tanggal" class="input-style" />
        <input type="text" id="thumbnail" placeholder="URL Thumbnail Gambar" class="input-style" />
        <input type="text" id="slug" placeholder="Slug URL (contoh: berita-santri-juara)" class="input-style" />
        <textarea id="meta_title" placeholder="Meta Title (SEO)" class="input-style"></textarea>
        <textarea id="meta_description" placeholder="Meta Description (SEO)" class="input-style"></textarea>
        
        <label class="block font-semibold text-green-700 mt-4">Konten Berita</label>
        <div id="editor" class="bg-white h-48 border border-green-300 rounded"></div>

        <div id="seoWarnings" class="text-red-600 text-sm mt-2 space-y-1"></div>

        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition w-full">Publikasikan</button>
      </form>
    </main>

    {{-- PREVIEW --}}
    <aside class="w-full lg:w-1/2 bg-white p-6 rounded-xl shadow-md overflow-auto max-h-[90vh]">
      <h2 class="text-xl font-bold text-gray-800 mb-4">🔍 Live Preview</h2>
      <img id="previewImage" src="" class="mb-4 rounded w-full object-cover h-48" style="display: none;">
      <h3 id="previewTitle" class="text-2xl font-bold text-green-800"></h3>
      <p class="text-sm text-gray-500 mb-2"><span id="previewAuthor"></span> - <span id="previewDate"></span></p>
      <div id="previewContent" class="text-gray-700"></div>
    </aside>
  </div>

  <style>
    .input-style {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #d1fae5;
      border-radius: 0.5rem;
      outline: none;
      transition: all 0.2s ease;
    }
    .input-style:focus {
      border-color: #10b981;
      box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
    }
  </style>

  <script>
    const quill = new Quill('#editor', { theme: 'snow' });

    // Update preview on input
    const fields = ['judul', 'penulis', 'tanggal', 'thumbnail'];
    fields.forEach(id => {
      document.getElementById(id).addEventListener('input', updatePreview);
    });
    quill.on('text-change', updatePreview);

    function updatePreview() {
      document.getElementById('previewTitle').innerText = document.getElementById('judul').value;
      document.getElementById('previewAuthor').innerText = document.getElementById('penulis').value;
      document.getElementById('previewDate').innerText = document.getElementById('tanggal').value;
      document.getElementById('previewContent').innerHTML = quill.root.innerHTML;

      const thumb = document.getElementById('thumbnail').value;
      const img = document.getElementById('previewImage');
      img.src = thumb;
      img.style.display = thumb ? 'block' : 'none';

      checkSEO();
    }

    function checkSEO() {
      let warnings = [];
      const title = document.getElementById('meta_title').value.trim();
      const desc = document.getElementById('meta_description').value.trim();
      const slug = document.getElementById('slug').value.trim();

      if (title.length < 40) warnings.push('Meta title terlalu pendek (min. 40 karakter).');
      if (desc.length < 100 || desc.length > 160) warnings.push('Meta description harus antara 100–160 karakter.');
      if (!/^[a-z0-9]+(?:-[a-z0-9]+)*$/.test(slug)) warnings.push('Slug hanya boleh huruf kecil dan tanda hubung.');

      document.getElementById('seoWarnings').innerHTML = warnings.map(w => `<div>⚠️ ${w}</div>`).join('');
    }

    document.getElementById('meta_title').addEventListener('input', checkSEO);
    document.getElementById('meta_description').addEventListener('input', checkSEO);
    document.getElementById('slug').addEventListener('input', checkSEO);

    document.getElementById('newsForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const data = {
        judul: document.getElementById('judul').value,
        penulis: document.getElementById('penulis').value,
        tanggal: document.getElementById('tanggal').value,
        thumbnail: document.getElementById('thumbnail').value,
        slug: document.getElementById('slug').value,
        meta_title: document.getElementById('meta_title').value,
        meta_description: document.getElementById('meta_description').value,
        konten: quill.root.innerHTML
      };
      console.log("DATA SIAP DISIMPAN:", data);
      alert("Berita disiapkan, simpan ke backend sekarang!");
    });
  </script>
</body>
</html>
