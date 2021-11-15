<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'title';

    public function characters()
    {
        return $this->hasMany('App\Models\Character');
    }
}
