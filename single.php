<?php 
require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);
$id_noticia = id_noticia($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_noticia)) {
	header('Location: index.php');
}

$noticia = obtener_noticias_por_id($conexion, $id_noticia);
if (!$noticia) {
	header('Location: index.php');
}

$noticia = $noticia[0];

require 'views/single.view.php';

?>