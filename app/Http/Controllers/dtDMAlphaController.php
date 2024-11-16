<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtDMAlphaController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Mahasiswa Alpha',
            'list' => ['Home', 'Daftar Mahasiswa Alpha']
        ];

        $page = (object)[
            'title' => 'Daftar Mahasiswa Alpha'
        ];

        $activeMenu = 'dtDMAlpha';

        return view('dtDMAlpha.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
