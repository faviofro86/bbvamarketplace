<?php

class Masivo {

  public function listar() {
    Auth::validate([1,2]);
    $marcas = DB::getinstance()->table('marca')->get();
    $usuarios = DB::getinstance()->table('usuarios')->get();
    $marcas = self::map_arr($marcas);
    $usuarios = self::map_arr($usuarios);

    $masivo = DB::getinstance()->table('masivo')->get();
    View::render('admin\listamasivo', [ 'masivo'=>$masivo, 'marcas' => $marcas,'usuarios'=>$usuarios]);

  }

  public function map_arr($arr = []){
    $newarr = [];
    foreach($arr as $k => $v){
      $newarr[$v->id] = $v;
    }
    return $newarr;
  }

  public function registrar_form() {
    Auth::validate([1,2]);
		//$marcas_user = Auth::get_array('marcas');
    $marcas = Auth::get_array('marcas');
    if($marcas != [] ){
      $marca_db = DB::getInstance()->query('SELECT * FROM marca WHERE estado = 1 AND  id IN ('.join(',',$marcas).')')->results();
    }else{
      $marca_db = DB::getInstance()->query('SELECT * FROM marca WHERE estado = 1')->results();
    }
    //$marcas = DB::getinstance()->table('marca')->where('estado',1)->get();
    View::render('admin\masivo', [ 'marcas'=>$marca_db]);

  }

