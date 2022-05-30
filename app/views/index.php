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
    
    <?php include "calculadora.php"; ?>

    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Busca tu auto</h2>
            </div>
            <form action="listado" class="col-12 p-5 bgr mb-5 busca-home">

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
                        <?php foreach($data['adds'] as $adds){ ?>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card py-5">
                                <a href="<?php echo $adds->url1; ?>" class="card-link">
                                <img src="<?=URL::to('public/banners/'.$adds->imagen);?>" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="autos/mini-cooper-s" class="card-link">
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
                                <a href="autos/mini-cooper-s" class="card-link">
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
                                <a href="autos/mini-cooper-s" class="card-link">
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
                                <a href="autos/mini-cooper-s" class="card-link">
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
                                <a href="autos/mini-cooper-s" class="card-link">
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
