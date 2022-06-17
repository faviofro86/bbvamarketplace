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

    <title>BBVA Marketplace - <?= $data['data'][0]['modelo']; ?></title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <header class="container-fluid p-0">
        <?php include "carrusel.php"; ?>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 section">

                <div class="row det-header">
                    <div class="col-12">
                        <h1 class="titulo"><?= $data['data'][0]['marca']; ?></h1>
                        <h3 class="modelo"><?= $data['data'][0]['modelo']; ?></h3>
                        <hr>
                        <p class="precio text-right m-0">Desde US$ <?= number_format($data['data'][0]['precio']); ?></p>
                        <p class="text-right">Cuota desde US$ 610.00</p>
                        <hr>
                        <p class="version text-right">
                            <?= $data['data'][0]['resumen']; ?>
                        </p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="slider slider-for">
                            <?php foreach($data['imgs'] as $img){ ?>
                            <div>
                                <img src="<?=URL::to('public/galeria/imgs/'.$data['data'][0]['slug'].'/'.$img['imagen']); ?>" alt="" class="img-fluid">
                            </div>
                            <?php } ?>
                        </div>

                        <div class="buttom my-4">
                            <button class="btn-g"><img src="<?=URL::to('public/img/corazon.svg')?>" alt=""> Agregar a mis favoritos</button>
                        </div>

                        <div class="slider slider-nav">
                            <?php foreach($data['imgs'] as $img){ ?>
                            <div>
                                <img src="<?=URL::to('public/galeria/imgs/'.$data['data'][0]['slug'].'/'.$img['imagen']); ?>" alt="" class="img-fluid">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <div class="d-none d-lg-block">
                    <div class="row d-flex align-items-center bl ba3 px-4 py-2 mt-5 credito">
                        <div class="col-3">
                            <span class="titulo-credito d-block">
                                Llévalo
                            </span>
                            <span class="titulo-credito">
                                a crédito
                            </span>
                        </div>
                        <div class="col-3 text-center">
                            <span class="small d-block">&nbsp;</span>
                            <span class="monto d-block">US$ 1600</span>
                            <span class="cuota">36 cuotas</span>
                        </div>
                        <div class="col-3 text-center">
                            <span class="small d-block">Más solicitado</span>
                            <span class="monto d-block">US$ 1600</span>
                            <span class="cuota">36 cuotas</span>
                        </div>
                        <div class="col-3 text-center">
                            <span class="small d-block">&nbsp;</span>
                            <span class="monto d-block">US$ 1600</span>
                            <span class="cuota">36 cuotas</span>
                        </div>
                        <div class="col-12 text-center">
                            <hr class="my-2">
                            <span>Con 10% de inicial</span>
                        </div>
                    </div>
                </div>


                <div class="d-md-none">
                    <div class="row d-flex align-items-center bl ba3 px-2 py-5 mt-5 credito">
                        <div class="col-6">
                            <div class="col-12 p-0">
                                <span class="titulo-credito d-block">
                                    Llévalo
                                </span>
                                <span class="titulo-credito">
                                    a crédito
                                </span>
                            </div>
                            <div class="col-12 p-0">
                                <span>Con 10% de inicial</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 text-center">
                                <span class="monto d-block">US$ 1600</span>
                                <span class="cuota">36 cuotas</span>
                            </div>
                            <div class="col-12 text-center my-4">
                                <span class="small d-block">Más solicitado</span>
                                <span class="monto d-block">US$ 1600</span>
                                <span class="cuota">36 cuotas</span>
                            </div>
                            <div class="col-12 text-center">
                                <span class="monto d-block">US$ 1600</span>
                                <span class="cuota">36 cuotas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 lista">
                    <div class="col-12">
                        <h4 class="modelo">Características</h4>
                        <hr>
                    </div>

                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Marca</strong>
                            <?= $data['data'][0]['marca']; ?>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Modelo</strong>
                            <?= $data['data'][0]['modelo']; ?>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Categoría</strong>
                            <?= $data['data'][0]['categoria']; ?>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Año de fabricación </strong>
                            <?= $data['data'][0]['ano_fabricacion']; ?>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Transmisión </strong>
                            <?= $data['data'][0]['transmision']; ?>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 caract">
                        <p>
                            <strong>Motor </strong>
                            <?= $data['data'][0]['cilindrada']; ?> cc
                        </p>
                    </div>

                </div>

                <div class="row mt-5 descr">
                    <div class="col-12">
                        <h4 class="modelo">Descripción</h4>
                        <hr>
                        <p class="precio"><?= $data['data'][0]['descripcion']; ?></p>
                        <div class="buttom">
                            <a class="btn-g" target="_blank" href="<?=URL::to('public/fichas/'.$data['data'][0]['fichatecnica'])?>"><img src="<?=URL::to('public/img/archivo.svg')?>" alt=""> Ficha técnica</a>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="small">Las especificaciones y detalles del auto son en base a una versión básica</p>
                    </div>
                </div>
                <div class="row mt-5 encuentra">
                    <div class="col-12">
                        <h4 class="modelo">Encuéntranos en</h4>
                        <hr>

                            <?php
                                $locales = $data['data'][0]['encuentralo'];
                                $locales_ex = explode(';', $locales);
                                foreach($locales_ex as $key => $value)
                                    {
                                        if($key%2==0){echo "<p class='precio'><strong>$value /</strong>";}
                                        else{echo $value."</p>";}
                                    }
                            ?>

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 aside contacto p-4 pl-lg-5" style="position: relative">

                <div id="fcon">
                    <div class="row bgr p-3">
                        <div class="col-12">
                            <p class="titulo">¿Quieres que te ayudemos a elegir la mejor opción?</p>
                            <p class="sub">Déjanos tus datos y te contactaremos</p>
                        </div>
                        <?php if(!Auth::isLoggedIn()){ ?>
                        <div class="col-12">
                            <form class="form-contacto">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">DNI</label>
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
                        <?php } else { ?>
							<form class="form-contacto" action>
								<input type="hidden" class="form-control" id="nombre" value="<?= Auth::get_array('nombre'); ?>">
								<input type="hidden" class="form-control" id="apellido" value="<?= Auth::get_array('apellidos'); ?>">
								<input type="hidden" class="form-control" id="correo" value="<?= Auth::get_array('correo'); ?>">
								<input type="hidden" class="form-control" id="telefono" value="<?= Auth::get_array('telefono'); ?>">
                                <button type="submit" class="btn-s mb-4">Llámame</button>
                            </form>
						<?php } ?>
                    </div>
                    <?php foreach($data['adds'] as $adds){ ?>
                    <a href="<?php echo $adds->url1; ?>" class="card-link">
                        <div class="row bgr mt-5 p-3">
                            <div class="col-12">
                                <div class="card py-5">
                                    <img src="<?=URL::to('public/banners/'.$adds->imagen);?>" class="img-fluid" alt="...">
                                </div>
                            </div>
                            <!-- Bootstrap CSS 
                        <div class="col-12">
                            <img src="<?=URL::to('public/img/hyundai.svg')?>" alt="" class="img-fluid my-4">
                            <button class="btn-s mb-4">
                                Ver más vehículos
                            </button>
                        </div>
                        -->
                        </div>
                    </a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <?php include "destacados.php" ?>

    <?php include "footer.php" ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?=URL::to('public/js/jquery.slim.min.js')?>"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            //$(".caract:nth-child(even)").append("<hr>");


            if ($(window).width() > 991) {
                $("<div class='col-12'><hr class='mt-0'></div>").insertAfter(".caract:nth-child(odd)");
            } else {
                $("<div class='col-12'><hr class='mt-0'></div>").insertAfter(".caract");
            }



            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            $('.single-item').slick({
                dots: true,
                arrows: true,
                infinite: true,
                speed: 300
            });
            $('.dest-car').slick({
                dots: false,
                arrows: true,
                infinite: true,
                slidesToShow: 3,
                speed: 300,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


            var topOfNav = $('#fcon').offset().top;

            $(window).scroll(function() {
                if ($(this).scrollTop() > topOfNav) {
                    $('#fcon').addClass('fixed');
                } else {
                    $('#fcon').removeClass('fixed');
                }
            });

        });

    </script>

</body>

</html>
