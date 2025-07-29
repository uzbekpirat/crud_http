<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('index');

Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/store',[PostController::class,'store'])->name('store');

Route::get('/show',[PostController::class,'show'])->name('show');

Route::delete('/delete/{id}',[PostController::class,'destroy'])->name('destroy');

Route::get('/update/{id}',[PostController::class,'edit'])->name('edit');
Route::put('/put/{id}',[PostController::class,'update'])->name('put_s');

Route::get('/patch/update/{id}',[PostController::class,'patch'])->name('patch');
Route::patch('/patch/update/{id}',[PostController::class,'patch_s'])->name('patch_s');