<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        return view('teams.index');
    }

    public function show($id)
    {
        if ($id == 5){
            $team_name = "LHU";
            $team_city = "桃園";
            $team_field = "Sky";}
        else{
            $team_name = "Goblin";
            $team_city = "The forest";
            $team_field = "Cave";}

        return view('teams.show')->with (["name"=>$team_name , "city"=>$team_city , "field"=>$team_field]);
    }

    public function edit($id)
    {
        $data = [];

        if ($id == 5){
            $data['team_name'] = "LHU";
            $data['team_city'] = "桃園";
            $data['team_field'] = "Sky";}
        else{
            $data['team_name'] = "Goblin";
            $data['team_city'] = "The forest";
            $data['team_field'] = "Cave";}

        return view('teams.edit', $data);
    }

    public function create()
    {
        return view('teams.create');
    }
}
