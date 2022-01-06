<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostPerusahaan;

class PostPerusahaanController extends Controller
{
    public function index(){
        $data_postperusahaan = PostPerusahaan::orderBy('updated_at', 'asc')->simplePaginate(1000);
        return view('admin/dataperusahaan.index', compact('data_postperusahaan'));
    }
    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_akta','file_nib','file_npwp')) {
            $request->validate([
                'file_akta', 'file_nib', 'file_npwp' => 'required|mimes:pdf,docx|max:2048'
            ]);
            $destinationakta = "dokumen/akta";
            $destinationnib = "dokumen/nib";
            $destinationnpwp = "dokumen/npwp";
            $file_akta = $request->file('file_akta');
            $file_nib = $request->file('file_nib');
            $file_npwp = $request->file('file_npwp');
            $file_akta->move($destinationakta, $file_akta->getClientOriginalName());
            $file_nib->move($destinationnib, $file_nib->getClientOriginalName());
            $file_npwp->move($destinationnpwp, $file_npwp->getClientOriginalName());
            $post = "Y";

        } if ($post = "Y") {
            $post = new \App\PostPerusahaan;
            $post->kategori_perusahaan =$request->kategori_perusahaan;
            $post->nama_perusahaan =$request->nama_perusahaan;
            $post->alamat_perusahaan =$request->alamat_perusahaan;
            $post->telpon_perusahaan =$request->telpon_perusahaan;
            $post->email_perusahaan =$request->email_perusahaan;
            $post->file_akta = $file_akta->getClientOriginalName();
            $post->file_nib = $file_nib->getClientOriginalName();
            $post->file_npwp = $file_npwp->getClientOriginalName();
            $post->no_akta =$request->no_akta;
            $post->tgl_akta =$request->tgl_akta;
            $post->no_nib =$request->no_nib;
            $post->tgl_nib =$request->tgl_nib;
            $post->no_npwp =$request->no_npwp;

            $post->save();
        }
        return redirect('/data-perusahaan');
    }   

    public function save(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_akta','file_nib')) {
            $request->validate([
                'file_akta', 'file_nib'=> 'required|mimes:pdf,docx|max:2048'
            ]);
            $destinationakta = "dokumen/akta";
            $destinationnib = "dokumen/nib";
            $file_akta = $request->file('file_akta');
            $file_nib = $request->file('file_nib');
            $file_akta->move($destinationakta, $file_akta->getClientOriginalName());
            $file_nib->move($destinationnib, $file_nib->getClientOriginalName());
            $post = "Y";

        } if ($post = "Y") {
            $post = new \App\PostPerusahaan;
            $post->kategori_perusahaan =$request->kategori_perusahaan;
            $post->nama_perusahaan =$request->nama_perusahaan;
            $post->alamat_perusahaan =$request->alamat_perusahaan;
            $post->telpon_perusahaan =$request->telpon_perusahaan;
            $post->email_perusahaan =$request->email_perusahaan;
            $post->file_akta = $file_akta->getClientOriginalName();
            $post->file_nib = $file_nib->getClientOriginalName();
            $post->file_npwp = "-";
            $post->no_akta =$request->no_akta;
            $post->tgl_akta =$request->tgl_akta;
            $post->no_nib =$request->no_nib;
            $post->tgl_nib =$request->tgl_nib;
            $post->no_npwp ="-";

            $post->save();
        }
        return redirect('/data-perusahaan');
    }  

    public function destroy($id)
    {
        $x = PostPerusahaan::findOrFail($id);
        $x->delete();
        return redirect('/data-perusahaan');
    }
}
