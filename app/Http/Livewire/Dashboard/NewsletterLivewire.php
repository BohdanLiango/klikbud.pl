<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterLivewire extends Component
{
    public $emailNewsletter;

    public function render()
    {
        return view('livewire.dashboard.newsletter-livewire');
    }

    protected array $rules = [
        'emailNewsletter' => 'required|email|unique:klikbud_newsletter,email'
    ];

    public function save()
    {
        $this->validate();

        $data = [
            'email' => $this->emailNewsletter
        ];
        Newsletter::create($data);

        $this->emailNewsletter = null;

        session()->flash('store', trans('layout.footer.newsletterSuccess'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

}
