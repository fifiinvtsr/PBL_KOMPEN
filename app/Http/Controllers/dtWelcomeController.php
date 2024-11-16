<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtWelcomeController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('dt_welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
