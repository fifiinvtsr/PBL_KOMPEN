<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aWelcomeController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('a_welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
