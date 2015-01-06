<?php
	include "../config/conexion.php"; 
	include "../config/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['producto']) || empty($_POST['unidad_cont']) || empty($_POST['ean_code']) || 
	   empty($_POST['precio_neto']) || empty($_POST['impuesto1']) || empty($_POST['impuesto2']) || 
	   empty($_POST['serie']) || empty($_POST['precio_compra'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	if (isset($_POST['activo'])) { $activo = 1; }else{ $activo = 0; } 
	if (isset($_POST['compuesto'])) { $compuesto = 1; }else{ $compuesto = 0; }
	$sql = sprintf("INSERT INTO `controlg_fasterp`.`producto` (`producto`, `unidad_id`, `unidad_cont`, `compuesto`, `ean_code`, `precio_neto`, `impuesto1`, `impuesto2`, `tipo`, `serie`, `precio_compra`, `activo`) 
					VALUES ('%s', '%s', '%s', '%s', '%s', %s, '%s', '%s', '%s', '%s', '%s', %s);",
		fn_filtro(substr($_POST['producto'], 0, 50)),
		fn_filtro(substr($_POST['unidad_id'], 0, 3)),
		fn_filtro(substr($_POST['unidad_cont'], 0, 10)),
		fn_filtro($compuesto),
		fn_filtro(substr($_POST['ean_code'], 0, 70)),
		fn_filtro(substr($_POST['precio_neto'], 0, 70)),
		fn_filtro(substr($_POST['impuesto1'], 0, 70)),
		fn_filtro(substr($_POST['impuesto2'], 0, 70)),
		fn_filtro(substr($_POST['tipo'], 0, 1)),
		fn_filtro(substr($_POST['serie'], 0, 70)),
		fn_filtro(substr($_POST['precio_compra'], 0, 70)),
		fn_filtro($activo)
	);

	if(!mysql_query($sql, $fastERP))
		echo "Error al insertar el nuevo producto:\n$sql";

	exit;
?>