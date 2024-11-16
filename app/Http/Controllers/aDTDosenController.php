<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aDTDosenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Tugas Dosen',
            'list' => ['Home', 'Daftar Tugas Dosen']
        ];

        $page = (object)[
            'title' => 'Daftar Tugas Dosen'
        ];

        $activeMenu = 'aDTDosen';

        return view('aDTDosen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
