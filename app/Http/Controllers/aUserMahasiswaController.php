<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aUserMahasiswaController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Mahasiswa',
            'list' => ['Home', 'Mahasiswa']
        ];

        $page = (object)[
            'title' => 'Daftar Mahasiswa'
        ];

        $activeMenu = 'aUserMahasiswa';

        return view('aUserMahasiswa.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
