<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Counters;
use Livewire\Component;

class CounterLivewire extends Component
{
    public function render()
    {
        $counter = Counters::findOrFail(1);
        return view('livewire.dashboard.counter-livewire', compact('counter'));
    }
}
