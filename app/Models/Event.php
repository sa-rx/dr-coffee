<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [ 
        'name',
        'number',
        'email',
        'responsible_party',
        'audience',
        'date',
        'content'
    ];
    use HasFactory;
}
