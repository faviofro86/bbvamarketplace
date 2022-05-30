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


    <header class="container-fluid p-0 pt-5">
        <?php include "navbar.php"; ?>
        <?php include "carrusel.php"; ?>
    </header>
    <?php include "calculadora.php"; ?>

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
                                <option selected>Nuevo</option>
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
                                    <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
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
                                    <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
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
                                    <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
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
                                    <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
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
                                    <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="legal p-3">
                        <p class="card-text text-right bl"><small>* sujeto a evaluación crediticia, cuotas estimadas con una inicial del 20% + cuotas dobles en julio y diciembre</small></p>
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
    <div class="btn-lead" data-toggle="modal" data-target="#staticBackdrop" style="">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path d="M492.438,397.75l-2.375-7.156c-5.625-16.719-24.063-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031
	L310,371.438c-82.453-22.281-147.109-86.938-169.359-169.375l22.688-22.688c12.438-12.438,18.656-36.656,14.031-53.656L160.266,63
	c-4.625-16.969-22.094-35.406-38.781-40.969l-7.156-2.406c-16.719-5.563-40.563,0.063-53,12.5L27.391,66.094
	c-6.063,6.031-9.938,23.281-9.938,23.344C16.266,197.188,58.516,301,134.734,377.219c76.031,76.031,179.453,118.219,286.891,117.313
	c0.563,0,18.313-3.813,24.375-9.844l33.938-33.938C492.375,438.313,498,414.469,492.438,397.75z" />
        </svg>
        <span>Te llamamos <br>para asesorarte</span>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bgr">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <div class="row bgr p-3 mt-0">
                        <div class="col-12">
                            <h4 class="titulo">¿Quieres que te ayudemos a elegir la mejor opción?</h4>
                            <p class="sub">Déjanos tus datos y te contactaremos</p>
                        </div>
                        <div class="col-12">
                            <form class="form-contacto">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="politica">
                                    <label class="form-check-label small" for="politica">Acepto las políticas y tratamiento de datos</label>
                                </div>
                                <button class="btn-s mb-4">
                                    Enviar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            speed: 300,
            autoplaySpeed: 2000
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $("#monton, #montor, #inicialn, #inicialr, #mesn, #mesr").on("input", function() {


            var monto = $("#monton").val();
            var inicial = $("#inicialn").val();
            var meses = $("#mesn").val();

            var inte = 14.99 / 100;

            var cuota = ((parseInt(monto) * inte) - parseInt(inicial)) / parseInt(meses);
            var tasa = parseInt(monto) * inte;
            var valor = parseInt(cuota) + parseInt(tasa);

            $(".cuota").text(cuota.toFixed(2));
            $(".tasa").text(tasa.toFixed(2));
            $(".total").text(valor.toFixed(2));

        });

    </script>
    <script>
        function load(str) {
            var xmlhttp;
            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("modelo").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("POST", "<?=URL::to('admin/poblarmodelo')?>", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("q=" + str);
        }

    </script>
</body>

</html>
