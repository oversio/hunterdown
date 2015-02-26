@extends('layout.master')

@section('imports')
	@parent	
@stop

@section('titulo')
	HunterDown | Películas y Series
@stop

@section('contenido')	
	@parent		
	<div class="container" style="margin: 70px auto;">
		@foreach($temas as $tema)
			<div class="row featurette">
				@if($tema->categoria_id == 1)
					<div class="col-md-5">
				<img class="featurette-image img-responsive" src="{{$tema->poster}}" alt="{{$tema->titulo}}" style='height: 270px; width: 500px;'>
					</div>
					<div class="col-md-7">
						<h2 class="featurette-heading">{{$tema->titulo}} <span class="text-muted">The Movie</span></h2>
						<blockquote>
							<p>Sinopsis</p>
							<footer>{{$tema->sinopsis}}</footer>
						</blockquote>
					</div>
				@else
					<div class="col-md-7">
						<h2 class="featurette-heading">{{$tema->titulo}} <span class="text-muted">{{$tema->temporada}}ª Temporada, Capitulo xx</span></h2>
						<blockquote>
							<p>Sinopsis</p>
							<footer>{{$tema->sinopsis}}</footer>
						</blockquote>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive" src="{{$tema->poster}}" alt="{{$tema->titulo}}">
					</div>
				@endif
			</div>
			<hr class="featurette-divider">
		@endforeach
@stop