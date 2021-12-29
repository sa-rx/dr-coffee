<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'content',
        'date',
        'available'
    ];

    use HasFactory;

    public function participations(){
        return $this->hasMany(Participation::class);
    }
}
