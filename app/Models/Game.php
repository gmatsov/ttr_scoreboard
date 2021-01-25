<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public const MAX_PLAYER = 5;

    protected $table = 'games';
    protected $fillable = ['played_at', 'created_by'];
}
