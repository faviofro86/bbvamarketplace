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

    <title>BBVA Marketplace</title>
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
                            <select class="form-control" name="marca">
                                <option selected disabled hidden value="">Selecciona una marca</option>
                                <?php foreach($data['marcas'] as $marca){ ?>
                                <option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Tipo</label>
                            <select id="inputState" class="form-control" name="categoria">
                                <option selected disabled hidden value="">Selecciona una categoria</option>
                                <?php foreach($data['categorias'] as $categoria){ ?>
                                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->categoria; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Transmisión</label>
                            <select id="inputState" class="form-control" name="transmision">
                                <option selected disabled hidden value="">Selecciona</option>
                                <option value="Automática">Automática</option>
                                <option value="Mecánica">Mecánica</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="inputState">Condición</label>
                            <select id="inputState" class="form-control" disabled>
                               	<option selected disabled hidden value="">Selecciona</option>
                                <option selected>Nuevo</option>
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
                        <?php foreach($data['destacados'] as $destacados){?>
                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="<?=URL::to('autos/'.$destacados->slug)?>" class="card-link">
                                    <img src="<?=URL::to('public/galeria/imgs/'.$destacados->slug."/".$destacados->img_banner)?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0"><?= $destacados->marca ?></h5>
                                        <p class="card-text mb-0"><?= $destacados->modelo ?></p>
                                        <hr>
                                        <p class="card-text text-right">desde US$ <?= $destacados->precio ?><br><small>cuota desde US$ <?= $destacados->cuota ?> *</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
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
    <script src="<?=URL::to('public/js/autoNumeric.js')?>"></script>

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

        $('#soles').click(function() {
            $('#mon').text("S/ ")
            $('.mon').text("S/ ")
            $('.mont-min').text("S/2,000.00")
            $('.mont-max').text("S/100,000.00")
            $('.ini-min').text("S/0.00")
            $('.ini-max').text("S/100,000.00")
            
        });

        $('#dolares').click(function() {
            $('#mon').text("$ ")
            $('.mon').text("$ ")
            $('.mont-min').text("$2,000.00")
            $('.mont-max').text("$100,000.00")
            $('.ini-min').text("$0.00")
            $('.ini-max').text("$100,000.00")
        });

        //$('#dolares').moneda();

        $('#monton, #inicialn').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        $('#monton, #montor').on('input', function() {
            var value = $(this).val();
            if ((value !== '') && (value.indexOf('.') === -1)) {
                $(this).val(Math.max(Math.min(value, 100000), -100000));
            }
        });

        $('#inicialn, #inicialr').on('input', function() {
            var max = $('#monton').val()
            var value = $(this).val();
            if ((value !== '') && (value.indexOf('.') === -1)) {
                $(this).val(Math.max(Math.min(value, max), -max));
            }
        });

        $('#mesn, #mesr').on('input', function() {
            var value = $(this).val();
            if ((value !== '') && (value.indexOf('.') === -1)) {
                $(this).val(Math.max(Math.min(value, 60), -60));
            }
        });

        $("#monton, #montor, #inicialn, #inicialr, #mesn, #mesr").on("input", function() {

            var loan = $('#monton').val(),
                down = $('#inicialn').val(),
                month = $('#mesn').val(),
                int = 10,
                amount = parseInt(loan),
                months = parseInt(month),
                down = parseInt(down),
                monInt = int / 1200,
                calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) - 1))) * (amount - (down || 0))).toFixed(2);

            if (isNaN(calculation)) calculation = 0.00;
            $(".cuota").text(calculation);
        });

        $("#monton, #montor").on("input", function() {
            var max = $('#monton').val(),
                inimax = $('#inicialn').val(),
                inirmax = $('#inicialr').val();

            if (max <= inimax) $('#inicialn').val(max);
            //if (inimax > max) $('#inicialn').val(max);

            $("#inicialn, #inicialr").attr('max', max);
        });

    </script>
</body>

</html>
