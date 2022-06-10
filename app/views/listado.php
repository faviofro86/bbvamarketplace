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
    <?php include "navbar.php"; ?>
    <header class="container-fluid p-0">
        <?php include "carrusel.php"; ?>
    </header>


    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-4 aside contacto p-4 pr-lg-5" style="position: relative">

                <div id="fcon">
                    <h3>Resultados</h3>
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group col-12 p-0">
                                    <label for="inputPassword" class="col-form-label">Buscar</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inputPassword">
                                        <div class="input-group-prepend" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                            <button class="input-group-text"><img src="<?=URL::to('public/img/lupa-r.svg')?>" alt="" width="15"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12 p-0">
                                    <label for="inputState">Marca</label>
                                    <select id="inputState" class="form-control">
                                        <option selected></option>
                                        <option>Mercedes</option>
                                        <option>Audi</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 p-0">
                                    <label for="inputState">Tipo</label>
                                    <select id="inputState" class="form-control">
                                        <option selected></option>
                                        <option>Coupé</option>
                                        <option>SUV</option>
                                        <option>Station Wagon</option>
                                        <option>Crossover</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 p-0">
                                    <label for="inputState">Transmisión</label>
                                    <select id="inputState" class="form-control">
                                        <option selected></option>
                                        <option>Automatico</option>
                                        <option>Manual</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <label for="inputState">Precio</label>
                                        <select id="inputState" class="form-control w-100">
                                            <option selected>Min</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <label for="inputZip">&nbsp;</label>
                                        <select id="inputState" class="form-control w-100">
                                            <option selected>Max</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row bgr p-3 mt-5 d-none d-md-block">
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
                    </div>
                </div>

            </div>


            <div class="col-12 col-lg-8 section">

                <div class="row det-header">
                    <div class="col-12">
                        <div class="d-flex flex-wrap flex-row">
                            <div class="col-12 col-md-6 p-3">
                                <div class="card">
                                    <a href="autos/mini-cooper-s">
                                        <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                        <div class="card-body ba3 bl">
                                            <h5 class="card-title mb-0">MAZDA</h5>
                                            <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                            <hr>
                                            <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center a1 pt-4">
                        <span class="medium">1</span> | 2 | 3 | 4
                    </div>

                    <div class="col-12 a1 p-5 d-md-none">
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
                                <a href="autos/mini-cooper-s">
                                    <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0">MAZDA</h5>
                                        <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                        <hr>
                                        <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="autos/mini-cooper-s">
                                    <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0">MAZDA</h5>
                                        <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                        <hr>
                                        <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="autos/mini-cooper-s">
                                    <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0">MAZDA</h5>
                                        <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                        <hr>
                                        <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="autos/mini-cooper-s">
                                    <img src="<?=URL::to('public/img/carro2.png')?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0">MAZDA</h5>
                                        <p class="card-text mb-0">ALL NEW MAZDA 3 SPORT</p>
                                        <hr>
                                        <p class="card-text text-right">desde US$ 22,790<br><small>cuota desde US$ 790 *</small></p>
                                    </div>
                                </a>
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

    <?php include "footer.php" ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?=URL::to('public/js/jquery.slim.min.js')?>"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

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
                speed: 300,
                autoplaySpeed: 2000
            });

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })

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
