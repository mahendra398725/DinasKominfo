<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
    protected $fillable = ['nama_desa', 'id_post_category'];

    public function post_category(){
        return $this->belongsTo('App\PostCategory', 'id_post_category');
    }
}
