    <section class="container calcula">
        <div class="row p-3">
            <div class="row">
                <div class="col-12">
                    <p class="titulo">Simula tu préstamo</p>
                    <p class="parr">Completa la siguiente información para simular tu préstamo</p>
                </div>
            </div>


            <div class="row d-flex align-items-stretch">
                <div class="col-12 col-lg-6" style="background-color: #F4F4F4">


                    <div id="calculadora">


                        <div class="form-group row">
                            <h6 class="col-sm-4 col-form-label">Moneda</h6>
                            <div class="col-sm-8 d-flex justify-content-md-between">

                                <div class="form-check form-check-inline mr-5 mr-md-0">
                                    <input class="form-check-input" type="radio" name="moneda" id="soles" value="soles">
                                    <label class="form-check-label lbl" for="soles">Soles</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="moneda" id="dolares" value="dolar">
                                    <label class="form-check-label lbl" for="dolares">Dólares</label>
                                </div>

                            </div>
                        </div>


                        <!-- <div class="form-group label-input">
                            <h6>¿Cuál es el modelo del auto que quieres?</h6>
                        
                            <div class="input-cont">
                                <label for="modelo" class="small">Modelo</label>
                                <select class="form-control" id="modelo">
                                    <option value="2022" selected>2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="form-group label-input">

                            <h6 for="">¿Cuánto cuesta el auto que quieres?</h6>
                            <div class="input-cont">
                                <label class="small">Ingresa una cantidad</label>
                                <input id="monton" type="number" class="form-control" value="2000" min="2000" max="100000" oninput="montor.value=monton.value" />
                            </div>
                            <input id="montor" type="range" class="form-control p-0" value="2000" min="2000" max="100000" oninput="monton.value=montor.value" />


                            <div class="form-group row mb-0">
                                <label for="staticEmail" class="col-sm-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row label-leg">
                                <label for="staticEmail" class="col-sm-6 col-form-label pt-0 label-leg"><small>$2,000.00</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pt-0 label-leg"><small>$100,000.00</small></label>
                            </div>


                        </div>

                        <div class="form-group label-input">

                            <h6 for="">Inicial</h6>
                            <div class="input-cont">
                                <label class="small">Ingresa una cantidad</label>
                                <input id="inicialn" type="number" class="form-control" value="100" min="0" max="20000" oninput="inicialr.value=inicialn.value" />
                            </div>
                            <input id="inicialr" type="range" class="form-control p-0" min="0" max="20000" value="100" oninput="inicialn.value=inicialr.value" />


                            <div class="form-group row mb-0 label-leg">
                                <label for="staticEmail" class="col-sm-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row label-leg">
                                <label for="staticEmail" class="col-sm-6 col-form-label pt-0 label-leg"><small>$10,000.00</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pt-0 label-leg"><small>$1,000,000.00</small></label>
                            </div>


                        </div>

                        <div class="form-group label-input">

                            <h6 for="">Mensualidades</h6>
                            <div class="input-cont">
                                <label class="small">Ingresa una cantidad</label>
                                <input id="mesn" type="number" class="form-control" value="6" min="6" max="48" oninput="mesr.value=mesn.value" />
                            </div>
                            <input id="mesr" type="range" class="form-control p-0" min="6" max="48" value="6" oninput="mesn.value=mesr.value" />


                            <div class="form-group row mb-0">
                                <label for="staticEmail" class="col-sm-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label pt-0 label-leg"><small>6 meses</small></label>
                                <label for="staticEmail" class="col-sm-6 col-form-label text-right pt-0 label-leg"><small>48 meses</small></label>
                            </div>


                        </div>

                        <!-- <div class="buttom">
                            <button class="btn-g float-md-right btn-calc">¡Calcula tu financiamiento!</button>
                        </div> -->
                    </div>

                </div>

                <div class="col-12 col-lg-5 offset-md-1 d-flex align-items-strech ">

                    <div class="ba2 bl calc-res d-flex align-items-center">
                        <div class="row p-5">
                            <div class="col-12 mb-4 text-center">
                                <img src="<?=URL::to('public/img/Microillustration.svg')?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 mb-4 text-center">
                                <h5><strong>Tu cuota desde:</strong></h5>
                                <p class="h2 mb-0 cuota">$5.120</p>
                            </div>
                            <div class="col-12">
                                <div class="buttom">
                                    <button class="btn-g mx-auto" data-toggle="modal" data-target="#staticBackdrop">Solicitalo</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
