
@extends('Admin.layout')
@section('header')
 <h1>
        Clanes
        <small>Crear clan</small>
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
        <h3>Crear una publicacion</h3>
        </div>
        <form method="POST" action="{{ route('admin.clan.store') }}">
        {{ csrf_field() }}
        <label>ID de Usuario</label><br>
        <input name="id"  value="{{ Auth()->User()->id }}" readonly> </input><br>

        <label>Titulo de la publicacion:</label><br>
        <input name="titulo" {{ $errors->has('titulo') ? 'has-error': ''}} ></input><br>
        {!!  $errors->first('titulo','<span class="help-block">:message</span>') !!}
        
        <label>Descripcion:</label><br>
        <textarea name="descripcion" {{ $errors->has('descripcion') ? 'has-error': ''}}></textarea><br>
        {!!  $errors->first('descripcion','<span class="help-block">:message</span>') !!}

        <label>Requisitos:</label><br>
        <input name="requisitos" ></input><br>
        <label>Edad minima:</label><br>
        <input type = "number" name="edadminima" ></input><br>
        <label>Edad máxima:</label><br>
        <input type = "number" name="edadmaxima" ></input><br>
        <label>Enlace Discord:</label><br>
        <input name="enlacediscord" placeholder="Aqui ingresa en enlace invitacion a tu Discord" ></input><br>
        <label>Enlace Whatsapp:</label><br>
        <input name="enlacewhatsapp" placeholder="Aqui ingresa en enlace invitacion a tu grupo the WhatsApp" ></input><br>
        <label>Selecciona los juegos en los cuales opera tu clan:</label><br>
        <select name= "juego[]" multiple><br>
        @foreach ($juegos as $juego )
            <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
        @endforeach
        </select><br>
        <label>Selecciona los paises en los cuales opera tu clan:</label><br>
        <select name= "pais[]" multiple><br>
        @foreach ($pais as $pai )
            <option value="{{ $pai->id }}">{{ $pai->nombre }}</option>
        @endforeach
        </select><br>
        <label>Fecha:</label><br>
        <input type = 'date'  name="published_at" placeholder="" ></input><br>
        <button type = 'submit'>Guardar</button>
        
        </form>
    </div>
</div>
@stop
