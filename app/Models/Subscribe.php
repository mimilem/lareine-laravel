<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'first_name',
        'last_name',
        'post_name',
        'email',
        'phone',
        'city',
        'province',
        'country',
        'gender',
        'work',
        'status',
        'code',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
