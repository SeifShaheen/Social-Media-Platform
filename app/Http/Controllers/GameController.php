<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }
    public function create()
    {
        return view('games.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->description = $request->description;
        $game->user_id = Auth::id(); // Set the user_id to the ID of the authenticated user
        $game->save();

        return redirect()->route('games.index')->with('success', 'Game created successfully!');
    }
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }
}