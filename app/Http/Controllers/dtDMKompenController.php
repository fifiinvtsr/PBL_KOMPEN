<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtDMKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Mahasiswa Kompen',
            'list' => ['Home', 'Daftar Mahasiswa Kompen']
        ];

        $page = (object)[
            'title' => 'Daftar Mahasiswa Kompen'
        ];

        $activeMenu = 'dtDMKompen';

        return view('dtDMKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
