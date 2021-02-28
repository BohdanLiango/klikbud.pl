<?php

namespace App\Http\Livewire\Contact;

use App\Services\ContactService;
use Livewire\Component;

class ContactFormLivewire extends Component
{
    public $user_name, $email, $message;

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
