<?php

use App\Http\Controllers\GameRoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/rooms', [GameRoomController::class, 'create']);
Route::get('/rooms/{code}/join', [GameRoomController::class, 'join']);
