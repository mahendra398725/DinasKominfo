<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_perusahaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori_perusahaan', 50);
            $table->string('nama_perusahaan', 50);
            $table->string('alamat_perusahaan', 500);
            $table->string('telpon_perusahaan', 20);
            $table->string('email_perusahaan', 50);
            $table->string('file_akta');
            $table->string('file_nib');
            $table->string('file_npwp');
            $table->string('no_akta',20);
            $table->string('tgl_akta',10);
            $table->string('no_nib',20);
            $table->string('tgl_nib',10);
            $table->string('no_npwp',20);
            $table->timestamps();
        });
        Schema::table('menara', function (Blueprint $table) {
            $table->foreign('id_post_perusahaan')->references('id')->on('post_perusahaan')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('fiber', function (Blueprint $table) {
            $table->foreign('id_post_perusahaan')->references('id')->on('post_perusahaan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menara', function (Blueprint $table) {
            $table->dropForeign('menara_id_post_perusahaan_foreign');
        });

        Schema::table('fiber', function (Blueprint $table) {
            $table->dropForeign('fiber_id_post_perusahaan_foreign');
        });
        
        Schema::dropIfExists('post_perusahaan');
    }
}
