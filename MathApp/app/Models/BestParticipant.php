<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id',
        'name',
        'school',
        'position',
    ];
}
