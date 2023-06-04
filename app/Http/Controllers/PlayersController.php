<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Http;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }  
    public function store(Request $request)
    {
        $players = new Player([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
        ]);
        $players->save();
        return response()->json('Player created!');
    }
    public function playerdata(Request $request)
    {
       
            $response = Http::get("http://api.isportsapi.com/sport/football/topscorer?api_key=fD0RY2FDjSWC7Bjj&leagueId=13014");
            $response = json_decode($response->body());
            return $response;

    }

    public function show($id)
    {
        $contact = Player::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $players = Player::find($id);
       $players->update($request->all());
       return response()->json('Player updated');
    }
    public function destroy($id)
    {
        $players = Player::find($id);
        $players->delete();
        return response()->json(' deleted!');
}
}