<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Tournament extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'game_id', 'start_date', 'end_date'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function matches()
    {
        return $this->hasMany(GameMatch::class);
    }
    public function scopeActive($query)
{
    return $query->where('status', 'active');
}

}

