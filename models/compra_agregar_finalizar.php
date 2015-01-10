<?php
    setcookie("compra_id", $_COOKIE['compra_id'], 0, "/");
	include "../config/conexion.php"; 
	include "../config/basico.php";

	/*verificamos si las variables se envian*/
	if(empty($_POST['notas']) || empty($_POST['neto']) || empty($_POST['impuesto1']) || empty($_POST['total'])){
		echo "Usted no a llenado todos los campos";
		exit;
	}

	$sql = sprintf("UPDATE `controlg_fasterp`.`compra` SET notas='%s', neto='%s', descuento_p='%s', impuesto1='%s', total='%s' 
					WHERE compra_id = %d;",
		fn_filtro($_POST['notas']),
		fn_filtro($_POST['neto']),
		fn_filtro($_POST['descuento_p']),
		fn_filtro($_POST['impuesto1']),
		fn_filtro($_POST['total']),
		fn_filtro($_COOKIE['compra_id']['compra_id'])
	);

	if(!mysql_query($sql, $fastERP))
		echo "Error al modificar la compra:\n$sql";
	exit;
?>