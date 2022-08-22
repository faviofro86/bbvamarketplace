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
				'dni' => [
					'required' => true,
					'max' => 8,
					'min' => 8,
					'unique' => [
						'tabla'  => 'usuarios',
						'campo' => 'dni'
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
					"dni" => Input::get('dni'),
					"telefono" => '',
					"correo" => Input::get('correo'),
					"password" => Encrypter::encode(Input::get('pass')),
					"estado" => 1,
					"tipousuario" => 3,
				);

				$respuesta = DB::getinstance()->table('usuarios')->insert($datos_de_registro);
				if($respuesta === false){
					echo json_encode(["status"=> 400,"message"=>"Error al intentar registrar, intentelo nuevamente"]);
				}else{
					$user = DB::getinstance()->table('usuarios')->where('id',$respuesta)->first();
					Session::put(Config::get('session/session_name'), ['id'=>Encrypter::encode($user->id),'nombre'=>$user->nombres,'correo'=>$user->correo]);
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
					
					echo json_encode(["status"=> 200,"message"=>'Credenciales válidas',"tipo"=>Auth::get_array('tipo')]);
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
    
    public function admin_form() {
        Auth::validate([1]);
        View::render('Admin/user_form');
    }
    
    public function admin_reg(){
        Auth::validate([2]);
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
				'dni' => [
					'required' => true,
					'max' => 8,
					'min' => 8,
					'unique' => [
						'tabla'  => 'usuarios',
						'campo' => 'dni'
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
					"dni" => Input::get('dni'),
					"telefono" => '',
					"correo" => Input::get('correo'),
					"password" => Encrypter::encode(Input::get('pass')),
					"estado" => 1,
					"tipousuario" => Input::get('tipo'),
				);

				$respuesta = DB::getinstance()->table('usuarios')->insert($datos_de_registro);
				if($respuesta === false){
					echo json_encode(["status"=> 400,"message"=>"Error al intentar registrar, intentelo nuevamente"]);
				}else{
					$user = DB::getinstance()->table('usuarios')->where('id',$respuesta)->first();
					echo json_encode(["status"=> 200,"message"=>"Registro exitoso"]);
				}
			}else{
				echo json_encode(["status"=> 400,"message"=>"Error al enviar los campos","errores"=>$validation->errors()]);
			}
			
		}
	}
    
    public function usuarios_listar(){
		Auth::validate([1]);
		$usuarios = DB::getinstance()->table('usuarios')->get();
		View::render('Admin/listarusuarios', ['usuarios'=>$usuarios]);
	}
    
    public function enableusuario(){
		Auth::validate([1]);
		$a=DB::getinstance()->query("UPDATE usuarios SET estado = 1 WHERE id =".Input::get('id'))->results();

		$usuarios = DB::getinstance()->table('usuarios')->get();
        Redirect::to('admin/usuario_listar', ['modelo'=>$modelo]);
		//View::render('Admin/listarmodelos', ['modelo'=>$modelo]);
	}
    
    public function disableusuario(){
		Auth::validate([1]);
		$a=DB::getinstance()->query("UPDATE usuarios SET estado = 0 WHERE id =".Input::get('id'))->results();

		$usuarios = DB::getinstance()->table('usuarios')->get();
        Redirect::to('admin/usuario_listar', ['modelo'=>$modelo]);
		//View::render('Admin/listarmodelos', ['modelo'=>$modelo]);
	}
    
    public function usuario_marcas(){
		Auth::validate([1]);
        
        $usuarios = DB::getinstance()->query("SELECT * FROM usuarios WHERE id=".Input::get('id'))->results();
        $usuarios = json_decode(json_encode($usuarios), true);
        
        $marca = DB::getinstance()->query("SELECT p.*, m.marca  FROM permisos p JOIN marca m ON p.id_marca=m.id WHERE id_usuario=".Input::get('id'))->results();
        $marca = json_decode(json_encode($marca), true);
        
        $marcas = DB::getinstance()->query("SELECT * FROM marca WHERE estado = 1")->results();
        
		View::render('Admin/usuariomarcas', ['usuarios'=>$usuarios, 'marca'=>$marca, 'marcas'=>$marcas]);
	}
    
    public function admin_marca_add(){
        Auth::validate([1]);
        $b = DB::getinstance()->query("INSERT INTO `permisos`(`id_marca`,`id_usuario`) VALUES (?,?)", [Input::get('marca'),Input::get('usuario')])->results();
        
        Redirect::to('admin/usuario_marcas?id='.Input::get('usuario'));
    }
    
    public function permisos_eliminar(){
        Auth::validate([1]);
        $b = DB::getinstance()->query("DELETE FROM permisos WHERE id_usuario =".Input::get('id')." AND id_marca = ".Input::get('marca'))->results();
        
        Redirect::to('admin/usuario_marcas?id='.Input::get('id'));
    }
	
}
