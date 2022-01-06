<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\PostRole;
use App\Users;
use PDF;

class UsersController extends Controller
{
    public function index(){
        $data_users = Users::orderBy('updated_at', 'asc')->simplePaginate(1000);
        $role = PostRole::get();
        return view('admin/dataakun/user.index', compact('data_users', 'role'));
    }

    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_ktp')) {
            $request->validate([
                'file_ktp' => 'required|mimes:pdf,docx|max:2048',
                'password' => 'required|min:8'
            ]);
            $destination = "dokumen/ktp";
            $file_ktp = $request->file('file_ktp');
            $file_ktp->move($destination, $file_ktp->getClientOriginalName());
            $post = "Y";
        } if ($post = "Y") {
            $post = new \App\Users;
            $post->nama_user =$request->nama_user;
            $post->nip_k_user =$request->nip_k_user;
            $post->no_hp =$request->no_hp;
            $post->alamat_user =$request->alamat_user;
            $post->id_post_role =$request->id_post_role;
            $post->file_ktp = $file_ktp->getClientOriginalName();
            $post->email =$request->email;
            $post->password =bcrypt($request->password);
            
            $post->save();
        }
        return redirect('admin/dataakun/user');
    }

    public function edit($id)
    {
        $x = Users::findOrFail($id);
        $role = PostRole::get();
        return view('admin/dataakun/user.edit', compact('x', 'role'));
    }

    public function update($id, Request $request)
    {
        $x = Users::findOrFail($id);
        $x->update($request->all());
        return redirect('admin/dataakun/user');
    }

    public function destroy($id)
    {
        $x = Users::findOrFail($id);
        $x->delete();
        return redirect('admin/dataakun/user');
    }

    public function exportxlsx() 
    {
        return Excel::download(new UsersExport, 'User.xlsx');
    }

    public function exportPdf() 
    {
        $user = Users::all();
        $pdf = PDF::loadView('admin/dataakun/user.userpdf', ['user'=>$user]);
        return $pdf->download('User.pdf');
    
    }
    
    public function print()
    {
        $user  = Users::all();
        return view('admin/dataakun/user.printpdf', ['user'=>$user]);
    }
}
