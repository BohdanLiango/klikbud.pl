<?php

namespace App\Services;

use App\Models\Counters;

class CounterService extends Service
{
    protected const ID = 1;

    /**
     * Показати всі
     *
     * @return mixed
     */
    public function showAllCountersToWelcomePage()
    {
        return Counters::find(self::ID);
    }
}
