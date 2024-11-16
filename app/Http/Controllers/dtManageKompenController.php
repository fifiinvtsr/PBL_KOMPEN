<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtManageKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Manage Kompen',
            'list' => ['Home', 'Manage Kompen']
        ];

        $page = (object)[
            'title' => 'Manage Kompen'
        ];

        $activeMenu = 'dtManageKompen';

        return view('dtManageKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
