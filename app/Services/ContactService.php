<?php

namespace App\Services;

use App\Models\Contact;
use Exception;
use GuzzleHttp\Client;

class ContactService extends Service
{
    /**
     * Save new contact message
     *
     * @param $user_name
     * @param $email
     * @param $message
     */
    public function store($user_name, $email, $message): void
    {
        try {
            $user_read_id = NULL;
            $user_name = htmlspecialchars($user_name, ENT_QUOTES | ENT_HTML5);
            $message = htmlspecialchars($message, ENT_QUOTES | ENT_HTML5);
            $store = new Contact();

            $data = [
                'user_name' => $user_name,
                'email' => $email,
                'message' => $message,
            ];

            $store->fill($data);
            $store->save();

            $response = (new Client())->request('GET', config('klikbud.url_to_clear_cache'));
        }catch (Exception $e){
            abort(403);
        }
    }
}
