<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = ['challenge_id', 'starting_date','ending_date', 'duration_per_challenge', 'number_of_questions'];

    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}