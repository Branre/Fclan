<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios']=usuarios::paginate();

        return view('Usuario.indexUsuarios',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuario.createUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $datosUsuario = request()-> except('_token');

        if($request->hasFile('usfoto')){
            $datosUsuario['usfoto'] = $request->file('usfoto')->store('Usuarios','public');
        }


        usuarios::insert($datosUsuario);

        return redirect('usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uscodigo)
    {
        //
        $usuario = usuarios::findOrFail($uscodigo);
        return view('Usuario.editUsuarios',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uscodigo)
    {
        //
        $datosUsuario=request()->except(['_token','_method']);

        if($request->hasFile('usfoto')){
            $usuario=usuarios::findOrFail($uscodigo);
            Storage::delete('public/'.$usuario->usfoto);

            $datosUsuario['usfoto'] = $request->file('usfoto')->store('Usuarios','public');
        }

        usuarios::where('uscodigo','=',$uscodigo)->update($datosUsuario);
        $usuario = usuarios::findOrFail($uscodigo);
        return view('Usuario.editUsuarios',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $uscodigo
     * @return \Illuminate\Http\Response
     */
    public function destroy($uscodigo)
    {
        //
        $usuario=usuarios::findOrFail($uscodigo);
        if(Storage::delete('public/'.$usuario->usfoto)){

       }
        
        usuarios::destroy($uscodigo);
        return redirect('usuarios');
    }
}
