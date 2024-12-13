<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    use HasFactory;

    protected $table = 'registration';
    protected $primaryKey = 'registrationId';
    public $timestamps = true;  
    
    protected $fillable = [
        'registrationId',
        'userId',
        'courseId',
        'registrationDate',
        'status'
    ];
}
