<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Opinion\Opinion;
use Livewire\Component;

class OpinionLivewire extends Component
{
    public function render()
    {
        $opinions = Opinion::where('status_to_main_page_id', '=', config('klikbud.status.status_to_main_page.visible'))->orderBy('ID', 'desc')->paginate(12);
        return view('livewire.dashboard.opinion-livewire', compact('opinions'));
    }
}
