    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"><img src="<?=URL::to('public/img/footer_01.jpg')?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid ba1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"><img src="<?=URL::to('public/img/footer_02.jpg')?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </footer>
    <div class="btn-lead" data-toggle="modal" data-target="#staticBackdrop" style="">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path d="M492.438,397.75l-2.375-7.156c-5.625-16.719-24.063-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031
	L310,371.438c-82.453-22.281-147.109-86.938-169.359-169.375l22.688-22.688c12.438-12.438,18.656-36.656,14.031-53.656L160.266,63
	c-4.625-16.969-22.094-35.406-38.781-40.969l-7.156-2.406c-16.719-5.563-40.563,0.063-53,12.5L27.391,66.094
	c-6.063,6.031-9.938,23.281-9.938,23.344C16.266,197.188,58.516,301,134.734,377.219c76.031,76.031,179.453,118.219,286.891,117.313
	c0.563,0,18.313-3.813,24.375-9.844l33.938-33.938C492.375,438.313,498,414.469,492.438,397.75z" />
        </svg>
        <span>Te llamamos <br>para asesorarte</span>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bgr">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <div class="row bgr p-3 mt-0">
                        <div class="col-12">
                            <h4 class="titulo">¿Quieres que te ayudemos a elegir la mejor opción?</h4>
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
        </div>
    </div>