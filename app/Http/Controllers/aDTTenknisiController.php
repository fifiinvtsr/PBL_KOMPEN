<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aDTTenknisiController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Tugas Teknisi',
            'list' => ['Home', 'Daftar Tugas Teknisi']
        ];

        $page = (object)[
            'title' => 'Daftar Tugas Teknisi'
        ];

        $activeMenu = 'aDTTeknisi';

        return view('aDTTeknisi.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
