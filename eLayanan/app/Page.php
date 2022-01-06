<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "post_page";
    protected $fillable = ['nama_halaman', 'judul_halaman', 'keterangan', 'gambar', 'berkas', 'status', 'tgl_upload'];

    public function getImage()
    {
        if (!$this->gambar) {
            return asset('image/page/default.png');
        }
        return asset('image/page/'.$this->gambar);
    }
}
