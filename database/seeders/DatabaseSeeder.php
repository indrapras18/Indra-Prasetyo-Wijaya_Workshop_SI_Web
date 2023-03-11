<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** Database seeder adalah sebuah fitur pada framework atau library yang memungkinkan developer untuk melakukan pengisian data awal ke dalam database.
         *  Sehingga, data tersebut dapat digunakan untuk keperluan pengujian, pengembangan, atau demo aplikasi.
         *  Dalam praktiknya, seorang developer dapat menggunakan database seeder untuk memasukkan data awal ke dalam database, seperti data pengguna (user), data produk, data kategori, atau data lainnya yang dibutuhkan oleh aplikasi.
         *  Hal ini dapat mempermudah proses pengembangan aplikasi, karena developer tidak perlu memasukkan data secara manual satu per satu.
         */
        // \App\Models\User::factory(10)->create();
        $this->call([
            DetailProfilSeeder::class
        ]);
    }
}
