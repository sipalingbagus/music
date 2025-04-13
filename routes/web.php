<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PreferensiController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\CoverController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/upload', [SongController::class, 'uploadSongCover'])->name('upload.song.cover');
Route::post('/upload/song-cover', [SongController::class, 'uploadSongCover'])->name('upload.song.cover');

Route::post('/upload-song', [SongController::class, 'uploadSong'])->name('upload.song');
Route::post('/upload-cover', [CoverController::class, 'uploadCover'])->name('upload.cover');

Route::get('/explore', function () {
    return view('explore'); // Pastikan Anda memiliki file view explore.blade.php
})->name('explore');
Route::get('/about', function () {
    return view('about'); // Pastikan Anda memiliki file view about.blade.php
})->name('about');
Route::get('/whatsnew', function () {
    return view('whatsnew'); // Pastikan view ini tersedia
})->name('whatsnew');

Route::get('/profile', function () {
    return view('profile'); // Pastikan view ini tersedia
})->name('profile');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');

Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware('auth')->name('riwayat');


Route::get('/favorit', [FavoritController::class, 'index'])->middleware('auth')->name('favorit');


Route::get('/preferensi', [PreferensiController::class, 'index'])->middleware('auth')->name('preferensi');

Route::get('/preferensi', [PreferensiController::class, 'index'])->name('preferensi');
Route::get('/favorit', [FavoritController::class, 'index'])->name('favorit');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/song/{id}', [SongController::class, 'show'])->name('song.show');
});
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('auth.login');
});
