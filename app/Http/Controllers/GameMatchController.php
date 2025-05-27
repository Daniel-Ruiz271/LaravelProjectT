<?php

namespace App\Http\Controllers;

use App\Models\GameMatch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\Player;
use App\Mail\MatchAssigned;
use Illuminate\Support\Facades\Mail;

class GameMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $matches = GameMatch::with(['tournament.game', 'player1', 'player2', 'winner'])
                ->latest()
                ->paginate(10);

    $completedMatches = GameMatch::where('status', 'completed')->count();
    $pendingMatches = GameMatch::where('status', 'pending')->count();
    $canceledMatches = GameMatch::where('status', 'canceled')->count();
    
    $topPlayers = Player::withCount(['wins'])
                ->orderByDesc('wins_count')
                ->take(5)
                ->get();

    $activeTournaments = Tournament::active()->count();

    return view('game_matches.index', compact(
        'matches',
        'completedMatches',
        'pendingMatches',
        'canceledMatches',
        'topPlayers',
        'activeTournaments'
    ));
}

    public function create()
    {
        $tournaments = Tournament::all();
        $players = Player::all();
        return view('game_matches.create', compact('tournaments', 'players'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'tournament_id' => 'required|exists:tournaments,id',
        'player1_id' => 'required|exists:players,id|different:player2_id',
        'player2_id' => 'required|exists:players,id',
        'winner_id' => 'nullable|exists:players,id',
    ]);

    $match = GameMatch::create($request->only('tournament_id', 'player1_id', 'player2_id', 'winner_id'));

    // Cargar relaciones para tener acceso a los correos
    $match->load(['player1', 'player2']);

   

    // Enviar correos a los jugadores
    if ($match->player1 && $match->player1->email) {
        Mail::to($match->player1->email)->send(new MatchAssigned($match, $match->player1));
    }

    if ($match->player2 && $match->player2->email) {
        Mail::to($match->player2->email)->send(new MatchAssigned($match, $match->player2));
    }

    return redirect()->route('matches.index')->with('success', 'Match creado y correos enviados.');
}




    /**
     * Display the specified resource.
     */
    public function show(GameMatch $match)
    {
        return view('game_matches.show', compact('match'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GameMatch $match)
    {
        $tournaments = Tournament::all();
        $players = Player::all();
        return view('game_matches.edit', compact('match', 'tournaments', 'players'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, GameMatch $match)
{
    $request->validate([
        'winner_id' => 'nullable|in:' . $match->player1_id . ',' . $match->player2_id,
    ]);

    $match->winner_id = $request->winner_id;
    $match->save();

    return redirect()->back()->with('success', 'Ganador actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameMatch $match)
    {
        $match->delete();

        return redirect()->route('matches.index')->with('success', 'Partido eliminado con éxito');
    }
}
