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
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'cekLoginUser']);
Route::get('/LoginAdmin', [AuthController::class, 'loginAdmin'])->middleware('guest');
Route::post('/LoginAdmin', [AuthController::class, 'cekLoginAdmin']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


// controller halaman user(pasien/terapis)
Route::get('/profil', [UserController::class, 'profile'])->middleware('auth');
Route::get('/urlcontactUs', [UserController::class, 'contactUs']);
Route::post('/verifikasiProfile', [UserController::class, 'verifikasiProfile'])->middleware('auth');
Route::put('/updateProfile', [UserController::class, 'updateProfile'])->middleware('auth'); 
Route::get('/artikelTertulis', [UserController::class, 'artikelTertulis'])->middleware(['auth', 'mustTerapis']); 
Route::get('/tulisArtikel', [UserController::class, 'tulisArtikel'])->middleware(['auth', 'mustTerapis']);
Route::post('/tulisArtikel', [UserController::class, 'postArticles'])->middleware(['auth', 'mustTerapis']); 
Route::get('/artikel/{id}', [UserController::class, 'bacaArtikel'])->middleware(['auth']);
Route::get('/bookingTerapis', [UserController::class, 'bookingTerapis'])->middleware(['auth', 'mustPatient']); 
Route::get('/appointment/{id}', [UserController::class, 'appointment'])->middleware(['auth', 'mustPatient']);
Route::post('/appointment', [UserController::class, 'makingAppointment'])->middleware(['auth', 'mustPatient']);
Route::get('/daftarJanjiTemu', [UserController::class, 'transaksi'])->middleware(['auth', 'mustTerapis']);
Route::get('/detailJanjiTemu/{id}', [UserController::class, 'detailJanjiTemu'])->middleware(['auth', 'mustTerapis']);
Route::get('/riwayatkonsultasi', [UserController::class, 'riwayatkonsultasi'])->middleware(['auth', 'mustPatient']); 
Route::get('/detailKonsultasi/{id}', [UserController::class, 'detailKonsultasi'])->middleware(['auth', 'mustPatient']); 
Route::get('/konfirmasiKonsultasi/{id}', [UserController::class, 'konfirmasiKonsultasi'])->middleware(['auth', 'mustTerapis']);
Route::put('/konfirmasiKonsultasi/{id}', [UserController::class, 'konsultasiDikonfirmasi'])->middleware(['auth', 'mustTerapis']);
Route::get('/services', [UserController::class, 'services']); 
Route::get('/article', [UserController::class, 'article']); 
Route::get('/sukses', [UserController::class, 'sukses'])->middleware(['auth', 'mustPatient']);
Route::get('/aboutus', [UserController::class, 'aboutus']); 
Route::get('/pembayaran/{id}', [UserController::class, 'pembayaran'])->middleware(['auth', 'mustPatient']); 
Route::post('/pembayaran/{id}', [UserController::class, 'create_payments'])->middleware(['auth', 'mustPatient']);  
Route::get('/bookSum/{id}', [UserController::class, 'bookSum'])->middleware(['auth', 'mustPatient']); 

// controller halaman admin
Route::get('/admin/dashboard', [AdminController::class, 'Dashboard'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/listAdmin', [AdminController::class, 'listAdmin'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/listUser', [AdminController::class, 'listUser'])->middleware(['auth', 'mustAdmin']);
Route::get('/ExportDataPatient', [AdminController::class, 'ExportDataPatient'])->middleware(['auth', 'mustAdmin']);
Route::get('/ExportDataTerapis', [AdminController::class, 'ExportDataTerapis'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/listTerapis', [AdminController::class, 'listTerapis'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/janjiTemu', [AdminController::class, 'janjiTemu'])->middleware(['auth', 'mustAdmin']);
Route::get('/ExportDataJanjiTemu', [AdminController::class, 'ExportDataJanjiTemu'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/pembayaran', [AdminController::class, 'pembayaran'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailPembayaran/{id}', [AdminController::class, 'detailPembayaran'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/validasiPembayaran/{id}', [AdminController::class, 'validasiPembayaran'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/validasiPembayaran/{id}', [AdminController::class, 'prosesValidasiPembayaran'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailPengguna/{id}', [AdminController::class, 'detailPengguna'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailKTP/{id}', [AdminController::class, 'detailKTP'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/validasiPengguna/{id}', [AdminController::class, 'validasiPengguna'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/validasiPengguna/{id}', [AdminController::class, 'prosesValidasiPengguna'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailTerapis/{id}', [AdminController::class, 'detailTerapis'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailSTR/{id}', [AdminController::class, 'detailSTR'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/validasiTerapis/{id}', [AdminController::class, 'validasiTerapis'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/validasiTerapis/{id}', [AdminController::class, 'prosesValidasiTerapis'])->middleware(['auth', 'mustAdmin']);

// controller halaman manajemenen halaman layanan
Route::get('/admin/daftarLayanan', [AdminController::class, 'daftarLayanan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/tambahLayanan', [AdminController::class, 'tambahLayanan'])->middleware(['auth', 'mustAdmin']);
Route::post('/admin/tambahLayanan', [AdminController::class, 'createLayanan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/fotoLayanan/{id}', [adminController::class, 'fotoLayanan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/editLayanan/{id}', [adminController::class, 'editLayanan'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/editLayanan/{id}', [adminController::class, 'updateLayanan'])->middleware(['auth', 'mustAdmin']);
Route::delete('/admin/deleteLayanan/{id}', [adminController::class, 'deleteServide'])->middleware(['auth', 'mustAdmin']);
