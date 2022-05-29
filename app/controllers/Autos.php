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
	public function auto_registrar(){
		if(Input::exists()){
			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'marca' => ['required' =>true],
				'modelo' => ['required' =>true],
				'categoria' => ['required' =>true],
				'condicion' => ['required' =>true],
				'precio' => ['required' =>true],
				//'banner' => ['required' =>true],
				'ano_modelo' => ['required' =>true],
				'ano_fabricacion' => ['required' =>true],
				'cilindrada' => ['required' =>true],
				'puertas' => ['required' =>true],
				'transmision' => ['required' =>true],
				'traccion' => ['required' =>true],
				'descripcion' => ['required' =>true],
				'resumen' => ['required' =>true],
				//'ficha' => ['required' =>true],
				'encuentralo' => ['required' =>true],
				'estado' => ['required' =>true],
				'slug' => ['required' =>true],
				'cantidad' => ['required' =>true],
			]);  
			if($validation->passed()){
				
				$dirpdf = Path::to('public').DIRECTORY_SEPARATOR.'fichas'.DIRECTORY_SEPARATOR;


				$ficha = $_FILES["ficha"];
				$target_pdf = $dirpdf . basename($ficha["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_pdf,PATHINFO_EXTENSION));

				if (file_exists($target_pdf)) {
					$uploadOk = 0;
				}

				if ($ficha["size"] > 500000) {
					$uploadOk = 0;
				}

				if($imageFileType != "pdf") {
					$uploadOk = 0;
				}

				if ($uploadOk == 0) {
					echo "El archivo no se subio.";
				} else {
					if (move_uploaded_file($ficha["tmp_name"], $target_pdf)) {
						//echo "El archivo ". htmlspecialchars( basename( $_FILES["imgingr"]["name"])). " ha sido subido.";
					} else {
						echo "Hubo un error subiendo el archivo.";
					}
				}

								
				$targetdir = Path::to('public').DIRECTORY_SEPARATOR.'galeria'.DIRECTORY_SEPARATOR.'imgs'.DIRECTORY_SEPARATOR.Input::get('slug').DIRECTORY_SEPARATOR;
				if (!file_exists($targetdir)) {
					mkdir($targetdir, 0777, true);
				}
				
				$a = DB::getinstance()->query("INSERT INTO vehiculos(marca_id, modelo_id, categoria_id, condicion_id, precio, img_banner, ano_modelo, ano_fabricacion, puertas, transmision, traccion, descripcion, resumen, fichatecnica, encuentralo, estado, slug, cilindrada) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [Input::get('marca'), Input::get('modelo'), Input::get('categoria'), Input::get('condicion'), Input::get('precio'), $_FILES['banner1']["name"], Input::get('ano_modelo'), Input::get('ano_fabricacion'), Input::get('puertas'), Input::get('transmision'), Input::get('traccion'), Input::get('descripcion'), Input::get('resumen'), $_FILES['ficha']["name"], Input::get('encuentralo'), Input::get('estado'), Input::get('slug'), Input::get('cilindrada')])->query("SELECT LAST_INSERT_ID()")->results();
				
				
				$b = json_decode(json_encode($a), true);
				$c = $b[0]["LAST_INSERT_ID()"];
				
    			//$lastId = $stmt->fetchColumn();
				
				$M = Input::get('cantidad');
				
				for($i=0; $i < $M; $i++){
					$h = $i + 1;
					if(isset( $_FILES["banner".$h] )){
						$imagen = $_FILES["banner".$h];
					}
					$target_file = $targetdir . basename($imagen["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					if (file_exists($target_file)) {
						$uploadOk = 0;
					}

					if ($imagen["size"] > 150000) {
						$uploadOk = 0;
					}

					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
						$uploadOk = 0;
					}

					if ($uploadOk == 0) {
						echo "El archivo no se subio.";
					} else {
						if (move_uploaded_file($imagen["tmp_name"], $target_file)) {
							//echo "El archivo ". htmlspecialchars( basename( $_FILES["imgingr"]["name"])). " ha sido subido.";
						} else {
							echo "Hubo un error subiendo el archivo.";
						}
					}
					
					$b = DB::getinstance()->query("INSERT INTO `imagenes_vehiculos`(`id_vehiculo`,`imagen`,`estado`) VALUES (?,?,?)", [$c, $imagen["name"], 1 ])->results();

				}
				
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
	
	public function auto_form(){
		$marcas = DB::getinstance()->table('marca')->where('estado',1)->get();
		$categorias = DB::getinstance()->table('categorias')->where('estado',1)->get();
		$condicion = DB::getinstance()->table('condicion')->get();
		View::render('Admin/registro', ['marcas'=>$marcas,'categorias'=>$categorias,'condicion'=>$condicion]);
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
