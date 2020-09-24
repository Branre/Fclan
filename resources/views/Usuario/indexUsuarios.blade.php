Indicio (Despliegue de datos)
<a href="{{url('usuarios/create')}}">Crear Usuario</a>
<a href="{{url('clanes')}}">Administrar Clanes</a>
<table class="thread-light">
    <thead>
        <tr>
            <th>uscodigo</th>
            <th>Correo Electronico</th>
            <th>Nombre</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
           <td>{{$usuario->uscodigo}}</td>
           <td>{{$usuario->uscorreoelectronico}}</td>
           <td>{{$usuario->usnombre}}</td>
           <td>
               <img src="{{asset('storage').'/'.$usuario->usfoto}}" alt="" width="200">
               
               </td>
            <td>
            <a href="{{url('/usuarios/'.$usuario->uscodigo.'/edit')}}">Editar</a>
            |
                
            <form method="post" action = "{{url('/usuarios/'.$usuario->uscodigo) }}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button></form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>