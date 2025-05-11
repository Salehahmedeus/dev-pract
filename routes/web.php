<?php

use App\Http\Controllers\PaitentController;
use App\Http\Controllers\PatientController; // Ensure this class exists in the specified namespace
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});




Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login', [UserController::class, 'login'])->name('login.attempt');
Route::view('dashboard', 'dashboard')->name('dashboard');
Route::post('/logout', function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return redirect('/');
})->name('logout');

Route::view('register', 'register')->name('register');
Route::post('register', RegisterController::class)->name('register.store');


// Route::view('patients/create', 'store')->name('patients.create');
// Route::post('patients/store', PaitentController::class)->name('store');

Route::view('patients/create', 'patients.create')->name('patients.create');
Route::post('patients/create', [PaitentController::class, 'store'])->name('patients.create');


Route::resource('patients', PaitentController::class);
Route::post('patients/search', [PaitentController::class, 'search'])->name('patients.search');




// Route::resource('patients', PaitentController::class);
// Route::get('patients/search', [PaitentController::class, 'search']);
// Route::view('patients/store', 'patients.create')->name('store');
