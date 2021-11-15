<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    public function house()
    {
        return $this->belongsTo('App\Models\House');
    }

    public function houses(){
        return $this->hasManyThrough('App\Models\House', 'App\Models\CharacterHasHouse', 'character', 'id', 'id', 'house');
    }

    public function title()
    {
        return $this->belongsTo('App\Models\Title', 'id_title');
    }

    public function characters()
    {
        return $this->hasMany('App\Models\Character');
    }

    public function characterMother()
    {
        return $this->belongsTo('App\Models\Character', 'mother_id');
    }

    public function characterFather()
    {
        return $this->belongsTo('App\Models\Character', 'father_id');
    }


}
