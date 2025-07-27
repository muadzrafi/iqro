<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/home', function () {
    return redirect('/');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/', [App\Http\Controllers\PostController::class,'beranda']);

Route::get('/blog',[PostController::class , 'index'])->name('blog');

Route::get('/profile', function () {
    return redirect('/profile-ptq');
});

Route::get('/profile', function () {
    return view('profile-ptq');
});

Route::get('/jurnalis', function () {
    return redirect('/profile-jurnalis');
});

Route::get('/jurnalis', function () {
    return view('profile-jurnalis');
});

// Route::get('/blog1', function () {
//     return redirect('/blog1');
// });

// Route::get('/blog1', function () {
//     return view('blog');
// });

// Route::get('/blogread', function () {
//     return redirect('/blogread');
// });

// Route::get('/blogread', function () {
//     return view('blog-read');
// });

Route::get('/ekskul', function () {
    return redirect('/profile-ekskul');
});

Route::get('/ekskul', function () {
    return view('profile-ekskul');
});

Route::get('/perpus', function () {
    return redirect('/profile-perpus');
});

Route::get('/perpus', function () {
    return view('profile-perpus');
});

Route::get('/dkm', function () {
    return redirect('/profile-dkm');
});

Route::get('/dkm', function () {
    return view('profile-dkm');
});

Route::get('/isqi', function () {
    return redirect('/profile-isqi');
});

Route::get('/isqi', function () {
    return view('profile-isqi');
});

Route::get('/coding', function () {
    return redirect('/profile-coding');
});

Route::get('/coding', function () {
    return view('profile-coding');
});

Route::get('/prodemas', function () {
    return redirect('/prodemas');
});

Route::get('/prodemas', function () {
    return view('profile-prodemas');
});

Route::get('/keolahragaan', function () {
    return redirect('/keolahragaan');
});

Route::get('/keolahragaan', function () {
    return view('profile-keolahragaan');
});

Route::get('/mpk', function () {
    return redirect('/mpk');
});

Route::get('/mpk', function () {
    return view('profile-mpk');
});

Route::get('/pengasuhan', function () {
    return redirect('/pengasuhan');
});

Route::get('/pengasuhan', function () {
    return view('profile-pengasuhan');
});

Route::get('/tahfizh', function () {
    return redirect('/tahfizh');
});

Route::get('/tahfizh', function () {
    return view('profile-tahfizh');
});

Route::get('/nontahfizh', function () {
    return redirect('/nontahfizh');
});

Route::get('/nontahfizh', function () {
    return view('profile-nontahfizh');
});

// Route::get('/blog', function () {
//     return redirect('/blog');
// });

// Route::get('/blog', function () {
//     return view('maintenance');
// });

Route::get('/ppdb', function () {
    return redirect('/ppdb');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});


Route::get('/login', function () {
    return redirect('admin');
});



// Route::get('/admin', function () {
//      return view('admin');
// });

Route::get('/login-gate', function () {
    return view('login-gate');
})->name('login-gate');

Route::post('/check-passcode', function (\Illuminate\Http\Request $request) {
    $passcode = $request->input('passcode');
    $correct = 'iqro2025'; // Ganti dengan passcode rahasia kamu

    if ($passcode === $correct) {
        session(['access_granted' => true]);
        return redirect()->to('/report');
    }

    return redirect()->route('login-gate')->with('error', 'Passcode salah!');
})->name('check-passcode');

Route::get('/report', function () {
    if (!session('access_granted')) {
        return redirect()->route('login-gate')->with('error', 'Silakan masukkan passcode.');
    }

    return view('report-list'); // tampilan tujuan
});

Route::get('/report', [App\Http\Controllers\Controller::class,'LaporanBulanan']);

Route::get('/report/id', function(){
    return view('report-detail');
    
Route::get('/inputblog', function () {
    return redirect('inputblog');
    
Route::get('/inputblog', function () {
    return redirect('inputblog');
    
Route::get('/inputblog', function () {
    return view('inputblog');
    
Route::get('/profile', function () {
    return redirect('/profile-ptq');
});

Route::get('/profile', function () {
    return view('profile-ptq');
});
   
});
});
});
});

Route::get('/{slug}', [PostController::class, 'baca'])->name('baca');