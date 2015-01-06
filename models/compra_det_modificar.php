<?php
	include "../config/conexion.php"; 
	include "../config/basico.php";

	/*verificamos si las variables se envian*/
	if(empty($_POST['producto_id']) || empty($_POST['cantidad']) || empty($_POST['precio_compra']) || 
	   empty($_POST['descuento']) || empty($_POST['unidad_id'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	$sql = sprintf("UPDATE `controlg_fasterp`.`compra_det` SET producto_id=%d, cantidad='%s', precio_compra='%s', descuento='%s' , unidad_id='%s' 
					WHERE compra_det_id=%d;",
		fn_filtro((int)$_POST['producto_id']),
		fn_filtro($_POST['cantidad']),
		fn_filtro($_POST['precio_compra']),
		fn_filtro($_POST['descuento']),
		fn_filtro($_POST['unidad_id']),
		fn_filtro((int)$_POST['compra_det_id'])
	);

	if(!mysql_query($sql, $fastERP))
		echo "Error al modificar el detalle de compra:\n$sql";

	exit;
?>