<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clan;

class PagesController extends Controller
{
    //
    public function home(){
        $clans = Clan::latest('published_at')->paginate(2);

        return view('welcome',compact('clans'));
    }
}
