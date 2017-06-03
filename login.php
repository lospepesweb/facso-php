<?php session_start();

require 'admin/config.php';
require 'funciones.php';

// comprobarsesion();

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower(limpiardatos($_POST['usuario'])), FILTER_SANITIZE_STRING);
	$password = limpiardatos($_POST['password']);
	// $password = hash('sha512', $password);

	$conexion = conexion($bd_config);
	if (!$conexion) {
		header ('Location: error.php');
	}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
	);

	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
		if ($resultado !== false) {
			$_SESSION['admin'] = $usuario;
			header('Location:' . RUTA . '/admin/index.php');
		} else {
			$errores .= '<p>Datos Incorrectos</p>';
		}
}

require 'views/login.view.php';

?>



	
	

