<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    Disini saya akan mengambil salah satu contoh fungsi yaitu index(). Fungsi ini nantinya akan dipanggil melalui route kemudian di proses
    dalam url (8000), yang nantinya fungsi ini akan mengembalikan nilai yaitu view yang berisi tampilan dashboard dari halaman admin.
    */
    public function index()
    {
        return view('backend/home');
    }

    public function data(){
        return view('data');
    }

    public function index2()
    {
        return view('backend/index2');
    }

    public function index3()
    {
        return view('backend/index3');
    }
}
