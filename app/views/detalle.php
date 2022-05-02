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


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 section">

                <div class="row det-header">
                    <div class="col-12">
                        <h1 class="titulo"><?= $data['data'][0]['marca']; ?></h1>
                        <h3 class="modelo"><?= $data['data'][0]['modelo']; ?></h3>
                        <hr>
                        <p class="precio text-right">Desde US$ <?= number_format($data['data'][0]['precio']); ?></p>
                        <hr>
                        <p class="version text-right">
                            <?= $data['data'][0]['resumen']; ?>
                        </p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="slider slider-for">
                            <div>
                                <img src="<?=URL::to('public/img/carro2-2x.png')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/Fallas-comunes-del-hyundai-tucson-9.jpg')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/hyundai-new-tucson-destacados-04.jpg')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/NAZ_c0238cd155d748c585a0fb3ddc1bc4bb.jpg')?>" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="buttom my-4">
                            <button class="btn-g"><img src="<?=URL::to('public/img/corazon.svg')?>" alt=""> Agregar a mis favoritos</button>
                        </div>

                        <div class="slider slider-nav">
                            <div>
                                <img src="<?=URL::to('public/img/carro2.png')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/Fallas-comunes-del-hyundai-tucson-9.jpg')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/hyundai-new-tucson-destacados-04.jpg')?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?=URL::to('public/galeria/NAZ_c0238cd155d748c585a0fb3ddc1bc4bb.jpg')?>" alt="" class="img-fluid">
                            </div>
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
                            <?= $data['data'][0]['cilindrada']; ?> L
                        </p>
                    </div>

                </div>

                <div class="row mt-5 descr">
                    <div class="col-12">
                        <h4 class="modelo">Descripción</h4>
                        <hr>
                        <p class="precio"><?= $data['data'][0]['descripcion']; ?></p>
                        <div class="buttom">
                            <a class="btn-g" target="_blank" href="<?=URL::to('public/fichas/'.$data['data'][0]['slug'].'.pdf')?>"><img src="<?=URL::to('public/img/archivo.svg')?>" alt=""> Ficha técnica</a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 encuentra">
                    <div class="col-12">
                        <h4 class="modelo">Encuéntranos en</h4>
                        <hr>
                        <p class="precio">
                            <strong>Distrito / </strong>
                            Lorem ipsum dolor sit amet
                        </p>
                        <p class="precio">
                            <strong>Distrito / </strong>
                            Lorem ipsum dolor sit amet
                        </p>
                        <p class="precio">
                            <strong>Distrito / </strong>
                            Lorem ipsum dolor sit amet
                        </p>

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
                    <div class="row bgr mt-5 p-3">
                        <div class="col-12">
                            <img src="<?=URL::to('public/img/hyundai.svg')?>" alt="" class="img-fluid my-4">
                            <button class="btn-s mb-4">
                                Ver más vehículos
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <section class="container-fluid destacados ba1 mt-5">
        <div class="container py-3">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="bl">Destacados</h2>
                </div>
                <div class="col-12 px-0">


                    <div class="d-flex flex-wrap flex-row dest-car">
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
