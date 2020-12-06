<?php

namespace App\Services;

use App\Models\Newsletter;
use Exception;

class NewsletterService extends Service
{
    /**
     * Save email for HOME PAGES
     *
     * @param $email
     */
    public function store($email): void
    {
        try {

            $store = new Newsletter();

            $data = [
                'email' => $email
            ];

            $store->fill($data);

            $store->save();

        }catch (Exception $e){
            abort(403);
        }

    }
}
