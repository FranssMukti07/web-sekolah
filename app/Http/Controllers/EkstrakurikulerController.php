<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('ekstrakurikuler.index', [
            'page_meta' => [
                'name' => 'Ekstrakurikuler',
                'header' => 'Ekstrakurikuler',
                'title' => 'Ekstrakurikuler Page',
                'link' => 'ekstrakurikuler',
            ],
        ]);
    }
}
