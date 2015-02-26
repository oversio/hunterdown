<?php
class TemaController extends BaseController
{

	public function Index()
	{ 
		$temas = Tema::paginate(10);
		return View::make('tema.admin')->with(['temas' => $temas, 'mens' => '', 'clase' => '']);
	}

	public function Create()
	{
		$categorias = Categoria::all()->lists('nombre', 'id');
		$generos = Genero::all(); /*->lists('nombre', 'id');*/

		$combcat = [0 => 'Seleccione...'] + $categorias;
		return View::make('tema.create')->with(['combcat' => $combcat, 'generos' => $generos]);
	}

	public function Show($id)
	{
		$tema 		= Tema::find($id);
		$generos 	= Tema::find($id)->generos;
		$user 		= Tema::find($id)->users;
		return View::make('tema.show')->with(['temas' => $tema, 'generos' => $generos, 'user' => $user]);
	}

	public function Store()
	{

		$tema = New Tema();
		$genSelected = Input::get('generos', false);	

		$tema->categoria_id = Input::get('categoria');
		$tema->user_id 		= Auth::user()->id;
		$tema->titulo		= Input::get('titulo');
		$tema->temporada	= Input::get('temporada');
		$tema->sinopsis		= Input::get('sinopsis');
		$tema->ano 			= Input::get('ano');
		$tema->fechahora 	= date("Y-m-d H:m:s");
		$tema->pagoficial 	= Input::get('pag');
		$tema->info 		= '';
		$tema->trailer		= Input::get('trailer');
		$tema->formato 		= Input::get('formato');
		$tema->descargas 	= 0;
		$tema->poster 		= "INS";

		$tema->save();


		$imagen		= Input::file('file');
		$size 		= $imagen->getSize();
		$tipo 		= $imagen->getClientOriginalExtension();
		$filename 	= 'TemaID_'.$tema->id.'.'.$tipo;
		$folder_destino = "img/posters";
		$successUp 	= $imagen->move('public/'.$folder_destino, $filename);

		if ($successUp) {			
			$rowsAfect = Tema::find($tema->id)->update(['poster' => $folder_destino.'/'.$filename]);
			$mens = "Tema <strong class='text-danger'>".$tema->titulo."</strong> guardado con exito!";
			$clase = 'alert-info';
		} else {
			$mens = "Tema <strong class='text-danger'>".$tema->titulo."</strong> guardado con exito pero ocurrio un error al guardar el poster";
			$clase = 'alert-warning';
		}

		$i = 0;
		foreach ($genSelected as $gentem) {
			$generotema = New Generotema();

			$generotema->genero_id = $genSelected[$i];
			$generotema->tema_id   = $tema->id;

			$generotema->save();
			$i++;
		}

		$temas = Tema::paginate(10);
		return View::make('tema.admin')->with(['temas' => $temas, 'mens' => $mens, 'clase' => $clase]);
	}
}