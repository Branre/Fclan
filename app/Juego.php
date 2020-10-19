<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Juego extends Model
{
    //
    public function getRouteKey()
    {
        return 'nombre';
    }
    public function clans(){
        return $this->belongsToMany(Clan::class);
    }
}
