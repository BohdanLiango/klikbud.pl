<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class Testimonials extends Model
{
    protected string $table = 'klikbud_testimonials';
    protected array $guarded = [];
    protected array $casts = [
        'testimonial_service' => 'array',
        'testimonial' => 'array'
    ];

    use HasFactory;
    use SoftDeletes;

    use RevisionableTrait;
    protected bool $revisionEnabled = true;
    protected bool $revisionCreationsEnabled = true;
    protected int $historyLimit = 100; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected bool $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
}
