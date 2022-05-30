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


    <title>Registrar Usuario</title>
</head>

<body>

    <header class="container-fluid p-0 pt-5">
        <?php include "navbar.php"; ?>
    </header>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 bgr p-4">
                <h4 class="mb-3">Registro</h4>
                <form id="registro_usuario">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Repetir contraseña</label>
                        <input type="password" class="form-control" name="verificacion" id="verificacion">
                    </div>
                    <button class="btn-g mx-auto" type="submit">Registrar</button>

                </form>
            </div>

            <div class="col-12 col-md-6 ba2 d-flex align-items-center justify-content-center py-4">

                <div class="text-center bl">
                    <img src="<?=URL::to('public/img/Microillustration.svg')?>" alt="" class="img-fluid mb-4">
                    <h6>¿Ya tienes una cuenta?</h6>
                    <h5>Inicia sesión</h5>
                    <a href="<?=URL::to('login')?>" class="btn-g">Iniciar sesión</a>
                </div>

            </div>

        </div>
    </div>



    <?php include "footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $("#registro_usuario").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('usuario/registrar'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 200) {
                            Swal.fire(
                                'Ok!',
                                response.message,
                                'success'
                            ).then(function() {
                                window.location = Script.route('/')
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                response.message,
                                'warning'
                            )
                        }
                    },
                    error: function(jqXHR, status) {
                        Swal.fire(
                            'Error!',
                            'se ha producido un error',
                            'warning'
                        )
                        console.log(jqXHR);
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
