<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameMatch;
class PlayerDashboardController extends Controller
{


  public function index()
    {
        $user = Auth::user();
        $player = $user->player;

        // Matches donde el jugador es player1 o player2, y el resultado aún no está definido
        $upcomingMatches = GameMatch::where(function ($query) use ($player) {
                $query->where('player1_id', $player->id)
                      ->orWhere('player2_id', $player->id);
            })
            ->whereNull('winner_id')
            ->with(['player1', 'player2', 'tournament'])
            ->get();

        // Matches completados (ganador definido)
        $completedMatches = GameMatch::where(function ($query) use ($player) {
                $query->where('player1_id', $player->id)
                      ->orWhere('player2_id', $player->id);
            })
            ->whereNotNull('winner_id')
            ->with(['player1', 'player2', 'winner'])
            ->get();

        $totalMatches = $completedMatches->count();
        $matchesWon = $completedMatches->where('winner_id', $player->id)->count();

        return view('dashboard.player', compact(
            'player',
            'upcomingMatches',
            'completedMatches',
            'totalMatches',
            'matchesWon'
        ));
    }


}
