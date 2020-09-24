Editar Clanes
<form action="{{url('/clanes/'.$clanes->clcodigo)}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="Codigo de Usuario">{{'Usuario: '}}</label>
<!--<input type="text" name="uscodigo" id="uscodigo" value="">-->
<select name="uscodigo" id="uscodigo">
<option value="{{$clanes->uscodigo}}" >---Selecionar Usuario---</option>
@foreach($usuarios as $usuario)
<option value="{{ $usuario['uscodigo']}}">{{$usuario['usnombre']}}</option>
@endforeach
</select>
<br/>

<label for="Titulo">{{'Titulo:'}}</label>
<input type="text" name="cltitulo" id="cltitulo" value="{{$clanes->cltitulo}}">
<br/>

<label for="Descripcion">{{'Descripcion:'}}</label>
<input type="text" name="cldescripcion" id="cldescripcion" value="{{$clanes->cldescripcion}}">
<br/>

<label for="Requisitos">{{'Requisitos'}}</label>
<input type="text" name="clrequisitos" id="clrequisitos" value="{{$clanes->clrequisitos}}">
<br/>

<label for="Edad Minima">{{'Edad minima'}}</label>
<input type="text" name="cledadminima" id="cledadminima" value="{{$clanes->cledadminima}}">
<br/>

<label for="Edad Maxima">{{'Edad maxima'}}</label>
<input type="text" name="cledadmaxima" id="cledadmaxima" value="{{$clanes->cledadmaxima}}">
<br/>

<label for="Pais">{{'Pais'}}</label>
<select name="clpais" id="clpais">
<option value="{{$clanes->clpais}}">{{$clanes->clpais}}</option>
@foreach($paises as $pais)
<option value="{{ $pais['pais']}}">{{$pais['pais']}}</option>
@endforeach
</select>
<br/>

<label for="Juego">{{'Juego'}}</label>
<select name="cljuego" id="cljuego">
<option value="{{$clanes->cljuego}}">{{$clanes->cljuego}}</option>
@foreach($juegos as $juego)
<option value="{{ $juego['juegos']}}">{{$juego['juegos']}}</option>
@endforeach
</select>
<br/>

<label for="Enlace de Discord">{{'Enlace de Discord:'}}</label>
<input type="text" name="clenlacediscord" id="clenlacediscord" value="{{$clanes->clenlacediscord}}">
<br/>

<label for="Enlace de Whatsapp">{{'Enlace de WhatsApp:'}}</label>
<input type="text" name="clenlacewhatsapp" id="clenlacewhatsapp" value="{{$clanes->clenlacewhatsapp}}">
<br/>

<label for="Imagen">{{'Imagen:'}}</label>
<img src="{{asset('storage').'/'.$clanes->climagen}}" alt="" width="200">
<input type="file" name="climagen" id="climagen" value="">
<br/>

<input type="submit" value="Editar">
<a href="{{url('clanes')}}">Regresar</a>

</form>