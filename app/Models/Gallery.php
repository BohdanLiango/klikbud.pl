<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class Gallery extends Model
{
    protected $table = 'home_gallery';
    protected $guarded = [];
    protected $casts = [
        'old_images_id' => 'array',
        'slug' => 'array',
        'title' => 'array',
        'description' => 'array',
        'alt' => 'array'
    ];
    use HasFactory;
    use SoftDeletes;

    use RevisionableTrait;
    protected $revisionEnabled = true;
    protected $revisionCreationsEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.

    /**
     * @return BelongsTo
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Files::class, 'image_id');
    }
}
