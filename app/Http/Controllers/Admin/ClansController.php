<?php

namespace App\Http\Controllers\Admin;

use App\Clan;
use App\Juego;
use App\Pais;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClansController extends Controller
{
    //
    public function index()
    {

        $clans = auth()->user()->clans;
        return view ('admin.clans.index',compact('clans'));
    }
    public function create()
    {
        $this->authorize('create',new Clan);
        $juegos = Juego::all();
        $pais = Pais::all();
        return view ('admin.clans.create',compact(['juegos','pais']));
    }
    public function store(Request $request)
    {
        /*
        $this->validate($request,
        ['titulo'=>'required',
        'descripcion'=>'required',
        'requisitos'=>'required',
        'edadminima'=>'required',
        'edadmaxima'=>'required',
        'discord'=>'required',
    ]);*/

        $clan = new Clan;
        $clan->user_id= $request->get('id');
        $clan->titulo= $request->get('titulo');
        $clan->descripcion= $request->get('descripcion');
        $clan->requisitos= $request->get('requisitos');
        $clan->edadminima= $request->get('edadminima');
        $clan->edadmaxima= $request->get('edadmaxima');
        $clan->discord= $request->get('enlacediscord');
        $clan->whatsapp= $request->get('enlacewhatsapp');
        $clan->published_at=Carbon::parse($request->get('published_at'));
        $clan->save();

        $clan->juego()->attach($request->get('juego'));
        $clan->pais()->attach($request->get('pais'));

        return redirect()->route('admin.clan.edit',$clan);

    }
    public function edit(Clan $clan){

        $this->authorize('view',$clan);

        $juegos = Juego::all();
        $pais = Pais::all();
        return view('Admin.clans.edit',compact(['juegos','pais','clan']));
    }
    public function update(Clan $clan,Request $request){
        
    /*    $this->validate($request,
        ['titulo'=>'required',
        'descripcion'=>'required',
        'requisitos'=>'required',
        'edadminima'=>'required',
        'edadmaxima'=>'required',
        'discord'=>'required',
    ]);
    */
     $this->authorize('update',$clan);


        $clan->user_id= $request->get('id');
        $clan->titulo= $request->get('titulo');
        $clan->descripcion= $request->get('descripcion');
        $clan->requisitos= $request->get('requisitos');
        $clan->edadminima= $request->get('edadminima');
        $clan->edadmaxima= $request->get('edadmaxima');
        $clan->discord= $request->get('enlacediscord');
        $clan->whatsapp= $request->get('enlacewhatsapp');
        $clan->published_at=Carbon::parse($request->get('published_at'));
        $clan->save();

        $clan->juego()->sync($request->get('juego'));
        $clan->pais()->sync($request->get('pais'));

        return redirect()->route('admin.clans.index');
    }
    public function destroy(Clan $clan){

        $this->authorize('delete',$clan);
       
        $clan->juego()->detach();
        
        $clan->pais()->detach();

        $clan->photos->each->delete();

        $clan->delete();

        return redirect()->route('admin.clans.index');
    }
}
