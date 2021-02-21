<?php

namespace App\Models\Opinion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Venturecraft\Revisionable\RevisionableTrait;

class OpinionPortal extends Model
{
    protected $table = 'klikbud_opinion_portal';
    protected $guarded = [];

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
}
