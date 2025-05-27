<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Game;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
  

    public function index()
    {
        $tournaments = Tournament::with('game')->latest()->paginate(10);
        return view('tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        $games = Game::all();
        return view('tournaments.create', compact('games'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'game_id' => 'required|exists:games,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Tournament::create($request->all());

        return redirect()->route('tournaments.index')->with('success', 'Torneo creado con éxito.');
    }

    public function show(Tournament $tournament)
    {
        return view('tournaments.show', compact('tournament'));
    }

    public function edit(Tournament $tournament)
    {
        $games = Game::all();
        return view('tournaments.edit', compact('tournament', 'games'));
    }

    public function update(Request $request, Tournament $tournament)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'game_id' => 'required|exists:games,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $tournament->update($request->all());

        return redirect()->route('tournaments.index')->with('success', 'Torneo actualizado.');
    }

    public function destroy(Tournament $tournament)
    {
        $tournament->delete();

        return redirect()->route('tournaments.index')->with('success', 'Torneo eliminado.');
    }
}

