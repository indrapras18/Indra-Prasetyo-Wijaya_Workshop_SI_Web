<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    /** Migration database merupakan suatu proses untuk mengubah struktur atau skema database pada suatu aplikasi secara terkontrol dan terdokumentasi dengan baik. Proses ini dilakukan untuk memudahkan pengembangan dan pemeliharaan aplikasi, serta meminimalkan risiko kehilangan data
     * Dalam proses migration database, biasanya terdapat beberapa langkah yang harus dilakukan. Pertama-tama, developer harus membuat file migrasi yang berisi perubahan-perubahan yang akan dilakukan pada skema database. Setelah itu, file migrasi tersebut harus dijalankan pada database yang sedang digunakan oleh aplikasi.
     * Proses migrasi dapat dilakukan secara otomatis oleh sistem atau manual oleh developer. Pada proses otomatis, biasanya sistem akan melakukan verifikasi terhadap struktur database yang akan diubah dan mengeksekusi file migrasi secara otomatis. Sedangkan pada proses manual, developer akan melakukan pengecekan dan pengeksekusian file migrasi secara manual.
     * Keuntungan dari proses migration database adalah pengembangan aplikasi menjadi lebih fleksibel dan terorganisir dengan baik. Selain itu, proses migrasi dapat membantu meningkatkan kinerja aplikasi dengan mengoptimalkan struktur database. Namun, proses migrasi juga memiliki risiko kegagalan jika tidak dilakukan dengan hati-hati atau tidak ada backup data yang cukup.
     * Oleh karena itu, proses migrasi harus dilakukan oleh developer yang ahli dalam bidang tersebut dan harus dilakukan dengan baik terdokumentasi.
     */

    {
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('address');
            $table->String('nomor_tlp');
            $table->Date('ttl');
            $table->String('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_profile');
    }
}
