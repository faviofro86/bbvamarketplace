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

class Autos {
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
	
	public function detalle($slug=null) {
		if($slug!=null){
			$a = DB::getinstance()->query("SELECT v.*, m.marca, mo.modelo, c.categoria FROM vehiculos v JOIN marca m ON v.marca_id=m.id JOIN modelo mo ON v.modelo_id=mo.id JOIN categorias c ON v.categoria_id=c.id WHERE slug='$slug' ")->results();
			$a = json_decode(json_encode($a), true);
        	View::render('detalle', ['data'=>$a]);
		}else{
			View::render('detalle');
		}		
    }
}
