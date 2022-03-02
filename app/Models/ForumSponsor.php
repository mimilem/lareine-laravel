<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'forum_id',
        'logo'
    ];

}
