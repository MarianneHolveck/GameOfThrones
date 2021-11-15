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
        // All of the characters
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
        return view('layout.home', [
            'characters' => $characters,
            'house' => $house
        ]);
    }
}
