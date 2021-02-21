<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminPegawaiController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminMasyarakatController;
use App\Http\Controllers\adminJadwalController;
use App\Http\Controllers\adminKategoriController;
use App\Http\Controllers\adminTanyaController;
use App\Http\Controllers\adminMateriController;
use App\Http\Controllers\adminDokumenController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\dokumenController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\materiController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jadwalTerlaksanaController;
use App\Http\Controllers\jadwalBatalController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\masyarakatProfileController;
use App\Http\Controllers\masyarakatTanyaController;
use App\Http\Controllers\pegawaiMateriController;
use App\Http\Controllers\pegawaiJadwalController;
use App\Http\Controllers\pegawaiTanyaController;
use App\Http\Controllers\pegawaiDokumenController;
use App\Http\Controllers\pegawaiProfileController;
use App\Models\Jadwal;
use App\Models\Kategori;
use App\Models\Masyarakat;
use App\Models\Materi;
use App\Models\Pegawai;
use App\Models\Tanya;
use App\Models\Dokumen;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Halaman Utama Route
Route::resource('/',homeController::class);
Route::resource('/pegawai',pegawaiController::class);
Route::resource('/materi',materiController::class);
Route::resource('/dokumen',dokumenController::class);
Route::resource('/jadwal',jadwalController::class);
Route::resource('/jadwalterlaksana',jadwalTerlaksanaController::class);
Route::resource('/jadwalbatal',jadwalBatalController::class);

//Halaman Utama End
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/masuk', function () {
    return view('login');
})->middleware('guest')->name('login');
Route::post('/kirimdata',[loginController::class,'masuk']);
Route::get('/keluar',[loginController::class,'keluar']);



//Admin Route
Route::resource('admin-dashboard',adminDashboardController::class)->middleware('auth:admin');
Route::resource('admin-pegawai',adminPegawaiController::class)->middleware('auth:admin');
Route::resource('admin-dokumen',adminDokumenController::class)->middleware('auth:admin');
Route::resource('admin-masyarakat',adminMasyarakatController::class)->middleware('auth:admin');
Route::resource('admin-jadwal',adminJadwalController::class)->middleware('auth:admin');
Route::resource('admin-materi',adminMateriController::class)->middleware('auth:admin');
Route::resource('admin-kategori',adminKategoriController::class)->middleware('auth:admin');
Route::resource('admin-tanya',adminTanyaController::class)->middleware('auth:admin');

//Pegawai Route
Route::resource('pegawai-profile',pegawaiProfileController::class)->middleware('auth:pegawai');
Route::resource('pegawai-materi',pegawaiMateriController::class)->middleware('auth:pegawai');
Route::resource('pegawai-dokumen',pegawaiDokumenController::class)->middleware('auth:pegawai');
Route::resource('pegawai-jadwal',pegawaiJadwalController::class)->middleware('auth:pegawai');
Route::resource('pegawai-tanya',pegawaiTanyaController::class)->middleware('auth:pegawai');

//Masyarakat Route
Route::resource('masyarakat-tanya',masyarakatTanyaController::class)->middleware('auth:masyarakat');
Route::resource('masyarakat-profile',masyarakatProfileController::class)->middleware('auth:masyarakat');