  public function carga_masiva() {
    set_time_limit(0);
    Auth::validate([1,2]);

    if(Input::exists() && Auth::validate()){

			$validate = new Validate();
			$validation = $validate->check(Input::all(),[
				'marca' => [
					'required' => true
				]
			]);  
			
			if($validation->passed()){

				$id = Encrypter::decode(Auth::get_array('id'));
        $dir = Path::to('public').DIRECTORY_SEPARATOR.'masivo'.DIRECTORY_SEPARATOR;
        $date = new \DateTime('now');
        $fileName = 'ArchivoCargado'.$date->format('Y-m-d--H-i-s');
        $extension = '.zip';
        $dirFile = $dir.$fileName.$extension;
        $zipFile = $_FILES["archivzip"];
        $total = 0;
        $registrados = 0;
        $dirFichas = Path::to('public').DIRECTORY_SEPARATOR.'fichas'.DIRECTORY_SEPARATOR;
        $estado = 0;

        if (move_uploaded_file($zipFile["tmp_name"], $dirFile)) {

          $zip = new ZipArchive;
          mkdir($dir.$fileName, 0777);
          if ($zip->open($dirFile) === TRUE) {
            $zip->extractTo($dir.$fileName);
            $zip->close();

            $objPHPExcel = PHPExcel_IOFactory::load($dir.$fileName.DIRECTORY_SEPARATOR.'Modelo masivo.xlsx');
            $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            $sheetData[1]['X'] = 'errores';
            $sheetData[1]['Y'] = 'Correcto';
            $response_file_excel[] = $sheetData[1];


            array_splice($sheetData, 0, 1);

            $total = count($sheetData);            
            
            foreach ($sheetData as $k => $v) {
              $errores = '';
              try {
                $categoria = DB::getinstance()->table('categorias')->where('estado',1)->where('categoria', $v["A"])->first();
                if($categoria == null){
                  $errores .= ';La categoría ingresada no fue encontrada';
                  //$categoria = DB::getinstance()->table('categorias')->insert(['categoria'=> $v["A"], 'estado'=>1]);
                }
                $modelo = DB::getinstance()->table('modelo')->where('estado',1)->where('modelo', $v["B"])->first();
                if($modelo == null){
                  $errores .= ';El modelo ingresado no fue encontrado';
                  //$modelo = DB::getinstance()->table('categorias')->insert(['modelo'=> $v["B"],'marca_id' => Input::get('marca'),'estado'=>1]);
                }

                if ($categoria != null && $modelo!= null){
                  $slug = $v["A"].'-'.$v["B"].'-'.$v["F"];
                  $slug = strtolower($slug);
                  $carpeta = $dir.$fileName.DIRECTORY_SEPARATOR.$slug.DIRECTORY_SEPARATOR;
                  $imagenDir = Path::to('public').DIRECTORY_SEPARATOR.'galeria'.DIRECTORY_SEPARATOR.'imgs'.DIRECTORY_SEPARATOR.$slug.DIRECTORY_SEPARATOR;
                  if (!file_exists($imagenDir)) {
                    mkdir($imagenDir, 0777, true);
                  }

                  $registro = [
                    'marca_id' => Input::get('marca'),
                    'modelo_id' => $modelo->id,
                    'categoria_id' => $categoria->id,
                    'condicion_id' => 1,
                    'precio' => $v['D'],
                    'img_banner' => $v['R'],
                    'ano_modelo' => $v['F'],
                    'ano_fabricacion' => $v['G'],
                    'puertas' => $v['I'],
                    'transmision' => $v['J'],
                    'traccion' => $v['K'],
                    'descripcion' => $v['L'],
                    'resumen' => $v['M'],
                    'fichatecnica' => $v['Q'],
                    'encuentralo' => $v['N'],
                    'estado' => $v['O'],
                    'slug' => $slug,
                    'cilindrada' => $v['H']
                  ];

                  copy($carpeta.$v['Q'], $dirFichas.$slug.'.pdf');

                  $auto = DB::getinstance()->table('vehiculos')->insert($registro);
                  $imagenes = ['R','S','T','U','V','W'];

                  for ($i=0; $i < count($imagenes); $i++) { 
                    if($v[$imagenes[$i]] != null){
                      
                      copy($carpeta.$v[$imagenes[$i]], $imagenDir.$v[$imagenes[$i]]);
                      
                      $imagen = [
                        'id_vehiculo' => $auto,
                        'imagen' => $v[$imagenes[$i]],
                        'estado' => 1
                      ];

                      $imagen_registro = DB::getinstance()->table('imagenes_vehiculos')->insert($imagen);

                    }
                  }

                  if($auto !== false){
                    $registrados ++;
                    $v['X'] = $errores;
                    $v['Y'] = 'Registrado Id: '.$auto;
                  }else{
                    $v['X'] = $errores;
                    $v['Y'] = '';
                  }
                }
                
              } catch (Exception  $ex) {
                $v['X'] = $errores.';'.$ex->getMessage();
                $v['Y'] = '';
              }
              $response_file_excel[] = $v;
            }

            $finalFile = new PHPExcel();
            $finalFile->getActiveSheet()->fromArray($response_file_excel,NULL,'A1');
            $file_name_final = $dir.$fileName.'.xlxs';
            // Save Excel 2007 file
            $objWriter = PHPExcel_IOFactory::createWriter($finalFile, 'Excel2007');
            $objWriter->save($file_name_final);

            $estado = 1;
          } else {
            $estado = 2;
          }


        } else {
          $estado = 3;
        }
        $dateNew = new \DateTime('now');
        $registro_masivo = DB::getInstance()->table('masivo')->insert([
          'id_marca' => Input::get('marca'),
          'id_usuario' => Encrypter::decode(Auth::get_array('id')),
          'registros_procesados' => $total,
          'registros_fallidos' => $total - $registrados,
          'registros_correctos' => $registrados,
          'archivo_detalle' => 'masivo'.DIRECTORY_SEPARATOR.$fileName.'.xlxs',
          'archivo_cargado' => 'masivo'.DIRECTORY_SEPARATOR.$fileName.$extension,
          'fecha_hora_inicio' => $date->format('Y-m-d H:i:s'),
          'fecha_hora_fin' => $dateNew->format('Y-m-d H:i:s'),
          'estado' => $estado
        ]);
        
        Redirect::to('admin/masivo_listar');
				//echo json_encode(["status"=> 200,"message"=>'Actualización completada']);
				
			}else{
				Redirect::to('admin/masivo_form');
			}

		}

  }

}
