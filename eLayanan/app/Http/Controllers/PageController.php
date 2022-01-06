<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use App\Menara;
use App\Fiber;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function tentang()
    {
        $pages = Page::where('nama_halaman','SOP')->orderBy('id', 'asc')->simplePaginate(5);
        return view('tentang',  compact('pages'));
    }
    public function useradmin()
    {
        $totusers=Users::where('id_post_role','2')->count();
        $totM=Menara::count();
        $totF=Fiber::count();
        $totbaruM=Menara::where('id_status', '1')->count();
        $totprosesM=Menara::where('id_status', '2')->count();
        $totselesaiM=Menara::where('id_status', '4')->count();
        $tottolakM=Menara::where('id_status', '5')->count();
        $totbaruF=Fiber::where('id_status', '1')->count();
        $totprosesF=Fiber::where('id_status', '2')->count();
        $totselesaiF=Fiber::where('id_status', '4')->count();
        $tottolakF=Fiber::where('id_status', '5')->count();
        return view('admin.index', compact('totusers','totF','totM', 'totbaruM', 'totprosesM', 'totselesaiM', 'tottolakM', 'totbaruF', 'totprosesF', 'totselesaiF', 'tottolakF'));
    }
    public function userpublic()
    {
        return view('user.welcome');
    }
}
