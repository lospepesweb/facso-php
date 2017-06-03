<?php session_start();

require 'config.php';
require '../funciones.php';

$conexion = conexion($bd_config);

comprobarsesion();


if (!$conexion){
	header ('Location: ../error.php');
}

require '../views/admin.index.view.php';

?>