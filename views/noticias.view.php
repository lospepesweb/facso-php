<?php require 'header.php'; ?>

	<div class="contenedor">
	<a href="javascript:history.back(-1);" title="Volver"><i class="derecha fa fa-arrow-left" aria-hidden="true"></i></a>
		<?php foreach ($noticias as $noticia): ?>
			<div class="noticia">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $noticia['id']; ?>"><?php echo $noticia['titulo']; ?></a></h2>
					<p class="fecha"><?php echo fecha($noticia['fecha']); ?></p>
					<!-- <div class="thumb">
						<a href="single.php?id=<?php echo $noticia['id']; ?>">
							<img src="<?php echo RUTA; ?>/imagenes/<?php echo $noticia['thumb']; ?>" alt="">
						</a>
					</div> -->
					<p class="intro"><?php echo $noticia['extracto']; ?></p>
					<a href="single.php?id=<?php echo $noticia['id']; ?>" class="mas">Leer más...</a>
				</article>
			</div>
		<?php endforeach ?>

		<?php require 'paginacion.php'; ?>
	</div>

<?php require 'footer.php'; ?>