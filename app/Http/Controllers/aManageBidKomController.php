<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aManageBidKomController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Manage Bidang Kompetensi',
            'list' => ['Home', 'Manage Bidang Kompetensi']
        ];

        $page = (object)[
            'title' => 'Manage Bidang Kompetensi'
        ];

        $activeMenu = 'aManageBidKom';

        return view('aManageBidKom.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
