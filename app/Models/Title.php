<?php

namespace App\Models;

// on utilise le CoreModel de Eloquent
use Illuminate\Database\Eloquent\Model;

class Title extends Model // Et on en hérite
{
    protected $table = 'title';

    public function characters()
    {
        return $this->hasMany('App\Models\Character');
    }
}
