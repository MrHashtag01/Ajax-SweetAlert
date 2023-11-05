<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/users', [StudentController::class, 'index']);
Route::post('/users/{id}', [StudentController::class, 'removeData'])->name('users.removeData');
