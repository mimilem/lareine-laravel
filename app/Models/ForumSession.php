<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'forum_id',
        'topic',
        'day',
        'start_time',
        'end_time',
    ];

    public function session_speakers()
    {
        return $this->hasMany(ForumSessionSpeaker::class, 'forum_session_id');
    }
}
