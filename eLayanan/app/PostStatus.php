<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostStatus extends Model
{
    protected $table = "post_status";
    protected $fillable = ['nama_status'];

    public function menara(){
        return $this->hasMany('App\Menara', 'id_status');
    }
}
