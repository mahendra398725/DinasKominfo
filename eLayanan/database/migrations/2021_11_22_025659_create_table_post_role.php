<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_role', 20);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_post_role')->references('id')->on('post_role')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_id_post_role_foreign');
        });
        
        Schema::dropIfExists('post_role');
    }
}
