<?php

use App\Http\Controllers\{
    TesteController,
    UserController
};
//use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;


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
Route::get('/testes',[TesteController::class,'index'])->name('testes.index');
Route::get('/testes/create',[TesteController::class,'create'])->name('testes.create');
Route::post('/testes',[TesteController::class,'store'])->name('testes.store');
Route::get('/testes/{id}',[TesteController::class,'show'])->name('testes.show');
Route::get('/testes/{id}/edit',[TesteController::class,'edit'])->name('testes.edit');
Route::put('/testes/{id}',[TesteController::class,'update'])->name('testes.update');
Route::delete('/testes/{id}',[TesteController::class,'destroy'])->name('testes.destroy');

Route::middleware(['auth'])->group(function(){
    Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');
    Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
    Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
});




Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
