<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** disini saya akan memamasukkan data diri (saya/user) yang nantinya jika akan dieksekusi akan memasukkan data
         * pada sebuah database yang menuju ke table yang bernama detail_profile yang nantinya akan mengisi field field yang sudah di tentukan
         * seperti yang sedang dibuat dibawah ini.
        */

        DB::table('detail_profile')->insert([
            'address' => 'Bondowoso',
            'nomor_tlp' => '081230680243',
            'ttl' => '2002-11-26',
            'foto' => 'gambar.png'
        ]);
    }
}