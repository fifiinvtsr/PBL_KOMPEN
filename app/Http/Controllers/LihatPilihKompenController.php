<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatPilihKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Lihat dan Pilih Kompen',
            'list' => ['Home', 'Lihat dan Pilih Kompen']
        ];

        $page = (object)[
            'title' => 'Lihat dan Pilih Kompen'
        ];

        $activeMenu = 'mLihatPilihKompen';

        return view('mLihatPilihKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
