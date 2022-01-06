<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_status', 20);
            $table->string('keterangan', 250);
            $table->string('slug', 20);
            $table->timestamps();
        });
        Schema::table('menara', function (Blueprint $table) {
            $table->foreign('id_status')->references('id')->on('post_status')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('fiber', function (Blueprint $table) {
            $table->foreign('id_status')->references('id')->on('post_status')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('menara_id_status_foreign');
        });

        Schema::table('fiber', function (Blueprint $table) {
            $table->dropForeign('fiber_id_status_foreign');
        });
        
        Schema::dropIfExists('post_status');
    }
}
