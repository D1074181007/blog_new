<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Hello', function () {
    return view('Hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/{Name}' ,
            Function ($id , $Name) {return 'Hello ' . $id . " " . $Name; }
            ) ->where(['id' => '[0-9]+' , 'Name' => '^G[a-z]{5,5}$']) ;

Route::get('/players', function () {
    return view('players.index');
})->name('players.index');

Route::get('/players/{id}', function ($id) {
    if ($id == 5){
        $player_name = "Bear";
        $player_city = "The forest";
        $player_site = "123";}
    else{
        $player_name = "Goblin";
        $player_city = "The forest";
        $player_site = "Cave";}
    $data = compact('player_name' , 'player_city' , 'player_site');
    return view('players.show' , $data)->with ("player_id" , $id);
})->where('id' , '[0-9]+') ->name('players.show');

Route::get('/players/{id}/edit', function ($id) {
    return view('players.edit')->with ("player_id" , $id);
})->where('id' , '[0-9]+') ->name('players.edit');

Route::get('/players/create', function () {
    return view('players.create');
})->name('players.create');



Route::get('/teams', function () {
    return view('teams.index');
})->name('teams.index');

Route::get('/teams/{id}', function ($id) {
    if ($id == 5){
        $team_name = "LHU";
        $team_city = "桃園";
        $team_field = "Sky";}
    else{
        $team_name = "Goblin";
        $team_city = "The forest";
        $team_field = "Cave";}

    return view('teams.show')->with (["name"=>$team_name , "city"=>$team_city , "field"=>$team_field]);
})->where('id' , '[0-9]+') ->name('teams.show');

Route::get('/teams/{id}/edit', function ($id) {
    $data = [];
    if ($id == 5){
        $data['team_name'] = "LHU";
        $data['team_city'] = "桃園";
        $data['team_field'] = "Sky";}
    else{
        $data['team_name'] = "Goblin";
        $data['team_city'] = "The forest";
        $data['team_field'] = "Cave";}

    return view('teams.edit',$data);
})->where('id' , '[0-9]+') ->name('teams.edit');

Route::get('/teams/create', function () {
    return view('teams.create');
})->name('teams.create');
