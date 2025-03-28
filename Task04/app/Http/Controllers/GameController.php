<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private function isPrime($num)
    {
        if ($num < 2) return 'Нет';
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) return 'Нет';
        }
        return 'Да';
    }

    public function createGame(Request $request)
    {
        $playerName = $request->input('player', 'Игрок');
        $num = rand(1, 100);
        $isPrime = $this->isPrime($num);

        $game = Game::create([
            'player_name' => $playerName,
            'num' => $num,
            'isPrime' => $isPrime,
        ]);

        return response()->json([
            'id' => $game->id,
            'num' => $num,
        ]);
    }

    public function makeStep(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $playerAnswer = $request->input('answer');

        $result = ($playerAnswer == $game->isPrime) ? 'Верно' : 'Неверно';
        $game->update([
            'player_answer' => $playerAnswer,
            'result' => $result,
        ]);

        return response()->json([
            'isPrime' => $game->isPrime,
            'player_answer' => $playerAnswer,
            'result' => $result
        ]);
    }

    public function getGames()
    {
        return response()->json(Game::orderBy('created_at', 'desc')->get());
    }

    public function showGamePage()
    {
        return view('game');
    }
}