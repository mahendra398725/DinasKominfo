<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostRole;

class PostRoleController extends Controller
{
    public function index(){
        $data_postrole = PostRole::orderBy('updated_at', 'asc')->simplePaginate(1000);
        return view('admin/dataakun/role.index', compact('data_postrole'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        PostRole::create($input);
        return redirect('admin/dataakun/role');
    }
}
