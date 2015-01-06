<?php
	if(empty($_POST['compra_det_id'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../config/conexion.php"; 
    include("../queries/query.php"); 

	$query = "SELECT compra_det.compra_det_id, compra_det.producto_id, compra_det.unidad_id, compra_det.cantidad, compra_det.precio_compra, compra_det.descuento, 
    				 producto.producto, unidad.unidad
    		  FROM compra_det, producto, unidad
    		  WHERE compra_det.compra_det_id = $_POST[compra_det_id]
    		  AND producto.producto_id = compra_det.producto_id
    		  AND unidad.unidad_id = compra_det.unidad_id";

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $row_table = mysql_fetch_assoc($table);
    $totalRows_table = mysql_num_rows($table);
	if ($totalRows_table == 0){
		echo "No existen detalles de compras con ese ID";
		exit;
	}
?>
<h2 class="title">Modificar Detalle Compra</h2>
<form action="javascript: fn_modificar();" method="post" id="frm_compra_det">
	<input type="hidden" id="compra_id" name="compra_id" value="<?=$row_table['compra_id']?>" />
	<input type="hidden" id="compra_det_id" name="compra_det_id" value="<?=$row_table['compra_det_id']?>" />
    <table class="Table Table-striped Table-bordered">
        <tbody>
            <tr>
                <td>
                    <div class="Form-inputGroup inline-block">
                        <label for="producto" class="Form-label">producto</label>
                    </div>
                </td>

                <td>
                    <div class="Form-inputGroup">
                        <select class="Form-inputText-small Form-select" name="producto_id" id="producto_id">
                            <?php query_table_option_comparar("SELECT * FROM producto ORDER BY producto", 'producto_id', 'producto', $row_table['producto_id']); ?>
                        </select>
                    </div> 
                </td>
            </tr>
            <tr>
                <td>cantidad</td>
                <td><input name="cantidad"  class="Form-inputText-small" type="text" id="cantidad" size="30" value="<?=$row_table['cantidad']?>" required autofocus /></td>
            </tr>
            <tr>
                <td><label for="precio_compra">Precio</label> </td>
                <td><input name="precio_compra"  class="Form-inputText-small" type="text" id="precio_compra" value="<?=$row_table['precio_compra']?>" required /></td>
            </tr>
            <tr>
                <td>Descuento</td>
                <td><input name="descuento"  class="Form-inputText-small" type="text" id="descuento" value="<?=$row_table['descuento']?>" required /></td>
            </tr>
            <tr>
                <td>
                    <div class="Form-inputGroup inline-block">
                        <label for="unidad" class="Form-label">Unidad</label>
                    </div>
                </td>

                <td>
                    <div class="Form-inputGroup">
                        <select class="Form-inputText-small Form-select" name="unidad_id" id="unidad_id">
                            <?php query_table_option_comparar("SELECT * FROM unidad ORDER BY unidad", 'unidad_id', 'unidad', $row_table['unidad_id']); ?>
                        </select>
                    </div> 
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input class="btn btn-blue" type="submit" id="modificar" value="Modificar" />
                    <input class="btn btn-blue" type="button" id="cancelar" value="Cancelar" onclick="fn_cerrar();" />
                </td>
            </tr>
        </tfoot>
    </table>
</form>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#frm_compra_det").validate({
			submitHandler: function(form) {
				var respuesta = confirm('\xBFDesea realmente modificar este Detalle de compras?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function fn_modificar(){
		var str = $("#frm_compra_det").serialize();
		$.ajax({
			url: '../models/compra_det_modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				fn_cerrar();
				fn_buscar_compra_det();
			}
		});
	};
</script>