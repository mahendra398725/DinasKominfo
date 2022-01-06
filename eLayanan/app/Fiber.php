<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Fiber extends Model
{
    protected $table = "fiber";
    protected $fillable = [
        'id_post_perusahaan',
        'id_user', 
        'kecamatan',
        'desa',
        'alamat_fo', 
        'titik_awal', 
        'titik_akhir',
        'file_kordinat',
        'nama_jaringan', 
        'pj_bentang', 
        'jml_tiang',
        'tipe',
        'jml_core',
        'diameter',
        'id_status',
        'file_ktp',
        'no_nib',
        'tgl_nib',
        'tiang_fo',
        'peta_jaringan',
        'file_permohonan',
        'file_perijinan',
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

    public function users(){
        return $this->belongsTo('App\Users', 'id_user');
    }

    public function post_status(){
        return $this->belongsTo('App\PostStatus', 'id_status');
    }
}
