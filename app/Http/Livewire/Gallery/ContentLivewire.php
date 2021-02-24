<?php

namespace App\Http\Livewire\Gallery;

use App\Data\AdditionalData;
use App\Models\Gallery;
use Livewire\Component;

class ContentLivewire extends Component
{
    public $searchCategory;

    public function mount()
    {
        $this->searchCategory = '';
    }

    public function render()
    {
        $gallery = Gallery::when($this->searchCategory != '', function ($query){
            $query->where('category_id', '=', $this->searchCategory);
        })->where('status_gallery_id', '=', config('klikbud.status.status_to_gallery.visible'))
            ->orderBy('ID', 'desc')->paginate(12);
        $categories = app()->make(AdditionalData::class)->gallery_categories();
        return view('livewire.gallery.content-livewire', compact('gallery', 'categories'));
    }

    public function searchCategory($id)
    {
        if($id === 100000)
        {
            $this->searchCategory = '';
        }else{
            $this->searchCategory = $id;
        }

    }

}
