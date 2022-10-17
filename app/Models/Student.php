<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'address',
        'birthday',
    ];

    protected $table = '_student';

    // Str::plural('Student') == "Students";

}
