<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menara', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_post_perusahaan')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('kecamatan', 25);
            $table->string('desa', 25);
            $table->string('alamat_menara', 200);
            $table->string('pemilik_tanah', 100);
            $table->string('kordinat', 100);
            $table->dateTimeTz('tgl_kontrak');
            $table->integer('lama_sewa');
            $table->string('jenis_menara',50);
            $table->integer('tinggi_menara');
            $table->integer('id_status')->unsigned();
            $table->string('file_ktp', 100);
            $table->string('no_akta',20);
            $table->string('tgl_akta',10);
            $table->string('no_nib',20);
            $table->string('tgl_nib',10);
            $table->string('no_npwp',20);
            $table->string('file_permohonan');
            $table->string('file_perjanjian');
            $table->string('file_pupr');
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
        Schema::dropIfExists('menara');
    }
}
