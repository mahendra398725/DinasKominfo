<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Exports\MenaraExport;
use App\Http\Requests;
use App\PostPerusahaan;
use App\PostStatus;
use App\Fiber;
use App\Users;
use Carbon;
use Auth;
use PDF;
use DB;

class FiberController extends Controller
{
    public function index()
    {
        $data_fiber = DB::table('fiber')->get();
        $post_category = DB::table('post_category')->get();
        $data_perusahaan = PostPerusahaan::where('kategori_perusahaan','Fiber Optik')->get();
        $data_user = Users::get();
        return view('user/fiber/fiber',compact('data_fiber','data_perusahaan','data_user','post_category'));
    }

    public function desa($id)
    {
        $desa = DB::table('post')->where('id_post_category',$id)->get();
        return response()->json($desa);
    }

    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_kordinat','tiang_fo','peta_jaringan','file_permohonan','file_perijinan')) {
            $request->validate([
                'file_kordinat'                                                 => 'required|mimes:xlsx,xlsm,xls,xml,xlr|max:3072',
                'tiang_fo','peta_jaringan', 'file_permohonan','file_perijinan'  => 'required|mimes:pdf,docx|max:3072'
            ]);
            $destinationkordinat        = "dokumen/kordinat";
            $destinationtiang_fo        = "dokumen/tiang";
            $destinationpeta_jarinagan  = "dokumen/peta";
            $destinationpermohonan      = "dokumen/permohonan";
            $destinationperijinan       = "dokumen/perijinan";

            $file_kordinat = $request->file('file_kordinat');
            $tiang_fo = $request->file('tiang_fo');
            $peta_jaringan = $request->file('peta_jaringan');
            $file_permohonan = $request->file('file_permohonan');
            $file_perijinan = $request->file('file_perijinan');

            $file_kordinat->move($destinationkordinat, $file_kordinat->getClientOriginalName());
            $tiang_fo->move($destinationtiang_fo, $tiang_fo->getClientOriginalName());
            $peta_jaringan->move($destinationpeta_jarinagan, $peta_jaringan->getClientOriginalName());
            $file_permohonan->move($destinationpermohonan, $file_permohonan->getClientOriginalName());
            $file_perijinan->move($destinationperijinan, $file_perijinan->getClientOriginalName());
            $post = "Y";
        
        } if ($post = "Y") {
            $post = new \App\Fiber;
            $post->id_post_perusahaan =$request->id_post_perusahaan;
            $post->id_user = Auth::user()->id;
            $post->kecamatan =$request->kecamatan;
            $post->desa =$request->desa;
            $post->alamat_fo =$request->alamat_fo;
            $post->titik_awal =$request->titik_awal;
            $post->titik_akhir =$request->titik_akhir;
            $post->file_kordinat = $file_kordinat->getClientOriginalName();
            $post->nama_jaringan =$request->nama_jaringan;
            $post->pj_bentang =$request->pj_bentang;
            $post->jml_tiang =$request->jml_tiang;
            $post->tipe =$request->tipe;
            $post->jml_core =$request->jml_core;
            $post->diameter =$request->diameter;
            $post->id_status =$request->id_status;
            $post->file_ktp = Auth::user()->file_ktp;
            $post->no_nib = $request->no_nib;
            $post->tgl_nib = $request->tgl_nib;
            $post->tiang_fo = $tiang_fo->getClientOriginalName();
            $post->peta_jaringan = $peta_jaringan->getClientOriginalName();
            $post->file_permohonan = $file_permohonan->getClientOriginalName();
            $post->file_perijinan = $file_perijinan->getClientOriginalName();
            $post->tgl_survey = Carbon\Carbon::now();
            $post->file_survey1 = "-";
            $post->file_survey2 = "-";
            $post->file_survey3 = "-";
            $post->catatan = "-";
            $post->no_surat = "-";
            $post->tgl_rekom = Carbon\Carbon::now();
            $post->save();
        }            
        return redirect('/riwayat-fiber');
    }

    public function riwayatF()
    {
        $data_fiber1 = Fiber::where('id_status','1')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_fiber2 = Fiber::where('id_status','2')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_fiber3 = Fiber::where('id_status','3')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_fiber4 = Fiber::where('id_status','4')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_fiber5 = Fiber::where('id_status','5')->orderBy('created_at', 'desc')->simplePaginate(1000);
        $data_perusahaan = DB::table('post_perusahaan')->get();
        $data_user = Users::get();
        $data_status = PostStatus::get();
        return view('user/fiber.riwayat',compact( 'data_fiber1', 'data_fiber2', 'data_fiber3', 'data_fiber4', 'data_fiber5', 'data_perusahaan','data_user', 'data_status'));
    }

    public function show($id)
    {
        $fiber = Fiber::findOrfail($id);
        $data_perusahaan = DB::table('post_perusahaan')->get();
        $data_user = Users::get();
        return view('user/fiber.show',compact('fiber','data_perusahaan','data_user'));
    }

    public function ubah($id)
    {
        $data_fiber = Fiber::findOrFail($id);
        return view('user/fiber.edit', compact('data_fiber'));
    }

    public function simpan($id, Request $request)
    {
        $data_fiber = Fiber::findOrFail($id);
        $data_fiber->update($request->all());
        return redirect('/riwayat-fiber');
    }

    public function edit($id)
    {
        $data_fiber = Fiber::findOrFail($id);
        $data_status = PostStatus::get();
        return view('user/fiber.ajukan', compact('data_fiber', 'data_status'));
    }

    public function ajukan($id, Request $request)
    {
        $data_fiber = Fiber::findOrFail($id);
        $data_fiber->update($request->all());
        return redirect('/riwayat-fiber');
    }

    public function exportPdf($id)
    {
        $fiber = Fiber::findOrfail($id);
        $pdf = PDF::loadView('user/fiber.suratpdf', ['fiber'=>$fiber]);
        return $pdf->download('Surat Rekomendasi.pdf');
    }

    public function exporttolakPdf($id)
    {
        $fiber = Fiber::findOrfail($id);
        $pdf = PDF::loadView('user/fiber.surattolak', ['fiber'=>$fiber]);
        return $pdf->download('Surat Penolakan.pdf');
    }
}
