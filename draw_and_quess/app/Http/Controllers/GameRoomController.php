<?php

namespace App\Http\Controllers;

// Read incoming data
use Illuminate\Http\Request;
// Talkes to GameRoom model
use App\Models\GameRoom;
// String functions that generate random room codes
use Illuminate\Support\Str;

class GameRoomController extends Controller
{
    public function create()
    {
        $room = GameRoom::create([
            // Generate a random 5 character uppercase code
            'code' => strtoupper(Str::random(5)),
        ]);

        return response()->json($room);
    }

    public function join($code)
    {
        $room = GameRoom::where('code', $code)->firstOrFail();
        return response()->json(['message' => 'Joined room', 'room' => $room]);
    }
}