<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function postlogin(Request $request)
    {
        request()->validate(
            [
                'email'=>'required',
                'password' => 'required|min:8'
            ]);

            $kredensil = $request->only('email', 'password');
            if (Auth::attempt($kredensil)) {
                $user=Auth::User();
                if ($user->id_post_role == '1') {
                    return redirect()->intended('admin');
                } elseif ($user->id_post_role == '2') {
                    return redirect()->intended('welcome');
                }
                return redirect()->intended('/admin');
            }
        return redirect('/login');
    }

    public function register(){
        return view('auths.register');
    }

    public function store(Request $request)
    {
        $post = "N";
        if ($request->hasFile('file_ktp')) {
            $request->validate([
                'file_ktp' => 'required|mimes:pdf,docx|max:3072' 
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
            $post->id_post_role ="2";
            $post->file_ktp = $file_ktp->getClientOriginalName();
            $post->email =$request->email;
            $post->password =bcrypt($request->password);
            
            $post->save();
        }
        return redirect('/login');
    }

    
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/welcome');
    }
}
