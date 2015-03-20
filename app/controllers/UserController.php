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
    $user = New User;
    return View::make('user.create')->with(['user' => $user]); 
  }

  public function Store()
  {
    $user = New User();
    $fechaNac = Input::get('ano')."/".Input::get('mes')."/".Input::get('dia');

    $data = [
      'nombre'                => Input::get('nombre'),
      'usuario'               => Input::get('usuario'),
      'email'                 => Input::get('email'),
      //'email_confirmation'    => Input::get('email_confirmation'),
      'password'              => Input::get('password'),
      //'password_confirmation' => Input::get('password_confirmation'),
      'sexo'                  => Input::get('sexo'),
      'fecnac'                => $fechaNac
    ];

    if ($user->isValid($data)) {
      $user->fill($data);
      $user->save();

      if (Auth::check() && Auth::user()->tipouser_id == 1) {
        $users = User::paginate(10);
        return View::make('user.admin')->with(array('users' => $users, 'regis' => 1));
      }

      return View::make('user.login')->with(['regis' => 1])->withInput();
    } else {
      return Redirect::route('user.create')->withInput()->withErrors($user->errors);
    }
  }  
}