<?php require 'header.php'; ?>

	<div class="contenedor">
		<div class="noticia">
			<article>
				<h2 class="titulo"><?php echo $noticia['titulo']; ?></h2>
				<a href="javascript:history.back(-1);" title="Volver"><i class="derecha fa fa-arrow-left" aria-hidden="true"></i></a>
				<p class="fecha"><?php echo fecha($noticia['fecha']); ?></p>
				<!-- <div class="thumb">
						<img src="<?php echo RUTA; ?>/imagenes/<?php echo $noticia['thumb']; ?>" alt="">
				</div> -->
				<p class="extracto"><?php echo nl2br($noticia['texto']); ?></p>
				<!-- la clase extracto es solo para repetir el estilo -->
				<!-- nl2br es para que respete los saltos de lineas blancos al ingresar texto -->
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>