<?php

namespace App\Http\Controllers;

use App\Clan;
use App\Juego;
use Illuminate\Http\Request;

class ClansController extends Controller
{
    //
    public function show($id)
    {
        $clan = Clan::find($id);

        return view('clans.show',compact(['clan']));
    }
}
