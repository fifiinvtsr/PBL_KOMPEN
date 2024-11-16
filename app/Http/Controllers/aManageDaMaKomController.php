<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aManageDaMaKomController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Manage Data Mahasiswa Kompen',
            'list' => ['Home', 'Manage Data Mahasiswa Kompen']
        ];

        $page = (object)[
            'title' => 'Manage Data Mahasiswa Kompen'
        ];

        $activeMenu = 'aManageDaMaKom';

        return view('aManageDaMaKom.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
