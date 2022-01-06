<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Menara extends Model
{
    protected $table = "menara";
    protected $fillable = [
        'id_post_perusahaan',
        'id_user', 
        'kecamatan', 
        'desa', 
        'alamat_menara', 
        'pemilik_tanah', 
        'kordinat',
        'tgl_kontrak', 
        'lama_sewa', 
        'jenis_menara',
        'tinggi_menara',
        'id_status',
        'file_ktp',
        'no_akta',
        'tgl_akta',
        'no_nib',
        'tgl_nib',
        'no_npwp',
        'file_permohonan',
        'file_perjanjian',
        'file_pupr',
        'tgl_survey',
        'file_survey1',
        'file_survey2',
        'file_survey3',
        'catatan',
        'no_surat',
        'tgl_rekom'
    ];

    public function post_perusahaan(){
        return $this->belongsTo('App\PostPerusahaan', 'id_post_perusahaan');
    }

    public function post_category(){
        return $this->belongsTo('App\PostCategory', 'kecamatan');
    }

    public function post(){
        return $this->belongsTo('App\Post', 'desa');
    }

    public function users(){
        return $this->belongsTo('App\Users', 'id_user');
    }

    public function post_status(){
        return $this->belongsTo('App\PostStatus', 'id_status');
    }
}
