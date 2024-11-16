<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aUpdateKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Update Kompen Selesai',
            'list' => ['Home', 'Update Kompen Selesai']
        ];

        $page = (object)[
            'title' => 'Update Kompen Selesai'
        ];

        $activeMenu = 'aUpdateKompen';

        return view('aUpdateKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
