<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostCategory;
use App\Fiber;
use App\Post;

class DesaController extends Controller
{
    public function index(){
        $data_post = Post::orderBy('updated_at', 'asc')->simplePaginate(1000);
        $category = PostCategory::get();
        return view('admin/datawilayah/desa.index', compact('data_post', 'category'));
    }
}
