<?php

namespace App\Services;

use App\Models\Contact;
use Exception;
use HiFolks\RandoPhp\Randomize;

class ContactService extends Service
{
    protected const STATUS_ACTIVE = 1;

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
            try {
                $unique_number = bcrypt($user_name . $email . $message . md5(Randomize::integer()->range(1,1000000000)));
            }catch (Exception $e){
                $unique_number = md5(now());
            }

            $status_id = self::STATUS_ACTIVE; // New contact
            $user_read_id = NULL;
            $user_name = htmlspecialchars($user_name);
            $message = htmlspecialchars($message);
            $store = new Contact();

            $data = [
                'user_name' => $user_name,
                'email' => $email,
                'message' => $message,
                'user_read_id' => $user_read_id,
                'unique_number' => $unique_number,
                'status_id' => $status_id
            ];

            $store->fill($data);

            $store->save();

        }catch (Exception $e){
            abort(403);
        }
    }
}
