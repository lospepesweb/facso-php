<?php require 'header.php' ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="titulo">Iniciar Sesion</h2>
				<form class="formulario" method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar Sesion">
					<?php if(!empty($errores)): ?>
						<div class="error">
							<ul>
								<?php echo $errores; ?>
							</ul>
						</div>
					<?php endif; ?>
				</form>
			</article>
		</div>
	</div>


<?php require 'footer.php' ?>