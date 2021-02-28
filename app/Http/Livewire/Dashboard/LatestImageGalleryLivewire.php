<?php

namespace App\Http\Livewire\Dashboard;

use App\Data\AdditionalData;
use App\Models\Gallery;
use Livewire\Component;

class LatestImageGalleryLivewire extends Component
{
    public $searchCategory;

    public function mount()
    {
        $this->searchCategory = '';
    }

    public function render()
    {
//        $gallery = Gallery::where('status_to_main_page_id', '=', config('klikbud.status.status_to_main_page.visible'))->get();
        $gallery = Gallery::when($this->searchCategory != '', function ($query){
            $query->where('category_id', '=', $this->searchCategory);
        })->where('status_to_main_page_id', '=', config('klikbud.status.status_to_main_page.visible'))
            ->where('status_gallery_id', '=', config('klikbud.status.status_to_gallery.visible'))
            ->orderBy('ID', 'desc')->paginate(6);
        $categories = app()->make(AdditionalData::class)->gallery_categories();

        return view('livewire.dashboard.latest-image-gallery-livewire', compact('gallery', 'categories'));
    }

    public function showImagesToGallery($categoryId)
    {
        $this->searchCategory = $categoryId;
    }

    public function showAllImagesToGallery()
    {
        $this->searchCategory = '';
    }
}
