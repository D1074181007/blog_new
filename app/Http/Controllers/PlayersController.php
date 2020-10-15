<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        return view('players.index');
    }

    public function show($id)
    {
        if ($id == 5){
            $player_name = "Bear";
            $player_city = "The forest";
            $player_site = "123";}
        else{
            $player_name = "Goblin";
            $player_city = "The forest";
            $player_site = "Cave";}

        $data = compact( 'id', 'player_name' , 'player_city' , 'player_site');

        return view('players.show' , $data);
    }

    public function edit($id)
    {
        return view('players.edit')->with ("player_id" , $id);
    }

    public function create()
    {
        return view('players.create');
    }
}
