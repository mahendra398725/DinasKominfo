<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Exports\MenaraExport;
use App\Http\Requests;
use App\PostPerusahaan;
use App\PostStatus;
use App\Menara;
use App\Users;
use Carbon;
use Auth;
use PDF;
use DB;

class MenaraController extends Controller {
    public function index()
    {
        $data_menara = DB::table('menara')->get();
        $post_category = DB::table('post_category')->get();
        $data_perusahaan = PostPerusahaan::where('kategori_perusahaan','Menara')->get();
        $data_user = Users::get();
        return view('user/menara',compact('post_category','data_menara','data_perusahaan','data_user'));
    }
    
    public function desa($id)
    {
        $desa = DB::table('post')->where('id_post_category',$id)->get();
        return response()->json($desa);
    }

    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_permohonan','file_perjanjian', 'file_pupr')) {
            $request->validate([
                'file_permohonan', 'file_perjanjian', 'file_pupr' => 'required|mimes:pdf,docx|max:2048'
            ]);
            $destinationpermohonan = "dokumen/permohonan";
            $destinationperjanjian = "dokumen/perjanjian";
            $destinationpupr = "dokumen/pupr";
            $file_permohonan = $request->file('file_permohonan');
            $file_perjanjian = $request->file('file_perjanjian');
            $file_pupr = $request->file('file_pupr');
            $file_permohonan->move($destinationpermohonan, $file_permohonan->getClientOriginalName());
            $file_perjanjian->move($destinationperjanjian, $file_perjanjian->getClientOriginalName());
            $file_pupr->move($destinationpupr, $file_pupr->getClientOriginalName());
            $post = "Y";
        
        } if ($post = "Y") {
            $post = new \App\Menara;
            $post->id_post_perusahaan =$request->id_post_perusahaan;
            $post->id_user = Auth::user()->id;
            $post->kecamatan =$request->kecamatan;
            $post->desa =$request->desa;
            $post->alamat_menara =$request->alamat_menara;
            $post->pemilik_tanah =$request->pemilik_tanah;
            $post->kordinat =$request->kordinat;
            $post->tgl_kontrak =$request->tgl_kontrak;
            $post->lama_sewa =$request->lama_sewa;
            $post->jenis_menara =$request->jenis_menara;
            $post->tinggi_menara =$request->tinggi_menara;
            $post->id_status =$request->id_status;
            $post->file_ktp = Auth::user()->file_ktp;
            $post->no_akta = $request->no_akta;
            $post->tgl_akta = $request->tgl_akta;
            $post->no_nib = $request->no_nib;
            $post->tgl_nib = $request->tgl_nib;
            $post->no_npwp = $request->no_npwp;
            $post->file_permohonan = $file_permohonan->getClientOriginalName();
            $post->file_perjanjian = $file_perjanjian->getClientOriginalName();
            $post->file_pupr = $file_pupr->getClientOriginalName();
            $post->tgl_survey = Carbon\Carbon::now();
            $post->file_survey1 = "-";
            $post->file_survey2 = "-";
            $post->file_survey3 = "-";
            $post->catatan = "-";
            $post->no_surat = "-";
            $post->tgl_rekom = Carbon\Carbon::now();
            $post->save();
        }            
        return redirect('/riwayat-menara');
    }

    public function riwayatM()
    {
        $data_menara1 = Menara::where('id_status','1')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_menara2 = Menara::where('id_status','2')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_menara3 = Menara::where('id_status','3')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_menara4 = Menara::where('id_status','4')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_menara5 = Menara::where('id_status','5')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $post_category = DB::table('post_category')->get();
        $data_perusahaan = DB::table('post_perusahaan')->get();
        $data_user = Users::get();
        $data_status = PostStatus::get();
        return view('user.riwayat',compact('post_category', 'data_menara1', 'data_menara2', 'data_menara3', 'data_menara4', 'data_menara5', 'data_perusahaan','data_user', 'data_status'));
    }

    public function show($id)
    {
        $menara = Menara::findOrfail($id);
        $post_category = DB::table('post_category')->get();
        $data_perusahaan = DB::table('post_perusahaan')->get();
        $data_user = Users::get();
        return view('user.show',compact('post_category','menara','data_perusahaan','data_user'));
    }

    public function edit($id)
    {
        $data_menara = Menara::findOrFail($id);
        $data_status = PostStatus::get();
        return view('user.ajukan', compact('data_menara', 'data_status'));
    }

    public function ajukan($id, Request $request)
    {
        $data_menara = Menara::findOrFail($id);
        $data_menara->update($request->all());
        return redirect('/riwayat-menara');
    }

    public function exportPdf($id)
    {
        $menara = Menara::findOrfail($id);
        $pdf = PDF::loadView('user.suratpdf', ['menara'=>$menara]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }

    public function print($id)
    {
        $menara  = Menara::findOrfail($id);
        return view('user/printsurat', ['menara'=>$menara]);
    }

    public function tolak($id)
    {
        $menara  = Menara::findOrfail($id);
        return view('user/surattolak', ['menara'=>$menara]);
    }
}