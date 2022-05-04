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
        <form id="iniciar_sesion">
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $("#iniciar_sesion").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('login'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success : function(response){
                        window.location = Script.route('/')
                        console.log(response);
                    },
                    error : function(jqXHR,status){
                        console.log(jqXHR);
                        console.log(status);
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