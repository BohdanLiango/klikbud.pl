<?php

namespace App\Http\Controllers;

use App\Data\AdditionalData;
use App\Services\CounterService;
use App\Services\GalleryService;
use App\Services\MainSliderService;
use App\Services\ServicesService;
use App\Services\TestimonialsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    protected $mainSlider;
    protected $service;
    protected $counter;
    protected $testimonial;
    protected $additionalData;
    protected $gallery;

    /**
     * MainController constructor.
     * @param MainSliderService $mainSliderService
     * @param ServicesService $servicesService
     * @param CounterService $counterService
     * @param TestimonialsService $testimonialsService
     * @param AdditionalData $additionalData
     * @param GalleryService $galleryService
     */
    public function __construct(MainSliderService $mainSliderService, ServicesService $servicesService,
                                CounterService $counterService, TestimonialsService $testimonialsService,
                                AdditionalData $additionalData, GalleryService $galleryService)
    {
        $this->mainSlider = $mainSliderService;
        $this->service = $servicesService;
        $this->counter = $counterService;
        $this->testimonial = $testimonialsService;
        $this->additionalData = $additionalData;
        $this->gallery = $galleryService;
    }

    /**
     * Show Main Page
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        $sliders = $this->mainSlider->showActiveSlidersForMainPage();
        $services = $this->service->showWelcomePageActiveServices();
        $counter = $this->counter->showAllCountersToWelcomePage();
        $testimonials = $this->testimonial->showActiveTestimonialsToWelcomePage();
        $categoryGallery = $this->additionalData->gallery_categories();
        $gallery = $this->gallery->showAllToMainPage(6);

        return view('main.content', compact('sliders', 'services', 'counter', 'testimonials',
                                                                'categoryGallery', 'gallery'));
    }

}
