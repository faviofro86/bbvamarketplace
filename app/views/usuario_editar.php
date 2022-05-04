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


    <title>Perfil</title>
</head>
<body>

    <div class="container">
        <form id="update_perfil">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$data["usuario"]->nombres?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?=$data["usuario"]->apellidos?>">
            </div>
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" id="dni" value="<?=$data["usuario"]->dni?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="<?=$data["usuario"]->telefono?>">
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $("#update_perfil").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('usuario/editar'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success : function(response){
                        if(response.status == 200){
                            Swal.fire(
                                'Ok!',
                                response.message,
                                'success'
                            );
                        }else{
                            Swal.fire(
                                'Error!',
                                response.message,
                                'warning'
                            )
                        }
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