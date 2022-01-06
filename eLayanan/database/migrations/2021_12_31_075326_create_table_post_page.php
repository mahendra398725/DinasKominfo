<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_halaman', 100);
            $table->string('judul_halaman', 250);
            $table->string('keterangan', 500);
            $table->string('gambar');
            $table->string('berkas');
            $table->string('status', 20);
            $table->dateTimeTz('tgl_upload');
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
        Schema::dropIfExists('post_page');
    }
}
