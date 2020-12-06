<?php

namespace App\Services;

use App\Models\Testimonials;
use Exception;

class TestimonialsService extends Service
{
    /**
     * Show all to main page
     *
     * @return mixed
     */
    public function showActiveTestimonialsToWelcomePage()
    {
        try {
            return Testimonials::where('status_to_main_page_id', self::SHOW_TO_MAIN_PAGE)
                ->orderBy('id', 'desc')
                ->get();
        }catch (Exception $e){
            return abort(403);
        }

    }
}
