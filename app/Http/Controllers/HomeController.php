<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index',[
            'page_meta' => [
                'title' => 'Home Page',
                'header' => 'Home',
                'name' => 'Home',
                'link' => 'home',
            ],
        ]);
    }
}
