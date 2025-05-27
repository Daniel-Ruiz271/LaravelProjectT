<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::paginate(10); // o el número de elementos por página que desees
        //$players = Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $users = \App\Models\User::all();
    return view('players.create', compact('users'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'main_character' => 'required|string|max:255',
    ]);

   $user = User::find($request->user_id);

    Player::create([
        'user_id' => $user->id,
        'main_character' => $request->main_character,
        'name' => $user->name,
        'email' => $user->email,
    ]);


    return redirect()->route('players.index')->with('success', 'Jugador creado con éxito');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        $users = \App\Models\User::all();
        return view('players.edit', compact('player', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
{
    $request->validate([
        'main_character' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id',
    ]);

    $user = \App\Models\User::find($request->user_id);

    $player->update([
        'user_id' => $user->id,
        'main_character' => $request->main_character,
        'name' => $user->name,
        'email' => $user->email,
    ]);

    return redirect()->route('players.index')->with('success', 'Jugador actualizado con éxito');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index')->with('success', 'Jugador eliminado con éxito');
    }
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }
}
