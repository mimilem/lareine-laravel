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
        'city',
        'country',
        'province',
        'place',
        'description',
        'token',
        'start_date',
        'end_date',
    ];
}
