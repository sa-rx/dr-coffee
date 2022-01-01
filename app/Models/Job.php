<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name',
        'number',
        'age',
        'sex',
        'previous_experience'
    ]; 
    use HasFactory;
}
