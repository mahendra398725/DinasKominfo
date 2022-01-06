<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostCategory;

class KecamatanController extends Controller
{
    public function index(){
        $data_postcategory = PostCategory::orderBy('updated_at', 'asc')->simplePaginate(1000);
        return view('admin/datawilayah/kecamatan.index', compact('data_postcategory'));
    }
}
