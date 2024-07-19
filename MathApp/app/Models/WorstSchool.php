<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorstSchool extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'name', 'position']; // Add 'school_id' here
}
