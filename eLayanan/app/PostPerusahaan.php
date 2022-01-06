<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPerusahaan extends Model
{
    protected $table = "post_perusahaan";
    protected $fillable = [
                        'kategori_perusahaan',
                        'nama_perusahaan', 
                        'alamat_perusahaan', 
                        'telpon_perusahaan', 
                        'email_perusahaan',
                        'file_akta',
                        'file_nib',
                        'file_npwp',
                        'no_akta',
                        'tgl_akta',
                        'no_nib',
                        'tgl_nib',
                        'no_npwp'
                    ];

    public function menara(){
        return $this->hasMany('App\Menara', 'id_post_perusahaan');
    }
}
