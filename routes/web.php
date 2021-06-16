<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
//crud

//dishub
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\AgendaController;
//akhir dishub


use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\BupatiController;
use App\Http\Controllers\PuskesmaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\WakilbupatiController;
use App\Http\Controllers\SekdaController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailsejarahController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\DinasdetailController;
use App\Http\Controllers\DinastabController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\BannerController;

use App\Http\Controllers\TagController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\BeritaController;
//akhir crud

//Halaman statis

//dishub
route::get('/',[halamanController::class,'index']);
route::get('/v-visimisi',[halamanController::class,'visimisi']);
route::get('/v-agenda',[halamanController::class,'agenda']);
route::get('/v-struktur',[halamanController::class,'struktur']);
//akhir dishub

route::get('/pengumumantemp',[halamancontroller::class,'pengumuman']);
route::get('/pengumuman-cari',[halamancontroller::class,'hascarpengumuman']);
route::get('/bupatitemp',[halamanController::class,'bupati']);
route::get('/sejarahtemp',[halamanController::class,'sejarah']);
route::get('/wakilbupatitemp',[halamanController::class,'wakilbupati']);
route::get('/sekdatemp',[halamanController::class,'sekda']);
route::get('/dinastemp',[halamanController::class,'dinas']);
route::get('/badandaerahtemp',[halamanController::class,'badandaerah']);
route::get('/kecamatantemp',[halamanController::class,'kecamatan']);
route::get('/desatemp',[halamanController::class,'desa']);
route::get('/puskesmastemp',[halamanController::class,'puskesmas']);

route::get('/wisatatemp',[halamanController::class,'wisata']);
route::get('/downloadtemp',[halamanController::class,'download']);
route::get('/agenda-detail/{agenda:id}',[halamanController::class,'agendadet'])->name('agenda-detail');
route::get('/pengdet/{pengumuman:id}',[halamanController::class,'pengdet'])->name('pengdet');
route::get('/getdownload/{download:id}',[halamanController::class,'getDownload'])->name('getdownload');

//Akhir halaman statis

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth','ceklevel:admin,operator']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    // route::get('/halaman',[HalamanController::class,'index'])->name('halaman');
   
    //crud
    Route::resource('bupati', BupatiController::class);
    Route::resource('pimpinan', PimpinanController::class);
    Route::resource('puskesmas', PuskesmaController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('wakilbupati', WakilbupatiController::class);
    Route::resource('sekda', SekdaController::class);
    Route::resource('download', DownloadController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('detailsejarah', DetailsejarahController::class);
    Route::resource('pelayanan', PelayananController::class);
    Route::resource('dinasdetail', DinasdetailController::class);
    Route::resource('dinastab', DinastabController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('tags', TagController::class);
    Route::resource('jabatan', JabatanController::class);
    
    Route::resource('slide', SlideController::class);
    Route::resource('visimisi', VisimisiController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('tips', TipController::class);
    Route::resource('berita', BeritaController::class);

    route::get('/admin',[LoginController::class,'index'])->name('admin');
    route::post('/deladmin/{users:id}',[LoginController::class,'destroy'])->name('deladmin');
    route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

    // akhir crud
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {

    route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
    route::get('/edituser/{users:id}',[LoginController::class,'edit'])->name('edituser');   
    route::put('/postedit/{users:id}',[LoginController::class,'update'])->name('postedit');   
});
