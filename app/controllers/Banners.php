<?php

class Banners {
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
	public function banner_add(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'ubicacion' => ['required' =>true],
				'titulo' => ['required' =>true],
				'subtitulo' => ['required' =>true],
				'btn1' => ['required' =>true],
				'url1' => ['required' =>true],
				'btn2' => ['required' =>true],
				'url2' => ['required' =>true],
				'estado' => ['required' =>true],
			]);  
			if($validation->passed()){
				
				$dir = Path::to('public').DIRECTORY_SEPARATOR.'banners'.DIRECTORY_SEPARATOR;

				$banner = $_FILES["banner"];
				$target = $dir . basename($banner["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));

				if (file_exists($target)) {
					$uploadOk = 0;
				}

				if ($banner["size"] > 500000) {
					$uploadOk = 0;
				}

				if($imageFileType != "jpg") {
					$uploadOk = 0;
				}

				if ($uploadOk == 0) {
					echo "El archivo no se subio.";
				} else {
					if (move_uploaded_file($banner["tmp_name"], $target)) {
						//echo "El archivo ". htmlspecialchars( basename( $_FILES["imgingr"]["name"])). " ha sido subido.";
					} else {
						echo "Hubo un error subiendo el archivo.";
					}
				}

				
				$a = DB::getinstance()->query("INSERT INTO banners(imagen, titulo, subtitulo, btn1, url1, btn2, url2, ubicacion, estado) VALUES (?,?,?,?,?,?,?,?,?)", [$_FILES['banner']["name"], Input::get('titulo'), Input::get('subtitulo'), Input::get('btn1'), Input::get('url1'), Input::get('btn2'), Input::get('url2'), Input::get('ubicacion'), Input::get('estado')])->results();
												
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
			
			$b = $a[0]["id"];
			
			$c = DB::getinstance()->query("SELECT imagen from imagenes_vehiculos WHERE id_vehiculo ='$b'")->results();
			$c = json_decode(json_encode($c), true);
			//echo var_dump($c);
			
			DB::getinstance()->table('vehiculos')->where('slug',$slug)->update(['numvisitas'=>($a[0]["numvisitas"]+1)]);
        	View::render('detalle', ['data'=>$a, 'imgs'=>$c]);
		}else{
			View::render('detalle');
		}		
    }
	
	public function banner_form(){
		$ubicaciones = DB::getinstance()->table('ubicaciones')->where('estado',1)->get();
		View::render('Admin/banner', ['ubicaciones'=>$ubicaciones]);
	}
	
	public function poblarmodelo(){
		$modelos = DB::getinstance()->table('modelo')->where('marca_id',Input::get('q'))->orderBy("modelo","asc")->get();
		echo "<label class='form-label'>Modelo</label>
		<select class='form-control' name='modelo' required>
        <option value='' selected disabled hidden>Selecciona un modelo</option>";
		foreach($modelos as $modelo){
			echo "<option value='$modelo->id'>$modelo->modelo</option>";
		}
        echo "</select>";
	}
	
	public function marca_form(){
		$marcas = DB::getinstance()->table('marca')->where('estado',1)->get();
		$categorias = DB::getinstance()->table('categorias')->where('estado',1)->get();
		$condicion = DB::getinstance()->table('condicion')->get();
		View::render('Admin/marcanew', ['marcas'=>$marcas,'categorias'=>$categorias,'condicion'=>$condicion]);
	}
	
	public function marca_registrar(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'marca' => ['required' =>true],
				'estado' => ['required' =>true],
			]);  
			if($validation->passed()){
								
				$a = DB::getinstance()->query("INSERT INTO marca(marca, estado) VALUES (?,?)", [Input::get('marca'), Input::get('estado')])->query("SELECT LAST_INSERT_ID()")->results();
				
				$b = json_decode(json_encode($a), true);
				$c = $b[0]["LAST_INSERT_ID()"];

			}else{
				$p = $validation->errors();
				$p = json_encode($a);
				echo $p;
			}
			
		}
	}
	
	public function modelo_form(){
		$marcas = DB::getinstance()->table('marca')->where('estado',1)->get();
		$condicion = DB::getinstance()->table('condicion')->get();
		View::render('Admin/modelonew', ['marcas'=>$marcas]);
	}
	
	public function modelo_registrar(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'marca' => ['required' =>true],
				'estado' => ['required' =>true],
			]);  
			if($validation->passed()){
								
				$a = DB::getinstance()->query("INSERT INTO modelo(marca_id, modelo, estado) VALUES (?,?,?)", [Input::get('marca'), Input::get('modelo'), Input::get('estado')])->query("SELECT LAST_INSERT_ID()")->results();
				
				$b = json_decode(json_encode($a), true);
				$c = $b[0]["LAST_INSERT_ID()"];

			}else{
				$p = $validation->errors();
				$p = json_encode($a);
				echo $p;
			}
			
		}
	}
	

}
