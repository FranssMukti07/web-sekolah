<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery.index', [
            'page_meta' => [
                'name' => 'Gallery',
                'header' => 'Gallery',
                'title' => 'Gallery Page',
                'link' => 'gallery',
            ],
        ]);
    }
}
