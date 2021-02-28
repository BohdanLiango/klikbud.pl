<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\MainSlider;
use Livewire\Component;

class MainSLiderLivewire extends Component
{
    public function render()
    {
        $sliders = MainSlider::where('status_to_main_page_id', '=', config('klikbud.status.status_to_main_page.visible'))->get();
        return view('livewire.dashboard.main-s-lider-livewire', compact('sliders'));
    }
}
