<?php
 
Route::get('/', function()
{
    return View::make('hello');
});
 
Route::get("upload", function(){
    return View::make("upload");
});
 
Route::post("upload", function(){
    $file = Input::file("photo");
    $dataUpload = array(
        "username"    =>    Input::get("username"),
        "email"        =>    Input::get("email"),
        "password"    =>    Input::get("password"),
        "photo"        =>    $file//campo foto para validar
    );
    
    $rules = array(
        'username'  => 'required|min:2|max:100',
        'email'     => 'required|email|min:6|max:100|unique:users',
        'password'  => 'required|confirmed|min:6|max:100',
        'photo'     => 'required'
    );
        
    $messages = array(
        'required'  => 'El campo :attribute es obligatorio.',
        'min'       => 'El campo :attribute no puede tener menos de :min carácteres.',
        'email'     => 'El campo :attribute debe ser un email válido.',
        'max'       => 'El campo :attribute no puede tener más de :min carácteres.',
        'unique'    => 'El email ingresado ya está registrado en el blog',
        'confirmed' => 'Los passwords no coinciden'
    );
    
    $validation = Validator::make(Input::all(), $rules, $messages);
         //si la validación falla redirigimos al formulario de registro con los errores
        //y con los campos que nos habia llenado el usuario    
    if ($validation->fails())
    {
        return Redirect::to('upload')->withErrors($validation)->withInput();
    }else{
        $user = new User(array(
            "username"    =>    Input::get("username"),
            "email"        =>    Input::get("email"),
            "password"    =>    Hash::make(Input::get("password")),
            "photo"        =>    Input::file("photo")->getClientOriginalName()//nombre original de la foto
            
        ));
        if($user->save()){
            //guardamos la imagen en public/imgs con el nombre original
            $file->move("imgs",$file->getClientOriginalName());
            //redirigimos con un mensaje flash
            return Redirect::to('upload')->with(array('confirm' => 'Te has registrado correctamente.'));
        } 
    }
});