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
                                <input id="mesn" type="number" class="form-control" min="1" max="72" value="1" oninput="mesr.value=mesn.value" />
                            </div>
                            <input id="mesr" type="range" class="form-control p-0 range" min="1" max="72" value="1" oninput="mesn.value=mesr.value" />


                            <div class="form-group row mb-0">
                                <label for="staticEmail" class="col-6 col-form-label pb-0 label-leg"><small>Mínimo</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pb-0 label-leg"><small>Máximo</small></label>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-6 col-form-label pt-0 label-leg"><small>1 mes</small></label>
                                <label for="staticEmail" class="col-6 col-form-label text-right pt-0 label-leg"><small>72 meses</small></label>
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
                            <!-- <div class="col-12 mb-4 text-center">
                                <img src="<?=URL::to('public/img/Microillustration.svg')?>" alt="" class="img-fluid">
                            </div> -->
                            <div class="col-12 mb-4 text-center">
                                <h6><strong>Importe a solicitar:</strong></h6>
                                <p class="h2 mb-0"><span id="div-p">S/</span> <span id="mon-p">0.00</span></p>
                            </div>
                            <div class="col-12">
                                <p class="mt-3 mb-0 d-flex justify-content-between">
                                    <span class="bl">Cuota:</span><span><span id="mon">S/ </span><span class="cuota">0.00</span></span>
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="mt-3 mb-0 d-flex justify-content-between">
                                    <span class="bl">Duración total:</span><span><span id="meses-t">1</span><span> meses</span></span>
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="mt-3 mb-0 d-flex justify-content-between">
                                    <span class="bl">TCEA Referencial de Operación:</span><span> 10.000008%</span>
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="buttom mt-4">
                                    <button class="btn-g mx-auto" data-toggle="modal" data-target="#staticBackdrop">Solicitalo</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="mt-3 mb-0 d-flex justify-content-between">
                                    <button data-toggle="modal" data-target="#detalle" class="btn"><strong class="bl">+ Detalle del préstamo</strong></button>
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="mt-0 mb-0 d-flex justify-content-between">
                                    <button data-toggle="modal" data-target="#cronograma" class="btn"><strong class="bl">+ Cronograma de pagos</strong></button>
                                </p>
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

                <div class="col-12 ba4 mt-5 p-4">
                    <h6>IMPORTANTE</h6>
                    <ul class="list-group">
                        <li class="d-flex"><div class="listItem__bullet"></div>Los datos emitidos por este simulador son referenciales.</li>
                        <li class="d-flex"><div class="listItem__bullet"></div>El otorgamiento del préstamo está sujeto a evaluación crediticia.</li>
                        <li class="d-flex"><div class="listItem__bullet"></div>La fecha de desembolso, para efectos de esta simulación, es la fecha de solicitud que ha ingresado en este simulador.</li>
                        <li class="d-flex"><div class="listItem__bullet"></div>La simulación no incluye el ITF.</li>
                        <li class="d-flex"><div class="listItem__bullet"></div>La tasa de interés es fija.</li>
                        <li class="d-flex"><div class="listItem__bullet"></div>Usted podrá contratar directamente su póliza de seguro, con las mismas características y beneficios a la ofrecida, y endosarla a favor del Banco. El endoso de la póliza está sujeto a comisión publicada en nuestro tarifario en: www.bbva.pe</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="detalle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="staticBackdropLabel">Detalle del préstamo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="mt-3 mb-0 d-flex justify-content-between">
                            <span>Producto</span><span>Préstamo Auto Nuevo</span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Importe a solicitar</span><span><span class="det-mont-mon">S/ </span><span class="det-mont">50,000.00</span></span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Cuota *</span><span><span class="det-cuot-mon">S/ </span><span class="det-cuot">1,055.62</span></span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Duración total</span><span><span class="det-mes">60</span><span> meses</span></span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Fecha de solicitud</span><span><?php echo date("d/m/Y") ?></span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Días de pago</span><span><?php echo date("d") ?></span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Tipo Seguro de Desgravamen</span><span>SIN SEGURO</span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Importe Seguro de Desgravamen</span><span>S/ 0.00</span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>Tasa Efectiva Anual</span><span>10%</span>
                        </p>
                        <p class="mt-2 mb-0 d-flex justify-content-between">
                            <span>TCEA Referencial de Operación</span><span>10.000008%</span>
                        </p>
                    </div>
                </div>
                <!-- <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cronograma" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="staticBackdropLabel">Cronograma de pagos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="col-12">
                        <table class="table table-hover" style="width: 150%">
                            <thead>
                                <tr align="center">
                                    <th scope="col">Mes</th>
                                    <th scope="col">Vencimiento</th>
                                    <th scope="col">Amortización</th>
                                    <th scope="col">Interés</th>
                                    <th scope="col">Comisiones + seguros</th>
                                    <th scope="col">Subvención</th>
                                    <th scope="col">Cuota</th>
                                    <th scope="col">Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <th scope="row">1</th>
                                    <td><?php echo date("d/m/Y") ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">2</th>
                                    <td><?php echo date("d/m/Y", strtotime("+1 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">3</th>
                                    <td><?php echo date("d/m/Y", strtotime("+2 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">4</th>
                                    <td><?php echo date("d/m/Y", strtotime("+3 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">5</th>
                                    <td><?php echo date("d/m/Y", strtotime("+4 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">6</th>
                                    <td><?php echo date("d/m/Y", strtotime("+5 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                                <tr align="center">
                                    <th scope="row">7</th>
                                    <td><?php echo date("d/m/Y", strtotime("+6 month")) ?></td>
                                    <td><span class="tb-mon">S/</span> 643.57</td>
                                    <td><span class="tb-mon">S/</span> 412.05</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 0.00</td>
                                    <td><span class="tb-mon">S/</span> 1,055.62</td>
                                    <td><span class="tb-mon">S/</span> 49,356.43</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div> -->
            </div>
        </div>
    </div>
