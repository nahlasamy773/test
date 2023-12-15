<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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


Route::get('test', function () {
    return  'welcome nono';
});


Route::get('login', function () {
    return  view ('login');
});

Route::post('logged', function () {
    return' you are logged in';
})->name('logged');

Route::post('control', [UserController::class, 'getData']);
 
Route::view ('login','login' ) ;
   

// store data into car table
Route::get('createpost',[postController::class,'create'])->name('createpost');

Route::post('storepost',[postController::class,'store'])->name('storepost');
Route::get('posts',[postController::class,'index'])->name('posts');
Route::get('updatePost/{id}',[postController::class,'edit']);
Route::put('update/{id}',[postController::class,'update'])->name('update');
Route::get('showPost/{id}',[postController::class,'show'])->name('show');




