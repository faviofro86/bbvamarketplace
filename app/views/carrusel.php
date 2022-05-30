<div class="single-item">
    
    <?php foreach($data['banners'] as $banner){ ?>
    <div class="slide">
		<?php if($banner->ubicacion==1){ ?>
        <div class="slide-cont">
            <div class="slide-texto">
              	<?php $cadena = $banner->titulo;
				# Cuántas palabras extraer
				$cantidad_palabras = 3;
				$palabras_arreglo = explode(" ", $cadena);
				$primer_texto = implode(" ", array_slice($palabras_arreglo, 0, $cantidad_palabras));
				if(strlen($primer_texto)>19){
					$cantidad_palabras = 2;
					$primer_texto = implode(" ", array_slice($palabras_arreglo, 0, $cantidad_palabras));						
					$segundo_texto = implode(" ", array_slice($palabras_arreglo, $cantidad_palabras));
				}else{
					$segundo_texto = implode(" ", array_slice($palabras_arreglo, $cantidad_palabras));
				}
			    ?>
                <p class="titulo bl mb-0"><?php echo $primer_texto; ?></p>
                <p class="titulo am"><?php echo $segundo_texto; ?></p>
                <div class="parrafo bl mb-4"><?php echo $banner->subtitulo; ?></div>

                <a target="_blank" href="<?php echo $banner->url1; ?>" class="car-link mr-4">
                    <div class="btn__basic btn__medium-aqua"><?php echo $banner->btn1; ?></div>
                </a>

                <a target="_blank" href="<?php echo $banner->url2; ?>" class="car-link">
                    <div class="complexmarquee__linkwrapper mt-4">
                        <img class="bbva-svgicon bbva-svgicon--core " src="<?=URL::to('public/img/3_029_oneclick.svg')?>" alt="">
                        <span><?php echo $banner->btn2; ?></span>
                    </div>
                </a>
            </div>

            <div class="slide-img" style="background-image: url(<?=URL::to('public/banners/'.$banner->imagen)?>)">
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

</div>
