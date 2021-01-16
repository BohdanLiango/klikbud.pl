<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class Newsletter extends Model
{
    protected string $table = 'klikbud_newsletter';
    protected array $guarded = [];

    use HasFactory;
    use SoftDeletes;

    use RevisionableTrait;
    protected bool $revisionEnabled = true;
    protected bool $revisionCreationsEnabled = true;
    protected bool $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected int $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
}
