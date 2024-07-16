<?php

// app/Models/Answer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $primaryKey = 'ans_id'; // Set the primary key
    protected $fillable = ['question_id', 'answer', 'marks']; // Mass assignable attributes

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'qn_id'); // Define inverse relationship
    }
}
