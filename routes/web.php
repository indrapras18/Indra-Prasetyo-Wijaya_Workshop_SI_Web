<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
/*
MINGGU 2
    pada route default milik laravel kita akan dibuatkan sebuah method get
    yang didalamnya mereturn sebuah view yang bernama welcome.blade.php milik laravel.
*/

Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'informasi'])->name('informasi');
/*
MINGGU 2
Route bernama memungkinkan pembuatan URL atau pengalihan yang mudah untuk route
tertentu. kita dapat menentukan nama untuk route dengan merangkai metode name ke
definisi rout
*/
Route::get('landing', [InformasiController::class, 'landing'])->name('landing');

Auth::routes();

Route::middleware(['auth'])->group(function(){
/*
Minggu 2
Middleware merupakan penyedia mekanisme yang mudah untuk
memfilter permintaan HTTP yang memasuki aplikasi Kita. Misalnya, Laravel menyertakan
middleware yang memverifikasi bahwa pengguna aplikasi Kita telah diautentikasi. Jika
pengguna tidak diautentikasi, middleware akan mengarahkan pengguna ke layar login.
Namun, jika pengguna diautentikasi, middleware akan mengizinkan permintaan untuk
melanjutkan lebih jauh ke dalam aplikas
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/data', [HomeController::class, 'data'])->name('data');
});
