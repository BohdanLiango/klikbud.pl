<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    /**
     * Show Main Page
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('main.content');
    }

}
