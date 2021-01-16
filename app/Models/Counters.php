<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\RevisionableTrait;

class Counters extends Model
{
    protected string $table = 'klikbud_counter';
    protected array $guarded = [];

    use HasFactory;

    use RevisionableTrait;
    protected bool $revisionEnabled = true;
    protected bool $revisionCreationsEnabled = true;
    protected bool $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected int  $historyLimit = 10; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
}
