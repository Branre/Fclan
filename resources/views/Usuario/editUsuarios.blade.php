Editar Usuarios
<form action="{{url('/usuarios/'.$usuario->uscodigo)}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="CorreoElectronico">{{'Correo Electronico:'}}</label>
<input type="email" name="uscorreoelectronico" id="uscorreoelectronico" value="{{$usuario->uscorreoelectronico}}">
<br/>

<label for="Nombre">{{'Nombre:'}}</label>
<input type="text" name="usnombre" id="usnombre" value="{{$usuario->usnombre}}">
<br/>

<label for="Password">{{'Contraseña:'}}</label>
<input type="password" name="uspassword" id="uspassword" value="{{$usuario->uspassword}}">
<br/>

<label for="Foto">{{'Foto:'}}</label>
<br/>
<img src="{{asset('storage').'/'.$usuario->usfoto}}" alt="" width="200">
<input type="file" name="usfoto" id="usfoto" value="">
<br/>

<input type="submit" value="Editar">
</form>