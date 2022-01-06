<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostPerusahaan;
use App\PostCategory;
use App\Post;
use App\PostStatus;
use App\Menara;
use App\Users;
use Carbon;
use Auth;
use PDF;

class PostMenaraController extends Controller
{
    public function index()
    {
        $data_menara = Menara::orderBy('updated_at', 'desc')->simplePaginate(1000);
        $post_category = PostCategory::get();
        $data_perusahaan = PostPerusahaan::get();
        $data_user = Users::get();
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/menara.index', compact('post_category','data_menara','data_perusahaan','data_user','data_status'));
    }

    public function edit($id)
    {
        $data_menara = Menara::findOrFail($id);
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/menara.verifikasi', compact('data_menara', 'data_status'));
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
            $post = Menara::findOrFail($id);
            $post->id_post_perusahaan =$request->id_post_perusahaan;
            $post->id_user = $request->id_user;
            $post->kecamatan =$request->kecamatan;
            $post->desa =$request->desa;
            $post->alamat_menara =$request->alamat_menara;
            $post->pemilik_tanah =$request->pemilik_tanah;
            $post->kordinat =$request->kordinat;
            $post->lama_sewa =$request->lama_sewa;
            $post->jenis_menara =$request->jenis_menara;
            $post->tinggi_menara =$request->tinggi_menara;
            $post->id_status =$request->id_status;
            $post->file_ktp = $request->file_ktp;
            $post->no_akta = $request->no_akta;
            $post->tgl_akta = $request->tgl_akta;
            $post->no_nib = $request->no_nib;
            $post->tgl_nib = $request->tgl_nib;
            $post->no_npwp = $request->no_npwp;
            $post->file_permohonan = $request->file_permohonan;
            $post->file_perjanjian = $request->file_perjanjian;
            $post->tgl_survey = $request->tgl_survey;
            $post->file_survey1 = $file_survey1->getClientOriginalName();
            $post->file_survey2 = $file_survey2->getClientOriginalName();
            $post->file_survey3 = $file_survey3->getClientOriginalName();
            $post->catatan = $request->catatan;
            $post->no_surat = "-";
            $post->tgl_rekom = Carbon\Carbon::now();
            $post->save();
        }
        return redirect('datapengajuan/menara');
    }

    public function editrekom($id)
    {
        $data_menara = Menara::findOrFail($id);
        $data_status = PostStatus::get();
        return view('admin/datapengajuan/menara.rekomendasi', compact('data_menara', 'data_status'));
    }

    public function rekom($id, Request $request)
    {
        $post = Menara::findOrFail($id);
        $post->id_post_perusahaan =$request->id_post_perusahaan;
        $post->id_user = $request->id_user;
        $post->kecamatan =$request->kecamatan;
        $post->desa =$request->desa;
        $post->alamat_menara =$request->alamat_menara;
        $post->pemilik_tanah =$request->pemilik_tanah;
        $post->kordinat =$request->kordinat;
        $post->lama_sewa =$request->lama_sewa;
        $post->jenis_menara =$request->jenis_menara;
        $post->tinggi_menara =$request->tinggi_menara;
        $post->id_status =$request->id_status;
        $post->file_ktp = $request->file_ktp;
        $post->no_akta = $request->no_akta;
        $post->tgl_akta = $request->tgl_akta;
        $post->no_nib = $request->no_nib;
        $post->tgl_nib = $request->tgl_nib;
        $post->no_npwp = $request->no_npwp;
        $post->file_permohonan = $request->file_permohonan;
        $post->file_perjanjian = $request->file_perjanjian;
        $post->tgl_survey = $request->tgl_survey;
        $post->file_survey1 = $request->file_survey1;
        $post->file_survey2 = $request->file_survey2;
        $post->file_survey3 = $request->file_survey3;
        $post->catatan = $request->catatan;
        $post->no_surat = $request->no_surat;
        $post->tgl_rekom = $request->tgl_rekom;

        $post->save();
        
        return redirect('datapengajuan/menara');
    }

    public function downloadPermohonan($id)
    {
        $data_menara = Menara::where('file_permohonan', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/permohonan/' . $data_menara->file_permohonan);
        return response()->download($pathToFile);
    }

    public function downloadPerjanjian($id)
    {
        $data_menara = Menara::where('file_perjanjian', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/perjanjian/' . $data_menara->file_perjanjian);
        return response()->download($pathToFile);
    }

    public function downloadPupr($id)
    {
        $data_menara = Menara::where('file_pupr', $id)->firstOrFail();
        $pathToFile = public_path('dokumen/pupr/' . $data_menara->file_pupr);
        return response()->download($pathToFile);
    }

    public function print($id)
    {
        $menara  = Menara::findOrfail($id);
        return view('admin/datapengajuan/menara/printsurat', ['menara'=>$menara]);
    }

    public function printblank($id)
    {
        $menara  = Menara::findOrfail($id);
        return view('admin/datapengajuan/menara/printsuratblank', ['menara'=>$menara]);
    }

    public function exportPdf($id)
    {
        $menara = Menara::findOrfail($id);
        $pdf = PDF::loadView('user.suratpdf', ['menara'=>$menara]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }

    public function exportblankPdf($id)
    {
        $menara = Menara::findOrfail($id);
        $pdf = PDF::loadView('user.suratkosongpdf', ['menara'=>$menara]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }
}
