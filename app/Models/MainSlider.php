<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class MainSlider extends Model
{
    protected string $table = 'klikbud_main_slider';
    protected array $guarded = [];
    protected array $casts =  [
        'alt' => 'array',
        'textYellow' => 'array',
        'textBlack' => 'array',
        'description' => 'array'
    ];

    use HasFactory;
    use SoftDeletes;

    use RevisionableTrait;
    protected bool $revisionEnabled = true;
    protected bool $revisionCreationsEnabled = true;
    protected bool $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected int  $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.

    /**
     * @return BelongsTo
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Files::class, 'image_id');
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Files::class, 'table_record_id');
    }

}
