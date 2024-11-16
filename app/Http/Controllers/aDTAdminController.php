<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aDTAdminController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Tugas Admin',
            'list' => ['Home', 'Daftar Tugas Admin']
        ];

        $page = (object)[
            'title' => 'Daftar Tugas Admin'
        ];

        $activeMenu = 'aDTAdmin';

        return view('aDTAdmin.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
