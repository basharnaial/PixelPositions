<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::resource('companies', CompanyController::class);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get('/search', SearchController::class);

// tags/frontend  we add :name to referes its to name to id because the default is /tags/name:id
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    // Regsiter create and store
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);
    // Login create sesstion and store and destroy
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('companies/{company}', [CompanyController::class, 'show'])->name('companies.show');

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
