<!-- SECCION NOTICIAS -->
	<div class="container-fluid">
		<section class="noticias">
			<div class="row">
				<h2 class="text-center">NOTICIAS</h2>
				<span class="linea"></span>
			</div>
			<div class="row">
			
				<?php foreach ($noticias as $noticia): ?>
					<div class="col-md-3 noticia">
						<article>
							<h3><?php echo $noticia['titulo']; ?></h3>
							<h4><?php echo fecha($noticia['fecha']); ?></h4>
							<!-- <div class="thumb">
								<a href="single.php?id=<?php echo $noticia['id']; ?>">
									<img src="<?php echo RUTA; ?>/imagenes/<?php echo $noticia['thumb']; ?>" alt="">
								</a>
							</div> -->
							<p class="intro"><?php echo $noticia['extracto']; ?></p>
							<a href="single.php?id=<?php echo $noticia['id']; ?>" class="mas">Leer más...</a>
							<span class="finNoticia"></span>
						</article>
					</div>
				<?php endforeach ?>
				
			</div>
			<div class="clearfix"></div>
			<a class="masNoticias" href="<?php echo RUTA; ?>/noticias.php">Ver todas las noticias</a>
		</section>
	</div>