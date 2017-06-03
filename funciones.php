<?php 

function conexion($bd_config){
// bd_config, es el arreglo establecido en config.php
	try {
		$conexion = new PDO ('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}

}

function limpiardatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_noticias($noticias_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $noticias_por_pagina - $noticias_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, $noticias_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();

}

function numero_paginas($noticias_por_pagina, $conexion){
	$total_noticias = $conexion->prepare("SELECT FOUND_ROWS() as total FROM articulos");
	$total_noticias->execute();
	$total_noticias = $total_noticias->fetch()['total'];

	$numero_paginas = ceil($total_noticias / $noticias_por_pagina);
	return $numero_paginas;

}

function id_noticia($id){
	return (int)limpiardatos($id);
}

function obtener_noticias_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) -1;
	$año = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $año";
	return $fecha;
}

function comprobarsesion(){
	if (!isset($_SESSION['admin'])) {
		header ('Location: ' . RUTA . '/login.php');
	}
}

?>