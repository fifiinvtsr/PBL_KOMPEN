<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtUpdateKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Update Kompen',
            'list' => ['Home', 'Update Kompen']
        ];

        $page = (object)[
            'title' => 'Update Kompen'
        ];

        $activeMenu = 'dtUpdateKompen';

        return view('dtUpdateKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
