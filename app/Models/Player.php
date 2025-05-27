<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GameMatch;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'main_character',
        'user_id',
    ];

    // Un jugador pertenece a un usuario (relación con el login)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con los matches como jugador 1
    public function matchesAsPlayer1()
    {
        return $this->hasMany(GameMatch::class, 'player1_id');
    }

    // Relación con los matches como jugador 2
    public function matchesAsPlayer2()
    {
        return $this->hasMany(GameMatch::class, 'player2_id');
    }

    // Si usas winner_id como relación (opcional)
    public function wins()
{
    return $this->hasMany(GameMatch::class, 'winner_id');
}

public function wonMatches()
{
    return $this->hasMany(GameMatch::class, 'winner_id')->where('status', 'completed');
}

}

