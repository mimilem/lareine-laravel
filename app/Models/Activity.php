<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'picture',
        'date',
        'place',
        'target_audience',
        'prerequisites',
        'amount',
        'place',
        'country',
        'province',
        'city',
        'status',
        'token',
        'description',
        'sub_title',
        'activity_type',
        'start_time',
        'end_time',
    ];

}
