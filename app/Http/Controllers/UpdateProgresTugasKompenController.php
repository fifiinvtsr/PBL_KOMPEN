<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProgresTugasKompenController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Update Progres Tugas Kompen ',
            'list' => ['Home', 'Update Progres Tugas Kompen']
        ];

        $page = (object)[
            'title' => 'Update Progres Tugas Kompen'
        ];

        $activeMenu = 'mUpdateProgresTugasKompen';

        return view('mUpdateProgresTugasKompen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
