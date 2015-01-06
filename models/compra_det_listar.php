<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 

    $query = "SELECT compra_det.compra_det_id, compra_det.cantidad, compra_det.precio_compra, compra_det.descuento, 
    				 producto.producto, unidad.unidad
    		  FROM compra_det, producto, unidad
    		  -- WHERE compra.compra_id = compra_det.compra_id
    		  WHERE producto.producto_id = compra_det.producto_id
    		  AND unidad.unidad_id = compra_det.unidad_id";

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $row_table = mysql_fetch_assoc($table);
?>
<table class="Table Table-striped Table-bordered">
	<thead>
		<tr>
			<th width="50%">Producto <span class="icon-embed"></span></th>
			<th width="9%">Unidad <span class="icon-embed"></span></th>
			<th width="8%">Cant. <span class="icon-embed"></span></th>
			<th width="10%">Precio <span class="icon-embed"></span></th>
			<th width="10%">Desc. <span class="icon-embed"></span></th>
			<th width="12%">Sub Total <span class="icon-embed"></span></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>		
		<?php do { ?>
		<tr id="tr_<?=$$row_table['compra_det_id']?>">
			<td><?php echo $row_table['producto']; ?></td>
			<td class="text-center"><?php echo $row_table['unidad']; ?></td>
			<td class="text-center"><?php echo $row_table['cantidad']; ?></td>
			<td class="text-center"><?php echo $row_table['precio_compra']; ?></td>
			<td class="text-center"><?php echo $row_table['descuento']."%"; ?></td>
			<td class="text-center">
				<?php 
					$monto = $row_table['cantidad'] * $row_table['precio_compra'];
					$descuento = $row_table['cantidad'] * $row_table['precio_compra'] * ($row_table['descuento']/100);
					echo $monto - $descuento;
				?>
				</td>
			<td><a href="javascript: fn_mostrar_frm_modificar_compra_det(<?=$row_table['compra_det_id']?>);"><img src="../views/img/ico/page_edit.png" /></a></td>
            <td><a href="javascript: fn_eliminar_compra_det(<?=$row_table['compra_det_id']?>);"><img src="../views/img/ico/delete.png" /></a></td>
		</tr>
		<?php } while ($row_table = mysql_fetch_assoc($table)); ?>
	</tbody>
</table>
