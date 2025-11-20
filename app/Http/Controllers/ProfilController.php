<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.index', [
            'page_meta' => [
                'name' => 'Profil',
                'header' => 'Profil Sekolah',
                'title' => 'Profil Page',
                'link' => 'profil',
            ],
        ]);
    }
}
