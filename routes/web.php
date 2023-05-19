<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// controller halaman login
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'userRegister']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'cekLoginUser']);
Route::get('/LoginAdmin', [AuthController::class, 'loginAdmin']);
Route::post('/LoginAdmin', [AuthController::class, 'cekLoginAdmin']);
Route::get('/logout', [AuthController::class, 'logout']);


// controller halaman user(pasien/terapis)
Route::get('/profil', [UserController::class, 'profile']);
Route::get('/urlcontactUs', [UserController::class, 'contactUs']);
Route::post('/verifikasiProfile', [UserController::class, 'verifikasiProfile']);
Route::put('/updateProfile', [UserController::class, 'updateProfile']);
Route::get('/artikelTertulis', [UserController::class, 'artikelTertulis']);
Route::get('/tulisArtikel', [UserController::class, 'tulisArtikel']);
Route::post('/tulisArtikel', [UserController::class, 'postArticles']);
Route::get('/artikel/{id}', [UserController::class, 'bacaArtikel']);
Route::get('/bookingTerapis', [UserController::class, 'bookingTerapis']);
Route::get('/appointment/{id}', [UserController::class, 'appointment']);
Route::post('/appointment', [UserController::class, 'makingAppointment']);
Route::get('/daftarJanjiTemu', [UserController::class, 'transaksi']);
Route::get('/riwayatkonsultasi', [UserController::class, 'riwayatkonsultasi']);
Route::get('/detailKonsultasi/{id}', [UserController::class, 'detailKonsultasi']);
Route::get('/konfirmasiKonsultasi/{id}', [UserController::class, 'konfirmasiKonsultasi']);
Route::put('/konfirmasiKonsultasi/{id}', [UserController::class, 'konsultasiDikonfirmasi']);
Route::get('/services', [UserController::class, 'services']);
Route::get('/article', [UserController::class, 'article']);
Route::get('/sukses', [UserController::class, 'sukses']);
Route::get('/aboutus', [UserController::class, 'aboutus']);
Route::get('/bookSum', [UserController::class, 'bookSum']);

// controller halaman admin
Route::get('/admin/dashboard', [AdminController::class, 'Dashboard']);
Route::get('/admin/listAdmin', [AdminController::class, 'listAdmin']);
Route::get('/admin/listUser', [AdminController::class, 'listUser']);
Route::get('/admin/listTerapis', [AdminController::class, 'listTerapis']);
Route::get('/admin/janjiTemu', [AdminController::class, 'janjiTemu']);
Route::get('/admin/pembayaran', [AdminController::class, 'pembayaran']);
Route::get('/admin/detailPengguna/{id}', [AdminController::class, 'detailPengguna']);
Route::get('/admin/detailKTP/{id}', [AdminController::class, 'detailKTP']);
Route::get('/admin/validasiPengguna/{id}', [AdminController::class, 'validasiPengguna']);
Route::put('/admin/validasiPengguna/{id}', [AdminController::class, 'prosesValidasiPengguna']);

Route::get('/admin/detailTerapis/{id}', [AdminController::class, 'detailTerapis']);
Route::get('/admin/detailSTR/{id}', [AdminController::class, 'detailSTR']);
Route::get('/admin/validasiTerapis/{id}', [AdminController::class, 'validasiTerapis']);
Route::put('/admin/validasiTerapis/{id}', [AdminController::class, 'prosesValidasiTerapis']);

// controller halaman manajemenen halaman layanan
Route::get('/admin/daftarLayanan', [AdminController::class, 'daftarLayanan']);
Route::get('/admin/tambahLayanan', [AdminController::class, 'tambahLayanan']);
Route::post('/admin/tambahLayanan', [AdminController::class, 'createLayanan']);
Route::get('/admin/fotoLayanan/{id}', [adminController::class, 'fotoLayanan']);
Route::get('/admin/editLayanan/{id}', [adminController::class, 'editLayanan']);
Route::put('/admin/editLayanan/{id}', [adminController::class, 'updateLayanan']);
Route::delete('/admin/deleteLayanan/{id}', [adminController::class, 'deleteServide']);
