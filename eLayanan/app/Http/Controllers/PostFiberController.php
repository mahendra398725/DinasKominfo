<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostPerusahaan;
use App\PostStatus;
use App\PostCategory;
use App\Fiber;
use App\Users;
use Carbon;
use Auth;
use PDF;

class PostFiberController extends Controller
{
    public function index()
    {
        $data_fiber = Fiber::orderBy('updated_at', 'desc')->simplePaginate(1000);
        $post_category = PostCategory::get();
        $data_perusahaan = PostPerusahaan::get();
        $data_user = Users::get();
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/fiber.index', compact('data_fiber','data_perusahaan','data_user','data_status'));
    }

    public function edit($id)
    {
        $data_fiber = Fiber::findOrFail($id);
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/fiber.verifikasi', compact('data_fiber', 'data_status'));
    }

    public function update($id, Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_survey1', 'file_survey2', 'file_survey3')) {
            $request->validate([
                'file_survey1', 'file_survey2', 'file_survey3' => 'mimes:jpeg,png,jpg,svg||max:2048'
            ]);
            $destinationsurvey1 = "image/survey";
            $destinationsurvey2 = "image/survey";
            $destinationsurvey3 = "image/survey";
            $file_survey1 = $request->file('file_survey1');
            $file_survey2 = $request->file('file_survey2');
            $file_survey3 = $request->file('file_survey3');
            $file_survey1->move($destinationsurvey1, $file_survey1->getClientOriginalName());
            $file_survey2->move($destinationsurvey2, $file_survey2->getClientOriginalName());
            $file_survey3->move($destinationsurvey3, $file_survey3->getClientOriginalName());
            $post = "Y";
        
        } if ($post = "Y") {
            $post=Fiber::findOrFail($id);
            $post->id_post_perusahaan =$request->id_post_perusahaan;
            $post->id_user = $request->id_user;
            $post->alamat_fo =$request->alamat_fo;
            $post->titik_awal =$request->titik_awal;
            $post->titik_akhir =$request->titik_akhir;
            $post->file_kordinat = $request->file_kordinat;
            $post->nama_jaringan =$request->nama_jaringan;
            $post->pj_bentang =$request->pj_bentang;
            $post->jml_tiang =$request->jml_tiang;
            $post->tipe =$request->tipe;
            $post->jml_core =$request->jml_core;
            $post->diameter =$request->diameter;
            $post->id_status =$request->id_status;
            $post->file_ktp =$request->file_ktp;
            $post->no_nib = $request->no_nib;
            $post->tgl_nib = $request->tgl_nib;
            $post->tiang_fo = $request->tiang_fo;
            $post->peta_jaringan = $request->peta_jaringan;
            $post->file_permohonan = $request->file_permohonan;
            $post->file_perijinan = $request->file_perijinan;
            $post->tgl_survey = $request->tgl_survey;
            $post->file_survey1 = $file_survey1->getClientOriginalName();
            $post->file_survey2 = $file_survey2->getClientOriginalName();
            $post->file_survey3 = $file_survey3->getClientOriginalName();
            $post->catatan = $request->catatan;
            $post->no_surat = "-";
            $post->tgl_rekom = Carbon\Carbon::now();
            $post->save();
        }
        return redirect('datapengajuan/fiber');
    }

    public function editrekom($id)
    {
        $data_fiber = Fiber::findOrFail($id);
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/fiber.rekomendasi', compact('data_fiber', 'data_status'));
    }

    public function rekom($id, Request $request)
    {
        $post=Fiber::findOrFail($id);
        $post->id_post_perusahaan =$request->id_post_perusahaan;
        $post->id_user = $request->id_user;
        $post->alamat_fo =$request->alamat_fo;
        $post->titik_awal =$request->titik_awal;
        $post->titik_akhir =$request->titik_akhir;
        $post->file_kordinat = $request->file_kordinat;
        $post->nama_jaringan =$request->nama_jaringan;
        $post->pj_bentang =$request->pj_bentang;
        $post->jml_tiang =$request->jml_tiang;
        $post->tipe =$request->tipe;
        $post->jml_core =$request->jml_core;
        $post->diameter =$request->diameter;
        $post->id_status =$request->id_status;
        $post->file_ktp =$request->file_ktp;
        $post->no_nib = $request->no_nib;
        $post->tgl_nib = $request->tgl_nib;
        $post->tiang_fo = $request->tiang_fo;
        $post->peta_jaringan = $request->peta_jaringan;
        $post->file_permohonan = $request->file_permohonan;
        $post->file_perijinan = $request->file_perijinan;
        $post->tgl_survey = $request->tgl_survey;
        $post->file_survey1 = $request->file_survey1;
        $post->file_survey2 = $request->file_survey2;
        $post->file_survey3 = $request->file_survey3;
        $post->catatan = $request->catatan;
        $post->no_surat = $request->no_surat;
        $post->tgl_rekom = $request->tgl_rekom;
        $post->save();
            
        return redirect('datapengajuan/fiber');
    }

    public function downloadPermohonan($id)
    {
        $data_fiber = Fiber::where('file_permohonan', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/permohonan/' . $data_fiber->file_permohonan);
        return response()->download($pathToFile);
    }

    public function downloadPerijinan($id)
    {
        $data_fiber = Fiber::where('file_perijinan', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/perijinan/' . $data_fiber->file_perijinan);
        return response()->download($pathToFile);
    }

    public function downloadRencana($id)
    {
        $data_fiber = Fiber::where('tiang_fo', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/tiang/' . $data_fiber->tiang_fo);
        return response()->download($pathToFile);
    }

    public function downloadPeta($id)
    {
        $data_fiber = Fiber::where('peta_jaringan', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/peta/' . $data_fiber->peta_jaringan);
        return response()->download($pathToFile);
    }

    public function downloadKordinat($id)
    {
        $data_fiber = Fiber::where('file_kordinat', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/kordinat/' . $data_fiber->file_kordinat);
        return response()->download($pathToFile);
    }
    
    public function exportPdf($id)
    {
        $fiber = Fiber::findOrfail($id);
        $pdf = PDF::loadView('user/fiber.suratpdf', ['fiber'=>$fiber]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }

    public function exportrPdf($id)
    {
        $fiber = Fiber::findOrfail($id);
        $pdf = PDF::loadView('user/fiber.suratkosongpdf', ['fiber'=>$fiber]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }
}
