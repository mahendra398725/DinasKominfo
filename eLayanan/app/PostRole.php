<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostRole extends Model
{
    protected $table = "post_role";
    protected $fillable = ['nama_role'];

    public function users(){
        return $this->hasMany('App\Users', 'id_post_role');
    }
}
