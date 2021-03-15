<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class UpdateDataController extends Controller
{
    public function updateCache()
    {
        Artisan::call('cache:clear');
    }
}
