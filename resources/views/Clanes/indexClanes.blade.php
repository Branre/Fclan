Indicio (Despliegue de datos)
<a href="{{url('clanes/create')}}">Crear Clan</a>
<table class="thread-light">
    <thead>
        <tr>
            <th>clcodigo</th>
            <th>uscodigo</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Requisitos</th>
            <th>Edad Minima</th>
            <th>Edad Máxima</th>
            <th>Pais</th>
            <th>Juego</th>
            <th>Discord</th>
            <th>WhatsApp</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clanes as $clan)
        <tr>
           <td>{{$clan->clcodigo}}</td>
           <td>{{$clan->uscodigo}}</td>
           <td>{{$clan->cltitulo}}</td>
           <td>{{$clan->cldescripcion}}</td>
           <td>{{$clan->clrequisitos}}</td>
           <td>{{$clan->cledadminima}}</td>
           <td>{{$clan->cledadmaxima}}</td>
           <td>{{$clan->clpais}}</td>
           <td>{{$clan->cljuego}}</td>
           <td>{{$clan->clenlacediscord}}</td>
           <td>{{$clan->clenlacewhatsapp}}</td>

           <td>
           <img src="{{asset('storage').'/'.$clan->climagen}}" alt="" width="200">
               
               </td>
            <td>
           
            <a href="{{url('/clanes/'.$clan->clcodigo.'/edit')}}">Editar</a>
            |
                
            <form method="post" action = "{{url('/clanes/'.$clan->clcodigo) }}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button></form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>