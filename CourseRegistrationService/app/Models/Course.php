<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'Course'; // Ensure the table name matches exactly

    protected $fillable = ['student_id', 'course_name', 'credit'];
}
