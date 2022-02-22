<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'topic',
        'description',
        'picture',
        'city',
        'country',
        'province',
        'place',
        'token',
        'start_date',
        'end_date',
    ];
}
