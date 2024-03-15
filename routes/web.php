<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/daftar', function () {
    return view('auth/daftar');
});

Route::get('/lupa password', function () {
    return view('auth/lupa_password');
});

Route::get('/verifikasi', function () {
    return view('auth/verifikasi');
});

Route::get('/', function () {
    return view('home');
});

Route::prefix('user')->group(function () {
    Route::get('/Tentang Kami', function () {
        return view('user/tentang_kami');
    });
    Route::get('/Detail Tentang Kami', function () {
        return view('user/tentangkami_detail');
    });

    Route::get('/Riset', function () {
        return view('user/riset');
    });
    Route::get('/Detail Riset', function () {
        return view('user/riset_detail');
    });

    Route::get('/Konsultasi', function () {
        return view('user/konsultasi');
    });
    Route::get('/Detail Konsultasi', function () {
        return view('user/konsultasi_detail');
    });

    Route::get('/Publikasi', function () {
        return view('user/publikasi');
    });
    Route::get('/Detail Publikasi', function () {
        return view('user/publikasi_detail');
    });

    Route::get('/Berita', function () {
        return view('user/berita');
    });
    Route::get('/Detail Berita', function () {
        return view('user/berita_detail');
    });

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Pelatihan', function () {
        return view('user/pelatihan');
    });
    Route::get('/Detail Pelatihan', function () {
        return view('user/pelatihan_detail');
    });

    Route::get('/Kegiatan', function () {
        return view('user/kegiatan');
    });
    Route::get('/Detail Kegiatan', function () {
        return view('user/kegiatan_detail');
    });

    Route::get('/Pembayaran', function () {
        return view('user/pembayaran');
    });

    Route::get('/Detail Riwayat', function () {
        return view('user/detail_riwayat');
    });
});



Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin/homeAdmin');
    });

    Route::get('/TentangKami', function () {
        return view('admin/tentangkamiAdmin');
    });

    Route::get('/Riset', function () {
        return view('admin/risetAdmin');
    });

    Route::get('/Konsultasi', function () {
        return view('admin/konsultasiAdmin');
    });

    Route::get('/Publikasi', function () {
        return view('admin/publikasiAdmin');
    });

    Route::get('/Akademi', function () {
        return view('admin/akademiAdmin');
    });

    Route::get('/Berita', function () {
        return view('admin/beritaAdmin');
    });
});
