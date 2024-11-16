<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aUserADTController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Admin/Dosen/Teknisi',
            'list' => ['Home', 'Admin/Dosen/Teknisi']
        ];

        $page = (object)[
            'title' => 'Admin/Dosen/Teknisi'
        ];

        $activeMenu = 'aUserADT';

        return view('aUserADT.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
