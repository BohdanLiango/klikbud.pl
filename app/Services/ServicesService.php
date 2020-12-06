<?php

namespace App\Services;

use App\Models\Services;
use Exception;

class ServicesService extends Service
{

    /**
     * Show all to main page
     *
     * @return mixed
     */
    public function showWelcomePageActiveServices()
    {
        try {
            return Services::where('status_to_main_page_id', self::SHOW_TO_OTHER)
                ->latest()->get();
        }catch (Exception $e){
            return abort(403);
        }

    }
}

