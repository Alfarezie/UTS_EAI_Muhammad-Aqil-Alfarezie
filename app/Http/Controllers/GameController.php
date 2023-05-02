<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }
    public function show($id)
    {
        return Game::find($id);
    }
    public function store(Request $request)
    {
        return Game::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->update($request->all());
        return $game;
    }
    public function delete(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return 204;
    }
}