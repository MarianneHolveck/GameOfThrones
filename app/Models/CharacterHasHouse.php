<?php

namespace App\Models;

// on utilise le CoreModel de Eloquent
use Illuminate\Database\Eloquent\Model;

class CharacterHasHouse extends Model // Et on en hérite
{
    protected $table = 'house_has_characters';

}
