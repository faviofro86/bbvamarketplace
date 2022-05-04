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

    <div class="container">
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
            <button type="submit">Registrar</button>
            <a href="<?=URL::to('login')?>">Iniciar sesión</a>
        </form>
        <button type="button">Registrar con Facebook</button>
        <button type="button">Registrar con Google</button>
    </div>
    

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $("#registro_usuario").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('usuario/registrar'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success : function(response){
                        if(response.status == 200){
                            Swal.fire(
                                'Ok!',
                                response.message,
                                'success'
                            ).then(function(){
                                window.location = Script.route('/')
                            });
                        }else{
                            Swal.fire(
                                'Error!',
                                response.message,
                                'warning'
                            )
                        }
                    },
                    error : function(jqXHR,status){
                        Swal.fire(
                            'Error!',
                            'se ha producido un error',
                            'warning'
                        )                       
                        console.log(jqXHR);
                    }
                }).done(function (data) {
                    console.log(data);
                    console.log('fin');
                });

            });
            
        });
    </script>
</body>

</html>