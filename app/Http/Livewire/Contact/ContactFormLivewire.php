<?php

namespace App\Http\Livewire\Contact;

use App\Services\ContactService;
use Livewire\Component;

class ContactFormLivewire extends Component
{
    public $user_name, $email, $message;
    public $captcha = 0;


    public function render()
    {
        return view('livewire.contact.contact-form-livewire');
    }

    protected array $rules = [
        'user_name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required|max:3000'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SITE_SECRET') . '&response=' . $token);
        $this->captcha = $response->json()['score'];

        if (!$this->captcha > .3) {
            $this->store();
        } else {
            return session()->flash('storeContactGoogle', trans('contact.error.google.recaptcha'));
        }

    }

    public function store()
    {
        $this->validate();
        app()->make(ContactService::class)->store($this->user_name, $this->email, $this->message);
        $this->user_name = '';
        $this->email = '';
        $this->message = '';
        session()->flash('storeContact',trans('contact.error.success'));
    }

}
