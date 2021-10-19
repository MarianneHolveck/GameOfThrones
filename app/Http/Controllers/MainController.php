<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\Title;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function home()
    {
        // on récupère la liste de tous les personnages
        $characters = Character::all();
        $houses = [];

        foreach ($characters as $character) {
            $houses[] = $character->houses;
        }

        $house = [];

        foreach ($houses as $arrays) {
            $house[] = $arrays;
        }
        // dump($house);
        // On envoie dans la view indiquée les données récupérées
        return view('layout.home', [
            'characters' => $characters,
            'house' => $house
        ]);
    }
}
