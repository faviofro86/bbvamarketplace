    <nav class="navbar navbar-expand-lg navbar-dark ba1 py-3 shadow-sm fixed-top">

        <div class="container">

            <a href="<?=URL::to('/')?>" class="navbar-brand font-weight-bold mr-auto">

                <img src="<?=URL::to('public/img/bbva_logo.webp')?>" alt="" height="40">

            </a>
            
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler order-md-1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContent" class="collapse navbar-collapse order-sm-12 order-lg-1">
               
                <ul class="navbar-nav ml-auto d-flex align-items-center flex-row justify-content-center justify-content-lg-end pt-4 pt-lg-0">
                    <!-- Megamenu-->
                    <li class="nav-item mr-4">
                        <a class=" bl" href="<?=URL::to('usuario/registrar_form')?>">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn__basic btn__medium-aqua font-weight-bold bl" href="<?=URL::to('login')?>">Inicio de sesión</a>
                    </li>
                    
                </ul>
            </div>

        </div>

    </nav>
