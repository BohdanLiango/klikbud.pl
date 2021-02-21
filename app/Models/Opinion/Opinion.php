<?php

namespace App\Models\Opinion;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Venturecraft\Revisionable\RevisionableTrait;

class Opinion extends Model
{
    protected $table = 'klikbud_opinion';
    protected $guarded = [];
    protected $casts = [
        'testimonial_service' => 'array',
        'testimonial' => 'array'
    ];

    use HasFactory;
    use SoftDeletes;

    use RevisionableTrait;
    protected $revisionEnabled = true;
    protected $revisionCreationsEnabled = true;
    protected $historyLimit = 100; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)

    use QueryCacheable;
    protected $cacheFor = 3600 * 3600;
    protected static $flushCacheOnUpdate = true;

    /**
     * @return BelongsTo
     */
    public function portal(): belongsTo
    {
        return $this->belongsTo(OpinionPortal::class, 'portal_opinion_id');
    }

    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }
}
