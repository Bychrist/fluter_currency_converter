<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainers extends Model
{
    use HasFactory;
    protected $table = "trainers";

    public function courses()
    {
     //   return $this->belongsToMany(CourseTrainers::class);
        return $this->belongsToMany(Course::class);
    }
}
