<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = "post_category";
    protected $fillable = ['nama_kecamatan'];

    public function post(){
        return $this->hasMany('App\Post', 'id_post_category');
    }
}
