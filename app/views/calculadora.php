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


                        <div class="form-group row mt-2">
                            <h6 class="col-sm-4 col-form-label">Moneda</h6>
                            <div class="col-sm-8 d-flex">

                                <div class="form-check form-check-inline mr-5">
                                    <input class="form-check-input" type="radio" name="moneda" id="soles" value="soles" checked>
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
                                <div class="form-row d-flex align-items-center justify-content-center">
                                    <div class="col-1 text-right"><span class="mon">S/</span></div>
                                    <div class="col-11"><input id="monton" type="text" class="form-control" min="5000" max="250000" oninput="montor.value=monton.value" /></div>
                                </div>

                            </div>
                            <input id="montor" type="range" class="form-control p-0 range" min="5000" max="250000" value="0" oninput="monton.value=montor.value" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)" />


                            <div class="form-group row mb-0">
                                <label for="staticEmail" class="col-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row label-leg">
                                <label for="staticEmail" class="col-6 col-form-label pt-0 label-leg"><small class="mont-min">S/5,000.00</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pt-0 label-leg"><small class="mont-max">S/250,000.00</small></label>
                            </div>


                        </div>

                        <div class="form-group label-input">

                            <h6 for="">Inicial</h6>
                            <div class="input-cont">
                                <label class="small">Ingresa una cantidad</label>
                                <div class="form-row d-flex align-items-center justify-content-center">
                                    <div class="col-1 text-right"><span class="mon">S/</span></div>
                                    <div class="col-11"><input id="inicialn" type="text" class="form-control" min="0" max="250000" oninput="inicialr.value=inicialn.value" /></div>
                                </div>
                            </div>
                            <input id="inicialr" type="range" class="form-control p-0 range" min="0" max="250000" value="0" oninput="inicialn.value=inicialr.value" />


                            <div class="form-group row mb-0 label-leg">
                                <label for="staticEmail" class="col-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row label-leg">
                                <label for="staticEmail" class="col-6 col-form-label pt-0 label-leg"><small class="ini-min">S/0.00</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pt-0 label-leg"><small class="ini-max">S/250,000.00</small></label>
                            </div>


                        </div>

                        <div class="form-group label-input">

                            <h6 for="">Mensualidades</h6>
                            <div class="input-cont">
                                <label class="small">Ingresa una cantidad</label>
                                <input id="mesn" type="number" class="form-control" min="1" max="60" value="1" oninput="mesr.value=mesn.value" />
                            </div>
                            <input id="mesr" type="range" class="form-control p-0 range" min="1" max="60" value="1" oninput="mesn.value=mesr.value" />


                            <div class="form-group row mb-0">
                                <label for="staticEmail" class="col-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-6 col-form-label pt-0 label-leg"><small>1 mes</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pt-0 label-leg"><small>60 meses</small></label>
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
                                <p class="h2 mb-0"><span id="mon">S/</span> <span class="cuota">0.00</span></p>
                            </div>
                            <div class="col-12">
                                <div class="buttom">
                                    <button class="btn-g mx-auto" data-toggle="modal" data-target="#staticBackdrop">Solicitalo</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="mt-3 mb-0">
                                    <small class="bl">1. Monto aproximado (el cálculo de la cuota)</small>
                                </p>
                                <p>
                                    <small class="bl">2. No se considera comisión por envio de estado de cuenta físico en caso se requiera</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
