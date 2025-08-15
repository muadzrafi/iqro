<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

// 🔁 Redirect home ke root
Route::redirect('/home', '/');

// 🏠 Halaman Utama
Route::get('/', [PostController::class, 'beranda']);

// 👤 Profile Pages
Route::view('/profile', 'profile-ptq')->name('profile.ptq');
Route::view('/jurnalis', 'profile-jurnalis')->name('profile.jurnalis');
Route::view('/ekskul', 'profile-ekskul')->name('profile.ekskul');
Route::view('/perpus', 'profile-perpus')->name('profile.perpus');
Route::view('/dkm', 'profile-dkm')->name('profile.dkm');
Route::view('/isqi', 'profile-isqi')->name('profile.isqi');
Route::view('/coding', 'profile-coding')->name('profile.coding');
Route::view('/prodemas', 'profile-prodemas')->name('profile.prodemas');
Route::view('/keolahragaan', 'profile-keolahragaan')->name('profile.keolahragaan');
Route::view('/mpk', 'profile-mpk')->name('profile.mpk');
Route::view('/pengasuhan', 'profile-pengasuhan')->name('profile.pengasuhan');
Route::view('/tahfizh', 'profile-tahfizh')->name('profile.tahfizh');
Route::view('/nontahfizh', 'profile-nontahfizh')->name('profile.nontahfizh');

// 📄 PPDB Page
Route::view('/ppdb', 'ppdb')->name('ppdb');

// 📝 PPDB
Route::view('/ppdb', 'ppdb')->name('ppdb');

// 📊 Report Menu (Bebas diakses)
Route::get('/report', function () {
    return view('report-list'); // langsung ke daftar laporan
})->name('report.list');

// 🔐 Login Gate (per jenis kelamin)
Route::get('/login-gate/{jenis}', function ($jenis) {
    return view('login-gate', ['jenis' => $jenis]);
})->name('login-gate');

// 🛂 Cek Passcode berdasarkan jenis
Route::post('/check-passcode', function (Illuminate\Http\Request $request) {
    $jenis = $request->input('jenis');
    $passcode = $request->input('passcode');

    $correctCodes = [
        'ikhwan' => 'ikhwan2025',
        'akhwat' => 'akhwat2025',
    ];

    if (isset($correctCodes[$jenis]) && $passcode === $correctCodes[$jenis]) {
        session(['access_granted_' . $jenis => true]);
        return redirect()->route('report.' . $jenis);
    }

    return redirect()->route('login-gate', ['jenis' => $jenis])
                     ->with('error', 'Passcode salah!');
    })->name('check-passcode');

// 📄 Laporan Ikhwan (proteksi passcode)
Route::get('/report/ikhwan', function () {
    if (!session('access_granted_ikhwan')) {
        return redirect()->route('login-gate', ['jenis' => 'ikhwan'])
                         ->with('error', 'Silakan masukkan passcode.');
    }
    return app(Controller::class)->LaporanIkhwan();
})->name('report.ikhwan');

// 📄 Laporan Akhwat (proteksi passcode)
Route::get('/report/akhwat', function () {
    if (!session('access_granted_akhwat')) {
        return redirect()->route('login-gate', ['jenis' => 'akhwat'])
                         ->with('error', 'Silakan masukkan passcode.');
    }
    return app(Controller::class)->LaporanAkhwat();
})->name('report.akhwat');

// (Optional) Detail laporan
Route::view('/report/id', 'report-detail')->name('report.detail');

// 📝 Blog
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::view('/inputblog', 'inputblog')->name('inputblog');
Route::get('/{slug}', [PostController::class, 'baca'])->name('baca'); // slug blog
