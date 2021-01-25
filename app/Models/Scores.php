<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    protected $table = 'scores';
    protected $fillable = ['played_at', 'game_id', 'created_by', 'player_id', 'score'];
}
