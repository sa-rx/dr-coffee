<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $fillable = [ 
        'name',
        'number',
        'email',


        'qualification',
        'commercial_experie',
        'area',
        'investment_value',
        'solvency',

        
        'date',
        'reason_franchise',
        'know_us'
    ];

    use HasFactory;
}
