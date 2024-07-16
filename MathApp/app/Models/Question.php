<?php

// app/Models/Question.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'qn_id'; // Set the primary key
    protected $fillable = ['qn']; // Mass assignable attributes

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'qn_id'); // Define one-to-many relationship
    }
}
