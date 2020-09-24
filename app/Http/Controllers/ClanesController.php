<?php

namespace App\Http\Controllers;


use App\Usuarios;
use App\clanes;
use App\Paises;
use App\Juegos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clanes']=clanes::paginate();
       

        return view('Clanes.indexClanes',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios = usuarios::all();
        $paises = paises::all();
        $juegos = juegos::all();
        return view('Clanes.createClanes',compact(['usuarios','paises','juegos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosClan = request()-> except('_token');

        if($request->hasFile('climagen')){
            $datosClan['climagen'] = $request->file('climagen')->store('Clanes','public');
        }


        clanes::insert($datosClan);

        return redirect('clanes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clanes  $clanes
     * @return \Illuminate\Http\Response
     */
    public function show(clanes $clanes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clanes  $clanes
     * @return \Illuminate\Http\Response
     */
    public function edit($clcodigo)
    {
        //
        $clanes = clanes::findOrFail($clcodigo);
        $usuarios = usuarios::all();
        $paises = paises::all();
        $juegos = juegos::all();
        return view('clanes.editClanes',compact(['clanes','usuarios','paises','juegos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clanes  $clanes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $clcodigo)
    {
        //
        $datosClan=request()->except(['_token','_method']);

        if($request->hasFile('climagen')){
            $clanes=clanes::findOrFail($clcodigo);
            Storage::delete('public/'.$clanes->climagen);

            $datosClan['climagen'] = $request->file('climagen')->store('Clanes','public');
        }

        clanes::where('clcodigo','=',$clcodigo)->update($datosClan);
        $clanes = clanes::findOrFail($clcodigo);
        $usuarios = usuarios::all();
        $paises = paises::all();
        $juegos = juegos::all();
        return view('clanes.editClanes',compact(['clanes','usuarios','paises','juegos']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clanes  $clanes
     * @return \Illuminate\Http\Response
     */
    public function destroy($clcodigo)
    {
        //
        $clanes=clanes::findOrFail($clcodigo);
        if(Storage::delete('public/'.$clanes->usfoto)){

       }
        
        clanes::destroy($clcodigo);
        return redirect('usuarios');
    }
}
