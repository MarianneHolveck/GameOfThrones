<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';

    public function character()
    {
        return $this->hasMany('App\Models\Character');
    }

    public function characters(){
        return $this->hasManyThrough('App\Models\Character', 'App\Models\CharacterHasHouse', 'house', 'id', 'id', 'character' );
    }

}
