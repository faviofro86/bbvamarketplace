<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=URL::to('public/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=URL::to('public/css/slick-theme.css')?>" />
    <link rel="stylesheet" href="<?=URL::to('public/css/style.css')?>">


    <title>BBVA - Marcas</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <?php include "carrusel.php"; ?>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 p-4">
                <h4 class="mb-3">Marcas</h4>
            </div>
            <div class="col-12 p-4">
				<div class="row d-flex flex-wrap">
					
                    <?php foreach($data['marcas'] as $marcas){ ?>
					<div class="col-6 col-md-4 col-lg-3">
						<a href="<?=URL::to('listado/?marca='.$marcas->id)?>"><img src="<?=URL::to('public/img/marcas/'.$marcas->imagen);?>" alt="" class="img-fluid"></a>
					</div>
					<?php } ?>
					
				</div>
            </div>
        </div>
    </div>


    <div class="container">

    </div>

    <?php include "footer.php" ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
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
        window.addEventListener('DOMContentLoaded', (event) => {
            $("#iniciar_sesion").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('login'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        window.location = Script.route('/')
                        console.log(response);
                    },
                    error: function(jqXHR, status) {
                        console.log(jqXHR);
                        console.log(status);
                    }
                }).done(function(data) {
                    console.log(data);
                    console.log('fin');
                });

            });

        });

    </script>
</body>

</html>
