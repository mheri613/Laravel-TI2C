<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello world';
});

// membuat route
Route::get('/belajar', function () {
    echo '<h1>hello world</h1>';
    echo '<p>Sedang belajar laravel</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo '<h style="text-align: center"><u>Welcome Profil Coba</u></h>';
});

//router parameter
Route::get('/mahasiswa/Nama', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

// route parameter dengan 2 parameter 
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    echo "Cek sisa stok untuk $a $b";
});


// route dengan opsional parameter
Route::get(
    '/stok_barang/{jenis?}/{merek?}',
    function ($a = 'smartphone', $b = 'samsung') {
        return "Cek sisa stok untuk $a $b";
    }
);

// route parameter dengan regular expression 
//Route::get('/user/{id}', function ($id) {
//    return "Tampilkan user dengan id = $id";
//    });


Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');


//Route::get('/user/{id}', function ($id) {
//    return "Tampilkan user dengan id = $id";
//    })->where('id', '[A-Z]{2}[0-9]+');

// route redirect
Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

// route group
Route::get('/admin/mahasiswa', function () {
    return "<h1>Daftar Mahasiswa</h1>";
});
Route::get('/admin/dosen', function () {
    return "<h1>Daftar Dosen</h1>";
});
Route::get('/admin/karyawan', function () {
    return "<h1>Daftar Karyawan</h1>";
});

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});

//route fallback
Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

// route priority
Route::get('/buku/1', function () {
    return "Buku ke-1";
});
Route::get('/buku/1', function () {
    return "Buku saya ke-1";
});
Route::get('/buku/1', function () {
    return "Buku kita ke-1";
});


Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});
Route::get('/buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});
Route::get('/buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});

Route::get('mahasiswa/andi', function () {
    echo "Halaman mahasiswa andi";
});

// Penulisan ini tidak ada bedanya dengan:        
Route::get('/mahasiswa/andi', function () {
    echo "Halaman mahasiswa andi";
});

//routes laporan 2
//membuat view
Route::get('/home', function () {
    return view('halaman_home');
});

Route::get('/mahasiswa', function () {
    $mahasiswa01 = "Indra Kenz";   
    $mahasiswa02 = "Doni Salmanan";    
    $mahasiswa03 = "Ulfi Rizkia";   
    $mahasiswa04 = "Deliana Putrii";   
    return view('kampus.mahasiswa')->with(compact("mahasiswa01",   
    "mahasiswa02", "mahasiswa03", "mahasiswa04"));    
    });

