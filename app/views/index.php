<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=URL::to('public/css/bootstrap.min.css')?>">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=URL::to('public/css/slick-theme.css')?>" />

    <link rel="stylesheet" href="<?=URL::to('public/css/style.css')?>">

    <title>Hello, world!</title>
</head>

<body>
    <header class="container-fluid p-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 py-4 text-center text-md-left">
                    <img src="<?=URL::to('public/img/bbva_logo.webp')?>" alt="" height="40">
                </div>
                <div class="col-6"></div>
            </div>
        </div>
        <div class="single-item">

            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-3 offset-md-3 cont d-flex order-12 order-lg-1">
                        <div class="align-self-center py-5 py-lg-2">
                            <p class="titulo bl mb-0">Solicita tu</p>
                            <p class="titulo am">préstamo vehicular</p>
                            <div class="parrafo bl">Elige el auto perfecto para ti.</div>
                            <div class="cta"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 poly order-1 order-lg-12" style="background-image: url(<?=URL::to('public/img/prestamo.png')?>)">
                        <div class="poly-f"></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-3 offset-md-3 cont d-flex order-12 order-lg-1">
                        <div class="align-self-center py-5 py-lg-2">
                            <p class="titulo bl mb-0">Solicita tu</p>
                            <p class="titulo am">préstamo vehicular</p>
                            <div class="parrafo bl">Elige el auto perfecto para ti.</div>
                            <div class="cta"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 poly order-1 order-lg-12" style="background-image: url(<?=URL::to('public/img/prestamo.png')?>)">
                        <div class="poly-f"></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-3 offset-md-3 cont d-flex order-12 order-lg-1">
                        <div class="align-self-center py-5 py-lg-2">
                            <p class="titulo bl mb-0">Solicita tu</p>
                            <p class="titulo am">préstamo vehicular</p>
                            <div class="parrafo bl">Elige el auto perfecto para ti.</div>
                            <div class="cta"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 poly order-1 order-lg-12" style="background-image: url(<?=URL::to('public/img/prestamo.png')?>)">
                        <div class="poly-f"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="container calcula">
        <div class="row">

            <div class="col-12">

            </div>

            <div class="col-12 col-lg-5">
                <p class="titulo">Simula tu préstamo</p>
                <p class="parr">Completa la siguiente información para simular tu préstamo</p>

                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Moneda</label>
                        <div class="col-sm-8 d-flex justify-content-between">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="soles" value="option1">
                                <label class="form-check-label lbl" for="soles">Soles</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dolares" value="option2">
                                <label class="form-check-label lbl" for="dolares">Dólares</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Inicial</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="inputPassword">
                            <div class="input-group-prepend" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                <div class="input-group-text">?</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Préstamo</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="inputPassword">
                            <div class="input-group-prepend" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                <div class="input-group-text">?</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Mensualidades</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="inputPassword">
                            <div class="input-group-prepend" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                <div class="input-group-text">?</div>
                            </div>
                        </div>
                    </div>
                    <div class="buttom">
                        <button class="btn-g float-md-right">¡Calcula tu financiamiento!</button>
                    </div>
                </form>

            </div>
            <div class="col-12 col-lg-6 offset-md-1">
                <img src="<?=URL::to('public/img/llave-banner.png')?>" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Busca tu auto</h2>
            </div>
            <form action="" class="col-12 p-5 bgr mb-5 busca-home">

                <div class="col-12">

                    <div class="form-row">
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Marca</label>
                            <select class="form-control" name="marca" required onchange="load(this.value)">
								<option selected disabled hidden value="">Selecciona una marca</option>
								<?php foreach($data['marcas'] as $marca){ ?>
									<option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
								<?php } ?>
							</select>
                        </div>
                        <div class="form-group col-12 col-md-3" id="modelo">
                            <label for="inputState">Modelo</label>
                            <select id="inputState" class="form-control" disabled>
                                <option selected></option>
                                <option>Mercedes</option>
                                <option>Audi</option>
                            </select>
                        </div>
                        
                      
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Tipo</label>
                            <select id="inputState" class="form-control">
                                <option selected></option>
                                <option>Coupé</option>
                                <option>SUV</option>
                                <option>Station Wagon</option>
                                <option>Crossover</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Condición</label>
                            <select id="inputState" class="form-control">
                                <option selected></option>
                                <option>Nuevo</option>
                                <option>Usado</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="buttom">
                        <button class="btn-g">Buscar <img src="<?=URL::to('public/img/lupa.svg')?>" alt="" class="img-fluid ml-2"></button>
                    </div>
                </div>

            </form>
        </div>

    </section>

    <section class="container-fluid destacados ba1">
        <div class="container py-3">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="bl">Destacados</h2>
                </div>
                <div class="col-12 px-0">


                    <div class="d-flex flex-wrap flex-row">
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card py-5">
                                <img src="<?=URL::to('public/img/ad.png')?>" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                <div class="card-body ba3 bl">
                                    <h5 class="card-title mb-0">MAZDA</h5>
                                    <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                    <hr>
                                    <p class="card-text text-right"><small>desde US$ 22,790</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                <div class="card-body ba3 bl">
                                    <h5 class="card-title mb-0">MAZDA</h5>
                                    <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                    <hr>
                                    <p class="card-text text-right"><small>desde US$ 22,790</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                <div class="card-body ba3 bl">
                                    <h5 class="card-title mb-0">MAZDA</h5>
                                    <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                    <hr>
                                    <p class="card-text text-right"><small>desde US$ 22,790</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                <div class="card-body ba3 bl">
                                    <h5 class="card-title mb-0">MAZDA</h5>
                                    <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                    <hr>
                                    <p class="card-text text-right"><small>desde US$ 22,790</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                <div class="card-body ba3 bl">
                                    <h5 class="card-title mb-0">MAZDA</h5>
                                    <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                    <hr>
                                    <p class="card-text text-right"><small>desde US$ 22,790</small></p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"><img src="<?=URL::to('public/img/footer_01.jpg')?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid ba1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"><img src="<?=URL::to('public/img/footer_02.jpg')?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?=URL::to('public/js/jquery.slim.min.js')?>"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.single-item').slick({
            dots: true,
            arrows: true,
            infinite: true,
            speed: 300
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
   <script>
	function load(str){
	  var xmlhttp;
	  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  }
	  else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  document.getElementById("modelo").innerHTML=xmlhttp.responseText;
		}
	  }
	  xmlhttp.open("POST","<?=URL::to('admin/poblarmodelo')?>",true);
	  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	  xmlhttp.send("q="+str);
	}  
	</script>
</body>

</html>
