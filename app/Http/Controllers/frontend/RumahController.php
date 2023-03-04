<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahController extends Controller
{

    /*
    disini saya membuat fungsi yang bernama rumah dan didalam fungsi ini
    saya ingin mengembalikan nilai view agar dapat ditangkap oleh route yang sudah saya buat.
    fungsi ini akan mengembalikan sebuah file view di dalam folder yang bernama frontend
    */
    public function rumah(){
        return view('frontend/homee');
    }
}
