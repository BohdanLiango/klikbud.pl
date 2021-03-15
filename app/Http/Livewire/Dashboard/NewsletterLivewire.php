<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Newsletter;
use GuzzleHttp\Client;
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

        $response = (new Client())->request('GET',  config('klikbud.url_to_clear_cache'));

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
