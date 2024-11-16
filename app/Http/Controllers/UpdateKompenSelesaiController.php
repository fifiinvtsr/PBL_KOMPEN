<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateKompenSelesaiController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Update Kompen Selesai',
            'list' => ['Home', 'Update Kompen Selesai']
        ];

        $page = (object)[
            'title' => 'Update Kompen Selesai'
        ];

        $activeMenu = 'mUpdateKompenSelesai';

        return view('mUpdateKompenSelesai.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
