<table class="table table-responsive  paper-shadow-top-z-2" style="border-radius: 7px;" >
	<tbody>
		<tr> <td class="text-center"><img src="{{$tema->poster}}" alt="{{$tema->titulo}}"> </td> </tr>
		<tr> <td>{{$tema->titulo}}</td> </tr>
		<tr> 			
			<td>
				@foreach($generos as $genero)
					<p>{{$genero->nombre}}</p>
				@endforeach
			</td> 
		</tr>
		<tr> <td><p>Descargas: {{$tema->descargas}}</p></td> </tr>
		<tr> <td>{{$tema->sexo }}</td> </tr>				
		<tr> <td>{{$tema->status}}</td> </tr>
	</tbody>
</table>
