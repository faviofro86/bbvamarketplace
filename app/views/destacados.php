    <section class="container-fluid destacados ba1 mt-5">
        <div class="container py-3">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="bl">Destacados</h2>
                </div>
                <div class="col-12 px-0">
                    <div class="d-flex flex-wrap flex-row dest-car">
                        
                        <?php foreach($data['destacados'] as $destacados){?>

                        <div class="col-12 col-md-6 col-lg-4 p-3">
                            <div class="card">
                                <a href="<?=URL::to('autos/'.$destacados->slug)?>">
                                    <img src="<?=URL::to('public/galeria/imgs/'.$destacados->slug."/".$destacados->img_banner)?>" class="card-img-top" alt="...">
                                    <div class="card-body ba3 bl">
                                        <h5 class="card-title mb-0"><?= $destacados->marca ?></h5>
                                        <p class="card-text mb-0"><?= $destacados->modelo ?></p>
                                        <small class="card-text mb-0"><?= $destacados->categoria ?></small>
                                        <hr>
                                        <div class="p-calc">
                                            <input type="hidden" class="p-total" value="<?= $destacados->precio ?>">
                                            <p class="card-text text-right">desde US$ <?= $destacados->precio ?><br><small>cuota desde US$ <span class="p-cuota"></span> *</small></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>


                    </div>

                    <div class="legal p-3">
                        <p class="card-text text-right bl"><small>* sujeto a evaluación crediticia, cuotas estimadas con una inicial del 20% + cuotas dobles en julio y diciembre</small></p>
                    </div>

                </div>
            </div>
        </div>
    </section>