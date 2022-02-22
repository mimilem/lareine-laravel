<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'speaker',
        'topic',
        'forum',
        'start_time',
        'end_time',
    ];
}
