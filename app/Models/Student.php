<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'gender',
        'age',
        'student_id',
        'borrow_status',
    ];

    protected $hidden = [
        'password',
    ];
}
