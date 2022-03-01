<?php

/*
  |--------------------------------------------------------------------------
  | Ejemplo de Controlador - Controlador Principal Home
  |--------------------------------------------------------------------------
  |
  | Este controlador es el controlador por defecto al igual que, su método index.
  | El Controlador Home y el método index son obligatorios en la Aplicación, y este
  | último, es obligatorio en todos los controladores, debido a que se ejecutara por
  | defecto si no se le coloca otra función que se declare
  |
 */

class Home {
    public function index() {
        $meta = array(
            'title' => 'Home',
            'description' => 'Un Framework para todos',
            'keywords' => 'php, framework, mvc, orm,eloquent,laravel',
            'author' => 'Snipe Framework Group.',
            'robots' => 'All'
        );
		$a = DB::getinstance()->query("SELECT * from vehiculos")->results();
		$a = json_decode(json_encode($a), true);
		//Debug::varDump($a);
        View::render('home/index', ['meta' => $meta, 'data'=>$a]);
    }
	public function index2() {
        $meta = array(
            'title' => 'Home',
            'description' => 'Un Framework para todos',
            'keywords' => 'php, framework, mvc, orm,eloquent,laravel',
            'author' => 'Snipe Framework Group.',
            'robots' => 'All'
        );
        View::render('home/index2', ['meta' => $meta]);
    }
	public function insertar(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'dato1' => [
					'required' =>true
				],
				'dato2' => [
					'required' =>true,
				],
			]);  
			if($validation->passed()){
				$a = DB::getinstance()->query("INSERT INTO marca(marca, estado) VALUES (?,?)", [Input::get('dato1'), Input::get('dato2')])->results();
				echo "OK";
			}else{
				$p = $validation->errors();
				$p = json_encode($a);
				echo $p;
			}
			
		}
	}
}
