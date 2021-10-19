<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\Title;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CharacterController extends Controller
{
    public function item(int $id)
    {
        $matchingCharacter = Character::findOrFail($id);
        $matchingCharacter->load('title');
        $matchingCharacter->load('characterMother');
        $matchingCharacter->load('characterFather');
        $houses = $matchingCharacter->houses;
        // dump($houses);
        return view('layout.character', [
            'character' => $matchingCharacter,
            'houses' => $houses
        ]);
    }
}
