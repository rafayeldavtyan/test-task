<?php

namespace App\Models;

use App\Casts\TaskContent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property object $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Task extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => TaskContent::class,
    ];
}
