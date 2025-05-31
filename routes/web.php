<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ChangePasswordController,
    HomeController,
    InfoUserController,
    RegisterController,
    ResetController,
    SessionsController,
    MoodController,
    TespsikologiController,
    ArtikelController,
    KonsultasiController,
    DashboardadminController,
    DashboardpsikologController,
    DaftarPsikologController,
    HasilKonsultasiController
};



//////////////////////////
// ✅ ROOT REDIRECT //
//////////////////////////
Route::get('/', function () {
    if (auth()->check()) {
        $role = auth()->user()->role;
        switch ($role) {
            case 0: return redirect()->route('dashboard');
            case 1: return redirect()->route('admin.dashboardadmin');
            case 2: return redirect()->route('psikolog.dashboardpsikolog');
        }
    }
    return redirect()->route('login');
});

//////////////////////////
// ✅ AUTH ROUTES //
//////////////////////////
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/session', [SessionsController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

//////////////////////////
// ✅ LOGOUT ROUTE //
//////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');
});

/////////////////////////////////////////
// ✅ PASIEN ROUTES (role: 0) //
/////////////////////////////////////////
Route::middleware(['auth', 'role:0'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/mood', [MoodController::class, 'index'])->name('mood');
    Route::post('/mood', [MoodController::class, 'store'])->name('mood.store');

    Route::get('/tespsikologi', [TespsikologiController::class, 'index'])->name('tespsikologi');
    Route::post('/tespsikologi', [TespsikologiController::class, 'store'])->name('tespsikologi.store');

    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi');
    Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');

    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

    Route::get('/psikolog', [DaftarPsikologController::class, 'index'])->name('psikolog.index');

    Route::get('/user-profile', [InfoUserController::class, 'create']);
    Route::post('/user-profile', [InfoUserController::class, 'store']);

    // Route::post('/update-avatar', [InfoUserController::class, 'updateAvatar'])->name('update.avatar');


    // Halaman statis
    Route::view('/profile', 'profile')->name('profile');
    
    Route::view('/tables', 'tables')->name('tables');
    Route::view('/static-sign-in', 'static-sign-in')->name('sign-in');
    Route::view('/static-sign-up', 'static-sign-up')->name('sign-up');
});

/////////////////////////////////////////
// ✅ ADMIN ROUTES (role: 1) //
/////////////////////////////////////////
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/admin/dashboardadmin', [DashboardadminController::class, 'index'])->name('admin.dashboardadmin');
    
    Route::get('/psikolog', [DaftarPsikologController::class, 'index'])->name('psikolog.index');
    Route::get('/psikolog/create', [DaftarPsikologController::class, 'create'])->name('psikolog.create');
    Route::post('/psikolog', [DaftarPsikologController::class, 'store'])->name('psikolog.store');
    Route::get('/psikolog/{id}/edit', [DaftarPsikologController::class, 'edit'])->name('psikolog.edit');
    Route::put('/psikolog/{id}', [DaftarPsikologController::class, 'update'])->name('psikolog.update');
    Route::delete('/psikolog/{id}', [DaftarPsikologController::class, 'destroy'])->name('psikolog.destroy');


});

/////////////////////////////////////////
// ✅ PSIKOLOG ROUTES (role: 2) //
/////////////////////////////////////////
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/psikolog/dashboardpsikolog', [DashboardpsikologController::class, 'index'])->name('psikolog.dashboardpsikolog');
    
});
