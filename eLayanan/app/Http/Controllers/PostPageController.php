<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Page;

class PostPageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'asc')->simplePaginate(1000);
        return view('admin/datapage.index', compact('pages'));
    }

    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('gambar','berkas')) {
            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png|max:3072',
                'berkas' => 'mimes:pdf|max:3072' 
            ]);
            $destination1 = "image/page";
            $destination2 = "image/pagefile";
            $gambar = $request->file('gambar');
            $berkas = $request->file('berkas');
            $gambar->move($destination1, $gambar->getClientOriginalName());
            $berkas->move($destination2, $berkas->getClientOriginalName());
            $post = "Y";
        } if ($post = "Y") {
            $post = new Page;
            $post->nama_halaman =$request->nama_halaman;
            $post->judul_halaman =$request->judul_halaman;
            $post->keterangan =$request->keterangan;
            $post->keterangan =$request->keterangan;
            $post->gambar =$gambar->getClientOriginalName();
            $post->berkas =$berkas->getClientOriginalName();
            $post->status =$request->status;
            $post->tgl_upload =$request->tgl_upload;
            
            $post->save();
        }
        return redirect('/data-halaman');
    }

    public function edit($id)
    {
        $p = Page::findOrFail($id);
        return view('admin/datapage.edit', compact('p'));
    }

    public function update($id, Request $request)
    {
        $p = Page::findOrFail($id);
        $p->update($request->all());
        return redirect('/data-halaman');
    }

    public function destroy($id)
    {
        $p = Page::findOrFail($id);
        $p->delete();
        return redirect('/data-halaman');
    }

    public function downloadSOP($id)
    {
        $p = Page::where('berkas', $id)->firstOrFail();
        $pathToFile = public_path('image/pagefile/' . $p->berkas);
        return response()->download($pathToFile);
    }
}
