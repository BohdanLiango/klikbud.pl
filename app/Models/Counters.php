<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counters extends Model
{
    protected $table = 'home_counters';
    protected $guarded = [];

    use HasFactory;
}
