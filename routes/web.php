<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Events\Message;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Excel\Excelcontroller;
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


Route::controller(ArticleController::class)
->middleware('auth')
->prefix('articles')
->name('articles.')
->group(function(){
        Route::get('/','index')->name('index');
        Route::post('store','store')->name('store');
        Route::post('edit/article/{article}','update')->name('update');
});

Route::controller(Excelcontroller::class)->group(function(){

    Route::get('/excel','index')->name('excel.index');
    Route::post('/import','importExcelData')->name('import.excel');

});