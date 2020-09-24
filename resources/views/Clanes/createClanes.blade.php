Crear Clan
<form action="{{url('/clanes')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="Codigo de Usuario">{{'Usuario'}}</label>
<!--<input type="text" name="uscodigo" id="uscodigo" value="">-->
<select name="uscodigo" id="uscodigo">
<option value="">--Seleccion el usuario--</option>
@foreach($usuarios as $usuario)
<option value="{{ $usuario['uscodigo']}}">{{$usuario['usnombre']}}</option>
@endforeach
</select>
<br/>

<label for="Titulo">{{'Titulo:'}}</label>
<input type="text" name="cltitulo" id="cltitulo" value="">
<br/>

<label for="Descripcion">{{'Descripcion:'}}</label>
<input type="text" name="cldescripcion" id="cldescripcion" value="">
<br/>

<label for="Requisitos">{{'Requisitos'}}</label>
<input type="text" name="clrequisitos" id="clrequisitos" value="">
<br/>

<label for="Edad Minima">{{'Edad minima'}}</label>
<input type="text" name="cledadminima" id="cledadminima" value="">
<br/>

<label for="Edad Maxima">{{'Edad maxima'}}</label>
<input type="text" name="cledadmaxima" id="cledadmaxima" value="">
<br/>

<label for="Pais">{{'Pais'}}</label>
<select name="clpais" id="clpais">
<option value="">--Seleccione pais-</option>
@foreach($paises as $pais)
<option value="{{ $pais['pais']}}">{{$pais['pais']}}</option>
@endforeach
</select>
<br/>

<label for="Juego">{{'Juego'}}</label>
<select name="cljuego" id="cljuego">
<option value="">--Seleccione juego-</option>
@foreach($juegos as $juego)
<option value="{{ $juego['juegos']}}">{{$juego['juegos']}}</option>
@endforeach
</select>
<br/>

<label for="Enlace de Discord">{{'Enlace de Discord:'}}</label>
<input type="text" name="clenlacediscord" id="clenlacediscord" value="">
<br/>

<label for="Enlace de Whatsapp">{{'Enlace de WhatsApp:'}}</label>
<input type="text" name="clenlacewhatsapp" id="clenlacewhatsapp" value="">
<br/>

<label for="Imagen">{{'Imagen:'}}</label>
<input type="file" name="climagen" id="climagen" value="">
<br/>

<input type="submit" value="Agregar">
<a href="{{url('clanes')}}">Regresar</a>
</form>