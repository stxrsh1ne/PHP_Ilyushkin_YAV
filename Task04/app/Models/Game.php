<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'player_name', 'num', 'isPrime', 'player_answer', 'result'
    ];
}
