<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";
    protected $fillable = ['nama_user', 'nip_k_user', 'alamat_user', 'no_hp', 'id_post_role', 'file_ktp', 'email', 'password'];

    public function post_role(){
        return $this->belongsTo('App\PostRole', 'id_post_role');
    }

    public function menara(){
        return $this->hasMany('App\Menara', 'id_user');
    }
}
