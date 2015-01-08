<?php
	include "../config/conexion.php";
	include "../config/basico.php";
	/*obtenemos el ide mayor*/
	mysql_select_db($database_fastERP, $fastERP);
	$query = "SELECT compra_id FROM compra ORDER BY compra_id DESC LIMIT 1";
    $compra = mysql_query($query, $fastERP) or die(mysql_error());
	$row_compra = mysql_fetch_assoc($compra);

	if($row_compra['compra_id'] == $_COOKIE['compra_id']) {
		return false;
	}else {
		/*insertamos el nuevo registro*/
		$compra_id = $row_compra['compra_id'] + 1;
		
		/*verificamos si las variables se envian*/
		if(empty($_POST['fecha']) || empty($_POST['fecha_pago']) || empty($_POST['referencia']) || empty($_POST['usuario_id'])){
			echo "Usted no a llenado todos los campos";
			exit;
		}

		if (isset($_POST['recibido'])) { $recibido = 1; }else{ $recibido = 0; }
		$sql = sprintf("INSERT INTO `controlg_fasterp`.`compra` (`compra_id`, `proveedor_id`, `fecha`, `fecha_pago`, `almacen_id`, `moneda_id`, `referencia`, `usuario_id`, `recibido`) 
						VALUES (%d, %d, '%s', '%s', %d, %d, '%s', %d, %d);",
			fn_filtro($compra_id),
			fn_filtro($_POST['proveedor_id']),
			fn_filtro($_POST['fecha']),
			fn_filtro($_POST['fecha_pago']),
			fn_filtro($_POST['almacen_id']),
			fn_filtro($_POST['moneda_id']),
			fn_filtro($_POST['referencia']),
			fn_filtro($_POST['usuario_id']),
			fn_filtro($recibido)
		);

		if(!mysql_query($sql, $fastERP))
			echo "Error al insertar la nueva compra:\n$sql";

		exit;
	}	
?>