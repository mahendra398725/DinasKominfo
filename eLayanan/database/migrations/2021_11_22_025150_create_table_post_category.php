<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kecamatan', 200);
            $table->timestamps();
        });

        Schema::table('post', function (Blueprint $table) {
            $table->foreign('id_post_category')->references('id')->on('post_category')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropForeign('post_id_post_category_foreign');
        });
        
        Schema::dropIfExists('post_category');
    }
}
