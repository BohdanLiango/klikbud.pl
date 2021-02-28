<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function show()
    {
        return view('gallery.content');
    }
}
