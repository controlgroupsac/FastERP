<?php
	include "../config/conexion.php"; 
	include "../config/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['proveedor']) || empty($_POST['ruc']) || empty($_POST['direccion']) || empty($_POST['contacto']) || empty($_POST['telefono'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	if (isset($_POST['activo'])) { $activo = 1; }else{ $activo = 0; }
	$sql = sprintf("INSERT INTO `controlg_fasterp`.`proveedor` (`proveedor`, `ruc`, `direccion`, `contacto`, `telefono`, `activo`) 
					VALUES ('%s', '%s', '%s', '%s', '%s', %s);",
		fn_filtro(substr($_POST['proveedor'], 0, 16)),
		fn_filtro(substr($_POST['ruc'], 0, 16)),
		fn_filtro(substr($_POST['direccion'], 0, 60)),
		fn_filtro(substr($_POST['contacto'], 0, 60)),
		fn_filtro(substr($_POST['telefono'], 0, 70)),
		fn_filtro($activo)
	);

	if(!mysql_query($sql, $fastERP))
		echo "Error al insertar el nuevo proveedor:\n$sql";

	exit;
?>