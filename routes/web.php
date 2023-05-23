<?php

use App\Http\Controllers\frontend\RumahController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\PekerjaanController;

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
// ------------------------------- MINGGU 2 -------------------------------
Route::get('/', function () {
    return view('frontend.homee');
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
Minggu 6
Middleware merupakan penyedia mekanisme yang mudah untuk
memfilter permintaan HTTP yang memasuki aplikasi Kita. Misalnya, Laravel menyertakan
middleware yang memverifikasi bahwa pengguna aplikasi Kita telah diautentikasi. Jika
pengguna tidak diautentikasi, middleware akan mengarahkan pengguna ke layar login.
Namun, jika pengguna diautentikasi, middleware akan mengizinkan permintaan untuk
melanjutkan lebih jauh ke dalam aplikasi
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/index2', [HomeController::class, 'index2'])->name('index2'); /** merupakan route untuk memnaggil dashboard admin index ke 2 */

Route::get('/index3', [HomeController::class, 'index3'])->name('index3'); /** merupakan route untuk memnaggil dashboard admin index ke 3 */

Route::get('/data', [HomeController::class, 'data'])->name('data');
});

// ------------------------------- MINGGU 3 -------------------------------

Route::get('test', [ManagementUserController::class, 'test']);
/*
disini saya akan mengambil contoh penggunaan method get pada route di bagian web.php
route ini akan mengambil data dari controller karena method yang digunakan adalah method get. 
Disini data yang diambil dari route tersebut merupakan data yang sebelumnya kita buat oada Controllers ManagementuserController.php
pada sebuah function yang bernama index(). Disini kita juga dapat memanggil function dari controller yang berbeda juga. methode yang digunakan
pada route juga dapat berfariasi tidak hanya menggunakan get saja.
*/
Route::get('create', [ManagementUserController::class, 'create']);

Route::get('store', [ManagementUserController::class, 'store']);

Route::get('user',[ManagementUserController::class,'edit']);

Route::resource('user', ManagementUserController::class);

Route::get('edit', [ManagementUserController::class, 'edit']);

// ------------------------------- MINGGU 4 -------------------------------

Route::get('homee', [RumahController::class, 'rumah'])->name('homee');

/*
disini saya membuat route baru dengan menggunakan fungsi get unutk menampilkan halaman 
view yang bernama homee.blade
*/

Route::post('/add', [KomentarController::class, 'add']);

Route::get('pekerjaan', [PekerjaanController::class, 'pekerjaan'])->name('pekerjaan');