<?php

class Usuario {
    public function registrar_form() {
        View::render('usuario_registrar');
    }
	
	public function registrar(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'nombre' => [
					'required' =>true
				],
				'correo' => [
					'required' =>true,
					'unique' => [
						'tabla'  => 'usuarios',
						'campo' => 'correo'
					],
				],	
				'pass' => [
					'required' =>true,
				],
				'verificacion' => [
					'required' =>true,
				]
			]);  
			
			if($validation->passed()){

				$datos_de_registro = array(
					"nombres" => Input::get('nombre'),
					"apellidos" => '',
					"dni" => '',
					"telefono" => '',
					"correo" => Input::get('correo'),
					"password" => Encrypter::encode(Input::get('pass')),
					"estado" => 1,
					"tipousuario" => 1,
				);

				$respuesta = DB::getinstance()->table('usuarios')->insert($datos_de_registro);
				if($respuesta === false){
					echo json_encode(["status"=> 400,"message"=>"Error al intentar registrar, intentelo nuevamente"]);
				}else{
					$user = DB::getinstance()->table('usuarios')->where('id',$respuesta)->first();
					Session::put(Config::get('session/session_name'), ['id'=>Encrypter::encode($user->id),'nombre'=>$user->nombre,'correo'=>$user->correo]);
                	Session::put('isLoggedIn', true);
					echo json_encode(["status"=> 200,"message"=>"Registro exitoso"]);
				}
			}else{
				echo json_encode(["status"=> 400,"message"=>"Error al enviar los campos","errores"=>$validation->errors()]);
			}
			
		}
	}

	public function login_view(){
		View::render('usuario_iniciar');
	}

	public function login(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'correo' => [
					'required' =>true
				],
				'pass' => [
					'required' =>true,
				]
			]);  
			

			if($validation->passed()){
				if(Auth::login(Input::get('correo'),Encrypter::encode(Input::get('pass')))){
					
					echo json_encode(["status"=> 200,"message"=>'Credenciales válidas']);
				}else{
					echo json_encode(["status"=> 400,"message"=>'Usuario y/o contraseña inválidos']);
				}
			}else{
				echo json_encode(["status"=> 400,"errores"=>$validation->errors()]);
			}
			
		}
	}

	
	public function editar_form() {
		Auth::validate();
		$id = Encrypter::decode(Auth::get_array('id'));
		$data = DB::getinstance()->table('usuarios')->where('id',$id)->first();
        View::render('usuario_editar',['usuario'=>$data]);
    }


	public function editar(){
		if(Input::exists() && Auth::validate()){

			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'nombre' => [
					'required' => true
				],
				'apellidos' => [
					'required' => true
				],
				'dni' => [
					'required' => true
				],
				'telefono' => [
					'required' => true
				]
			]);  
			
			if($validation->passed()){

				$datos_de_update = array(
					"nombres" => Input::get('nombre'),
					"apellidos" => Input::get('apellidos'),
					"dni" => Input::get('dni'),
					"telefono" => Input::get('telefono')
				);


				$id = Encrypter::decode(Auth::get_array('id'));


				$respuesta = DB::getinstance()->table('usuarios')->where('id',$id)->update($datos_de_update);
				echo json_encode(["status"=> 200,"message"=>'Actualización completada']);
				
			}else{
				echo json_encode(["status"=> 400,"errores"=>$validation->errors()]);
			}

		}
	}

	public function cambiar_contraseña(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'correo' => [
					'required' =>true
				],
				'pass' => [
					'required' =>true,
				]
			]);
			
			
			if($validation->passed()){
				if(Auth::login(Input::get('correo'),Input::get('pass'))){
					echo json_encode(["status"=> 200,"message"=>'Credenciales válidas']);
				}else{
					echo json_encode(["status"=> 400,"message"=>'Usuario y/o contraseña inválidos']);
				}
			}else{
				echo json_encode(["status"=> 400,"errores"=>$validation->errors()]);
			}

		}
	}
	
}
