<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
     /*
    pada controller ini merupakan salah satu dari bagian MVC yang tugasnya berfungsi untuk penghubung antara
    View dan Model yang termasuk dari componen MVC itu sendiri. Didalam Controller ini terdapat banyak logika-logika
    pemrograman yang gunanya untuk menyusun fungsi tertentu atau proses proses logika tertentu. Dan terdapat beberapa method utama di dalamnya
    anatara lain post,get,put/patch dan juga delete method tersebut merupakan method yang sering kita digunakan dalam menulis code dalam laravel

    by : indra pras
    */

    public function test(){
        // return "method ini digunakan untuk mengambil semua data user";
    /*
    Disini saya akan mengambil salah satu contoh fungsi yaitu test(). Fungsi ini nantinya akan dipanggil melalui route kemudian di proses
    dalam url (8000/test), yang nantinya fungsi ini akan mengembalikan nilai yaitu text yang berisi 'method ini digunakan untuk mengambil semua data user'.
    */

        $nama = "indra Prasetyo Wijaya";
        $pelajaran = ["Workshop Sistem Informasi Berbasis Website","Matematika Diskrit","Workshop Mobile"];
        return view('beranda', compact('nama', 'pelajaran'));
    }

    public function create(){
        return "method ini nantinya akan digunakan untuk menampilkan fomr untuk menambah data user ";
    }

    public function store(){
        return "Method ini nantinya digunakan untuk menciptakan sata user yang baru";
    }

    public function show($id){
        return "Method ini nantinya digunakan untuk menagmbil data user dengan id=" .$id;
    }

    public function edit($id = 1){
        return "Method ini nantinya digunakan untuk menampikan form untuk mengubah data edit dengan id =".$id;
    }

    public function update(Request $request, $id){
        return "Method ini nantinya digunakan untuk menampikan form untuk mengubah data edit dengan id =".$id;
    }

    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" .$id;
    }
}
