<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', [
            'page_meta' => [
                'name' => 'Contact',
                'header' => 'Contact',
                'title' => 'Contact Page',
                'link' => 'contact',
            ],
        ]);
    }
}
