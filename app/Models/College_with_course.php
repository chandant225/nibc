<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College_with_course extends Model
{
    use HasFactory;
    
    protected $fillable = ['course_id', 'college_slug','country_slug'];
}
