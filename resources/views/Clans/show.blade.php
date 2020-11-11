
@if($clan->photos->count()==1)
			<figure><img src="{{ $clan->photos->first()->url }}" alt="" class="img-responsive"></figure>
		@elseif($clan->photos->count()>1)				
				<div class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 564 }'>
				@foreach ( $clan->photos as $photo)
				<figure class="grid-item grid-item--height2">
				<img src="{{ url($photo->url) }}" class="img-responsive" alt=""></figure>			
				@endforeach			
				</div>
		@endif
<h2>{{ $clan->titulo }}</h2>
<h5>Publicado: {{ $clan->published_at->diffForHumans() }}</h5>
<h4>Descripcion: {{ $clan->descripcion }} </h4>

<h4>Requisitos:{{ $clan->requisitos }}<h4>

<h4>Edad minima:{{ $clan->edadminima }}<h4>

<h4>Edad maxima:{{ $clan->edadminima }}<h4>

<h4>Juegos: 
@foreach ($clan->juego as $juego )
{{ $juego->nombre}}
@endforeach <h4>

<h4>Paises: 
@foreach ($clan->pais as $pais )
{{ $pais->nombre}}
@endforeach <h4>

<h4>Discord:{{ $clan->discord }}<h4>

<h4>WhatsApp:{{ $clan->whatsapp}}<h4>
