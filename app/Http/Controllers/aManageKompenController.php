<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aManageKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Manage Kompen',
            'list' => ['Home', 'Manage Kompen']
        ];

        $page = (object)[
            'title' => 'Manage Kompen'
        ];

        $activeMenu = 'aManageKompen';

        return view('aManageKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
