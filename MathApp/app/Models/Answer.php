<?php

// app/Models/Answer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'answer', 'marks', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

