
@extends('Admin.layout')
@section('header')
 <h1>
        Clanes
        <small>Editar clan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clan</li>
      </ol>


@stop
@section('content')
<div class="row">
    <div class= "box">
        <div class= "box-header">
        <h3>Editar clan</h3>
        </div>
        <form method="POST" action="{{ route('admin.clan.update', $clan) }}">
        {{ csrf_field() }} 
        {{ method_field('PUT') }}
        <label>ID de Usuario</label><br>
        <input name="id"  value="{{ Auth()->User()->id }}" readonly> <br>

        <label>Titulo de la publicacion:</label><br>
         <input name="titulo"  placeholder="{{$clan->titulo}}" {{ $errors->has('titulo') ? 'has-error': ''}} ><br>
        {!!  $errors->first('titulo','<span class="help-block">:message</span>') !!}
        
        <label>Descripcion:</label><br>
        <input name="descripcion" {{ $errors->has('descripcion') ? 'has-error': ''}} value="{{ $clan->descripcion }}"><br>
        {!!  $errors->first('descripcion','<span class="help-block">:message</span>') !!}

        <label>Requisitos:</label><br>
        <input name="requisitos" {{ $errors->has('requisitos') ? 'has-error': ''}} value="{{ $clan->requisitos }}"><br>
        {!!  $errors->first('requisitos','<span class="help-block">:message</span>') !!}

        <label>Edad minima:</label><br>
        <input type = "number" name="edadminima" {{ $errors->has('edadminima') ? 'has-error': ''}} value="{{ $clan->edadminima }}" ><br>
        {!!  $errors->first('edadminima','<span class="help-block">:message</span>') !!}

        <label>Edad máxima:</label><br>
        <input type = "number" name="edadmaxima" {{ $errors->has('edadmaxima') ? 'has-error': ''}} value="{{ $clan->edadmaxima }}"><br>
        {!!  $errors->first('edadmaxima','<span class="help-block">:message</span>') !!}


        <label>Enlace Discord:</label><br>
        <input name="enlacediscord" placeholder="Aqui ingresa en enlace invitacion a tu Discord" value="{{ $clan->discord }}"><br>
        <label>Enlace Whatsapp:</label><br>
        <input name="enlacewhatsapp" placeholder="Aqui ingresa en enlace invitacion a tu grupo the WhatsApp" value="{{ $clan->whatsapp}}" ><br>
        <label>Selecciona los juegos en los cuales opera tu clan:</label><br>
        <select name= "juego[]" multiple><br>
        @foreach ($juegos as $juego )
            <option value="{{ collect($juego->id )}}">{{ $juego->nombre }}</option>
        @endforeach
        </select><br>
        <label>Selecciona los paises en los cuales opera tu clan:</label><br>
        <select name= "pais[]" multiple><br>
        @foreach ($pais as $pai )
            <option value="{{ $pai->id }}">{{ $pai->nombre }}</option>
        @endforeach
        </select><br>
        <label>Fecha:</label><br>
        <input type = 'date'  name="published_at" placeholder="" value="{{ $clan->published_at }}"><br>
        
        <input type = "submit" value="Actualizar">
        
        </form>
    </div>
</div>
@stop
