    <nav class="navbar navbar-expand-lg navbar-dark ba3 py-3 shadow-sm">

        <div class="container">

            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler order-md-1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContent" class="collapse navbar-collapse order-sm-12 order-lg-1">

                <div class="d-none d-lg-block">
                    <ul class="navbar-nav mr-auto d-flex align-items-center flex-row justify-content-center justify-content-lg-end pt-4 pt-lg-0">
                        <!-- Megamenu-->
                        <li class="nav-item">
                            <a class="bl" href="<?=URL::to('marcas')?>">Marcas</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="bl" href="<?=URL::to('listado')?>">Ver todos</a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav ml-auto d-flex align-items-center flex-row justify-content-center justify-content-lg-end pt-4 pt-lg-0">
                    <!-- Megamenu-->
                    <li class="nav-item mx-4 d-lg-none">
                        <a class="bl text-center" href="<?=URL::to('marcas')?>">Marcas</a>
                    </li>
                    <li class="nav-item  mx-4 d-lg-none">
                        <a class="bl" href="<?=URL::to('listado')?>">Ver todos</a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto d-flex align-items-center flex-row justify-content-center justify-content-lg-end pt-4 pt-lg-0">
                    <!-- Megamenu-->
                    <?php if(!Auth::isLoggedIn()){ ?>
                    <li class="nav-item mr-4">
                        <a class=" bl" href="<?=URL::to('usuario/registrar_form')?>">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn__basic btn__medium-aqua font-weight-bold bl" href="<?=URL::to('login')?>">Inicio de sesión</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="btn__basic btn__medium-aqua font-weight-bold bl" href="<?=URL::to('logout')?>">Cerrar sesión</a>
                    </li>
                    <?php } ?>

                </ul>
            </div>

        </div>

    </nav>
