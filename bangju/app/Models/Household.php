<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'about',
        'rating',
        'num_tasks_completed',
        'joined_since',
    ];


}
