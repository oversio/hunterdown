<table class="table table-responsive  paper-shadow-top-z-2" style="border-radius: 7px;" >
	<tbody>
		<tr> <td class="col-md-4 text-right"><strong>Nombre:</strong></td>  	 <td class="text-lef">{{$user->nombre}}</td> </tr>
		<tr> <td class="col-md-4 text-right"><strong>Usuario:</strong></td> 	 <td>{{$user->usuario}}</td> </tr>
		<tr> <td class="col-md-4 text-right"><strong>Correo:</strong></td> 		 <td>{{$user->email}}</td> </tr>
		<tr> <td class="col-md-4 text-right"><strong>Cumpleaños:</strong></td> 	 <td>{{$user->fecnac}}</td> </tr>
		<tr> <td class="col-md-4 text-right"><strong>Sexo:</strong></td> 		 <td>{{$user->sexo }}</td> </tr>				
		<tr> <td class="col-md-4 text-right"><strong>Status:</strong></td> 		 <td>{{($user->status)?"Activo":"Inactivo";}}</td> </tr>
	</tbody>
</table>
