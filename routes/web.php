<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('index');
});
Route::get('/chat', function () {
    return view('chat');
});

Auth::routes();

Route::resource('users', UsersController::class);

// Route::get("/chat/{user_id}",[ChatController::class,"chatForm"])->middleware("auth");
Route::post("/chat/send-message",[ChatController::class,"sendMessage"])->middleware("auth");