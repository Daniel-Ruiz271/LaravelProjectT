<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Player;
use App\Models\GameMatch;
use Illuminate\Http\Request;

class AdminBracketController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::paginate(10);
        return view('admin.brackets.index', compact('tournaments'));
    }

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        $players = Player::all(); // filtra si lo deseas por torneo
        $matches = GameMatch::where('tournament_id', $id)->get();

        return view('admin.brackets.show', compact('tournament', 'players', 'matches'));
    }

    // Aquí se podría generar el bracket automáticamente más adelante
}

 