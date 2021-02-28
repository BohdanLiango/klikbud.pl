<?php

namespace App\Services;

use App\Models\Contact;
use Exception;

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
            $user_name = htmlspecialchars($user_name);
            $message = htmlspecialchars($message);
            $store = new Contact();

            $data = [
                'user_name' => $user_name,
                'email' => $email,
                'message' => $message,
            ];

            $store->fill($data);
            $store->save();

        }catch (Exception $e){
            abort(403);
        }
    }
}
