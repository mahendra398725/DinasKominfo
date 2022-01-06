<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_user');
            $table->string('nip_k_user', 20);
            $table->string('alamat_user', 500);
            $table->string('no_hp', 12);
            $table->integer('id_post_role')->unsigned();
            $table->string('file_ktp');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('menara', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('fiber', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('menara_id_user_foreign');
        });

        Schema::table('fiber', function (Blueprint $table) {
            $table->dropForeign('fiber_id_user_foreign');
        });
        
        Schema::dropIfExists('users');
    }
}
