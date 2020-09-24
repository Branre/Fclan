Crear Usuarios
<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="CorreoElectronico">{{'Correo Electronico:'}}</label>
<input type="email" name="uscorreoelectronico" id="uscorreoelectronico" value="">
<br/>

<label for="Nombre">{{'Nombre:'}}</label>
<input type="text" name="usnombre" id="usnombre" value="">
<br/>

<label for="Password">{{'Contraseña:'}}</label>
<input type="password" name="uspassword" id="uspassword" value="">
<br/>

<label for="usfoto">{{'Foto:'}}</label>
<input type="file" name="usfoto" id="usfoto" value="">
<br/>

<input type="submit" value="Agregar">
<a href="{{url('usuarios')}}">Regresar</a>
</form>