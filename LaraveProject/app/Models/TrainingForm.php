<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingForm extends Model
{
    use HasFactory;
    protected $table = "training_forms";

    public function course()
    {
        return $this->belongsTo(Course::class);
    }


}
