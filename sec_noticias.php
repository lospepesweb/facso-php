<?php 

require 'funciones.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header ('Location: error.php');
}

$noticias = obtener_noticias($noticias_config['noticias_por_pagina'],$conexion);

if (!$noticias) {
	header ('Location: error.php');
}



require 'views/sec_noticias.view.php';

?>