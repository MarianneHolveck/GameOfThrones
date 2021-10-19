<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\Title;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HouseController extends Controller
{
    public function list()
    {
        // on récupère la liste de toutes les maisons
        $houses = House::all();
        // dump($houses);
        // On envoie dans la view indiquée les données récupérées
        return view('layout.houses', ['houses' => $houses]);
    }

    public function item(int $id)
    {

        // ON envoye les characters dans la view pour afficher les personnages de la maison correspondante
        $house = House::findOrFail($id);

        // On récupère les characters à travers la relationship
        $characters = House::findOrFail($id)->characters;
        return view('layout.house', [
            'house' => $house,
            'characters' => $characters
        ]);
    }
}
