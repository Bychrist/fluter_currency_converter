<?php

namespace App\Models;

use App\Models\Trainers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";
    public function trainers()
    {
        return $this->belongsToMany(Trainers::class);
    }

    public function trainingForm()
    {
        return $this->hasOne(TrainingForm::class);
    }
}
