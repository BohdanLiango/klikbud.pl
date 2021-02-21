<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Services;
use Livewire\Component;

class ServicesLivewire extends Component
{
    public function render()
    {
        $services = Services::where('status_to_main_page_id', '=', config('klikbud.status.status_to_main_page.visible'))->get();
        return view('livewire.dashboard.services-livewire', compact('services'));
    }
}
