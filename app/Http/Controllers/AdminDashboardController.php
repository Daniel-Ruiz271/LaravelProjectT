<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Player;
use App\Models\Tournament;

class AdminDashboardController extends Controller
{
        
    //
    public function index()
    {
        $gameCount = Game::count();
        $playerCount = Player::count();
        $tournamentCount = Tournament::count();


        return view('dashboard.admin', compact('gameCount', 'playerCount', 'tournamentCount'));
    }

}
