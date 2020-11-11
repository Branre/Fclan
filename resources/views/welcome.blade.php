
  
@extends('layout')

@section('content')

@if(isset($titulo))
	<h3> {{ $titulo}}</h3>
@endif

@foreach ($clans as $clan )
    
	<section class="posts container">
		<article class="post no-image">
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
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">{{ $clan->published_at->diffForHumans() }}</span>
					</div>
					<div class="tags container-flex">
						@foreach ($clan->juego as $juego )
						<span class="tag c-gray-1 text-capitalize">
						<a href="{{ route('juegos.show',$juego) }}">
						{{ $juego->nombre}}</a></span>
						@endforeach
					</div>
				</header>
				<h1>{{ $clan->titulo }}</h1>
				<div class="divider" value="{{ $clan->descripcion }}">{{ $clan->descripcion }}</div>
				<p>{{ $clan->extracto }}</p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="publicacion/{{ $clan->id }}" class="text-uppercase c-green">Leer más</a>
					</div>
					<div class="tags container-flex">
					@foreach ($clan->pais as $pais)
						<span class="tag c-gray-1 text-capitalize">
						<a href="{{ route('pais.show',$pais) }}">
						{{ $pais->nombre}}</a></span>
					@endforeach
					</div>
				</footer>
			</div>
		</article>



	</section><!-- fin del div.posts.container -->
    @endforeach

	{{ $clans->links() }}



@stop