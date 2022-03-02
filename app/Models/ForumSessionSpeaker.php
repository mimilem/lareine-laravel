<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSessionSpeaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'forum_session_id',
        'speaker_id'
    ];

    public function speaker()
    {
        return $this->hasOne(User::class, 'id', 'speaker_id');
    }
}
