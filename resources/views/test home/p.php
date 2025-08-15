<div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md">
      <div class="flex flex-col items-center">
        <img src="{{ asset('logoptq.png') }}" alt="Logo PTQ IQRO'" class="w-24 h-24 mb-4" />
        <h2 class="text-2xl font-bold text-green-700 mb-2">Akses Data Hafalan</h2>
        <p class="text-gray-600 text-center text-sm mb-6">
          Masukkan passcode yang telah diberikan oleh admin PTQ IQRO' untuk mengakses sistem
        </p>
      </div>

      <form id="gateForm" method="POST" action="{{ route('check-passcode') }}">
        @csrf

        {{-- Simpan jenis laporan (ikhwan/akhwat) --}}
        <input type="hidden" name="jenis" value="{{ request('jenis') }}">

        <div class="relative mb-4">
          <input type="password" name="passcode" placeholder="Masukkan Passcode"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 pl-10 focus:outline-none focus:border-green-500" required />
          <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
        </div>

        <button type="submit"
          class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out">
          Masuk
        </button>

        @if(session('error'))
          <div class="bg-red-100 text-red-700 mt-4 p-2 rounded text-sm text-center">
            {{ session('error') }}
          </div>
        @endif
      </form>

      <div class="mt-6 text-center text-sm text-gray-500">
        Butuh bantuan? <a href="https://wa.me/6285711212732" target="_blank" class="text-green-600 hover:underline">Hubungi Admin</a>
      </div>
    </div>

    <div class="gate-container">
    <div class="gate-wrapper" id="gateWrapper">
      <img src="{{ asset('logoptq.png') }}" alt="Logo PTQ IQRO'" class="gate-logo" />
      <h2>Akses Data Hafalan</h2>
      <p>Masukkan passcode yang telah diberikan oleh admin PTQ IQRO' untuk mengakses sistem</p>

      <form id="gateForm" method="POST" action="{{ route('check-passcode') }}">
        @csrf
        <div class="gate-input-group">
          <input type="password" name="passcode" value="{{ request('jenis') }}" placeholder="Masukkan Passcode" class="gate-input" required />
          <i class="fas fa-lock gate-input-icon"></i>
        </div>
        <button type="submit" class="gate-btn">
          <span class="btn-text">Masuk</span>
        </button>
        @if(session('error'))
          <div class="gate-error">{{ session('error') }}</div>
        @endif
      </form>

      <div class="gate-footer">
        Butuh bantuan? <a href="https://wa.me/6285711212732" target="_blank">Hubungi Admin</a>
      </div>
    </div>
  </div>