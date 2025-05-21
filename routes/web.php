<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventFavoriteController;

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

//INI DATABASE
// Route::post('/register', [RegisterController::class, 'create'])->name('register.create');

Route::get('/register', [RegisterController::class, 'index'])->name('register-index');
Route::post('/register', [RegisterController::class, 'store'])->name('register-store');

Route::get('/dashboard', [EventController::class, 'dashboard'])->name('user-dashboard');
Route::post('/event', [EventController::class, 'store'])->name('event-store');

Route::get('/detail/{id}', [EventController::class, 'show'])->name('event-show');

Route::get('/event', [EventController::class, 'index'])->name('event-index');
Route::post('/event', [EventController::class, 'store'])->name('event-store');

Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta-index');
Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta-store');

Route::get('/eventget', [EventController::class, 'index']);

Route::post('/event/favorite/{event}', [EventController::class, 'toggleFavorite'])->name('event-favorite');
Route::get('/disukai', [EventController::class, 'favoriteList'])->name('event-favorites');




//INI AUTHENTIFIKASI
Route::get('/auth/login', function () {
    return view('auth.login.login', [
        'title' => 'Login'
    ]);
})->name('login');

Route::get('/auth/daftar', function () {
    return view('auth.daftar.daftar', [
        'title' => 'Daftar'
    ]);
});
//INI ADMIN
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.dashboard', [
        'title' => 'Dashboard'
    ]);
});
Route::get('/admin/permohonan', function () {
    return view('admin.permohonan.permohonan', [
        'title' => 'Permohonan'
    ]);
});
Route::get('/admin/perlutindakan', function () {
    return view('admin.perlutindakan.perlu', [
        'title' => 'Perlu Tindakan'
    ]);
});
Route::get('/admin/expired', function () {
    return view('admin/expired.expired', [
        'title' => 'Event Expired'
    ]);
});

//INI USER
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard-user');

// Route::get('/user/dashboard', function () {
//     return view('user.dashboard.dash', [
//         'title' => 'Dashboard'
//     ]);
// });

// Route::get('/user/details', function () {
//     return view('user.details.detailevent', [
//         'title' => 'Detail Event'
//     ]);
// });
Route::get('/user/disukai', function () {
    return view('user.disukai.suka', [
        'title' => 'Disukai'
    ]);
});
Route::get('/user/addnote', function () {
    return view('user.addnote.addnote', [
        'title' => 'Addnote'
    ]);
});
Route::get('/user/kalender', function () {
    return view('user.kalender.calendar', [
        'title' => 'Kalender'
    ]);
});
Route::get('/user/notifikasi', function () {
    return view('user.notifikasi.notif', [
        'title' => 'Notifikasi'
    ]);
});
Route::get('/user/pengajuan', function () {
    return view('user.pengajuan.pengajuan', [
        'title' => 'Pengajuan'
    ]);
});
Route::get('/user/profil', function () {
    return view('user.profil.profil', [
        'title' => 'Profil'
    ]);
});
Route::get('/user/register_user', function () {
    return view('user.register_user.register', [
        'title' => 'Register User'
    ]);
});
Route::get('/user/register_event', function () {
    return view('user.register_event.register', [
        'title' => 'Register Event'
    ]);
});
Route::get('/user/search', function () {
    return view('user.search.search', [
        'title' => 'Search Event'
    ]);
});
Route::get('/user/filter', function () {
    return view('user.filter.filter', [
        'title' => 'Filter Event'
    ]);
});