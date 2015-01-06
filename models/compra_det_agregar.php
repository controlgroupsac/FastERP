<?php
	include "../config/conexion.php"; 
	include "../config/basico.php";

	/*verificamos si las variables se envian*/
	if(empty($_POST['producto_id']) || empty($_POST['cantidad']) || empty($_POST['precio_compra']) || 
	   empty($_POST['descuento']) || empty($_POST['unidad_id'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	$sql = sprintf("INSERT INTO `controlg_fasterp`.`compra_det` (`compra_id`, `producto_id`, `cantidad`, `precio_compra`, `descuento`, `unidad_id`) 
					VALUES (%s, %s, %s, %s, %s, %s);",
		fn_filtro($_POST['compra_id']),
		fn_filtro($_POST['producto_id']),
		fn_filtro($_POST['cantidad']),
		fn_filtro($_POST['precio_compra']),
		fn_filtro($_POST['descuento']),
		fn_filtro($_POST['unidad_id'])
	);

	if(!mysql_query($sql, $fastERP))
		echo "Error al insertar el nuevo detalle de compra:\n$sql";

	exit;
?>