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
		$marcas = DB::getinstance()->table('marca')->where('estado',1)->get();
		$categorias = DB::getinstance()->table('categorias')->where('estado',1)->get();
		$condicion = DB::getinstance()->table('condicion')->get();
		//Debug::varDump($a);
        View::render('index', ['meta' => $meta,'data'=>$a,'marcas'=>$marcas,'categorias'=>$categorias,'condicion'=>$condicion]);
    }
	public function listado() {
        View::render('listado');
    }
	public function detalle() {
        View::render('detalle');
    }
	public function marcas() {
        View::render('marcas');
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
	
	public function auto($id) {
		if($id!=null){
			$a = DB::getinstance()->query("SELECT * FROM vehiculos WHERE id=".$id)->results();
			$a = json_decode(json_encode($a), true);
        	View::render('home/index', ['meta' => $meta, 'data'=>$a]);
		}else{
			View::render('home/index');
		}		
    }
}
