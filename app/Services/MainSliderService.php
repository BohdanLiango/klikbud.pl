<?php

namespace App\Services;

use App\Models\MainSlider;
use Exception;

class MainSliderService extends Service
{
    /**
     * Show all to HomePage
     *
     * @return mixed
     */
    public function showActiveSlidersForMainPage()
    {
        try {
            return MainSlider::where('status_to_main_page_id', self::SHOW_TO_MAIN_PAGE)
                ->orderBy('slider_number_show')
                ->get();
        }catch (Exception $e){
            return abort(403);
        }

    }
}
