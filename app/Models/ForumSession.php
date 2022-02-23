<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'speaker_id',
        'topic',
        'forum_id',
        'start_time',
        'end_time',
    ];
}
