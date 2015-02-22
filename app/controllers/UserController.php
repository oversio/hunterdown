<?php
class UserController extends BaseController
{

  public function Index()
  {
    $users = User::paginate(10);
    return View::make('user.admin')->with(array('users' => $users, 'regis' => 0));
  }

  public function Show($id)
  {
    $user = User::find($id);
    return View::make('user.show')->with('user', $user);
  }

  public function Create()
  { 
    return View::make('user.create'); 
  }

  public function Store()
  {
    $user = New User();
    $fechaNac = Input::get('ano')."/".Input::get('mes')."/".Input::get('dia');

    $user->nombre    = Input::get('nombre');
    $user->usuario   = Input::get('usuario');
    $user->email     = Input::get('email');
    $user->password  = Input::get('passwd');
    $user->sexo      = Input::get('sexo');
    $user->fecnac    = $fechaNac;

    $user->save();

    if (Auth::check() && Auth::user()->tipouser_id == 1) {
      $users = User::paginate(10);
      return View::make('user.admin')->with(array('users' => $users, 'regis' => 1));
    }

    return View::make('user.login')->with(['regis' => 1]);
  }  
  
}