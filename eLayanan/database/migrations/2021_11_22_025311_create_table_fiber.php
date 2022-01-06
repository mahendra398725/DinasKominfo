<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFiber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiber', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_post_perusahaan')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('kecamatan', 25);
            $table->string('desa', 25);
            $table->string('alamat_fo', 200);
            $table->string('titik_awal', 30);
            $table->string('titik_akhir', 30);
            $table->string('file_kordinat');
            $table->string('nama_jaringan');
            $table->string('pj_bentang',50);
            $table->integer('jml_tiang');
            $table->string('tipe',50);            
            $table->string('jml_core',50);
            $table->string('diameter',50);
            $table->integer('id_status')->unsigned();
            $table->string('file_ktp', 100);
            $table->string('no_nib',20);
            $table->string('tgl_nib',10);
            $table->string('tiang_fo');
            $table->string('peta_jaringan');
            $table->string('file_permohonan');
            $table->string('file_perijinan');
            $table->dateTimeTz('tgl_survey');
            $table->string('file_survey1',100);
            $table->string('file_survey2',100);
            $table->string('file_survey3',100);
            $table->string('catatan',250);
            $table->string('no_surat',3);
            $table->dateTimeTz('tgl_rekom');
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
        Schema::dropIfExists('fiber');
    }
}
