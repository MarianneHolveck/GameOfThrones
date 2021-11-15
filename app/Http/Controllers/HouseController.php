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
        // We get all the houses
        $houses = House::all();
        // dump($houses);
        // Sending it in the right view
        return view('layout.houses', ['houses' => $houses]);
    }

    public function item(int $id)
    {

        // We send the character link to this house
        $house = House::findOrFail($id);

        // We get the character through the relationship in the database
        $characters = House::findOrFail($id)->characters;
        return view('layout.house', [
            'house' => $house,
            'characters' => $characters
        ]);
    }
}
