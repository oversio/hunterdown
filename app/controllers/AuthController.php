<?php

class AuthController extends BaseController {

    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('user.login')->with(['regis' => 0]);
    }

    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'email' => Input::get('usermail'),
            'password' => Input::get('passwd')
        ];

        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember')))
        {
            // Si los datos son correctos mostramos la página de inicio
            return Redirect::intended('/');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with(['error_message', 'Datos de autentificación invalidos', 'regis' => 0])->withInput();
    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with(['error_message', 'Sesión Finalizada', 'regis' => 0])->withInput();
    }

}