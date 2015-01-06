<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 

    $query = "SELECT compra_det.cantidad, compra_det.precio_compra, compra_det.descuento, 
    				 producto.producto, unidad.unidad
    		  FROM compra_det, producto, unidad
    		  -- WHERE compra.compra_id = compra_det.compra_id
    		  WHERE producto.producto_id = compra_det.producto_id
    		  AND unidad.unidad_id = compra_det.unidad_id";

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $row_table = mysql_fetch_assoc($table);
    $totalRows_table = mysql_num_rows($table);
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
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Cerveza Cuzqueña blanca 610 ml</td>
			<td>caja</td>
			<td>32</td>
			<td>47.00</td>
			<td>0.00</td>
			<td>1504.00</td>
		</tr>
		
		<?php do { ?>
		<tr>
			<td><?php echo $row_table['producto']; ?></td>
			<td><?php echo $row_table['unidad']; ?></td>
			<td><?php echo $row_table['cantidad']; ?></td>
			<td><?php echo $row_table['precio_compra']; ?></td>
			<td><?php echo $row_table['descuento']; ?></td>
			<td><?php echo ($row_table['cantidad']  * $row_table['precio_compra']) / $row_table['descuento']; ?></td>
		</tr>
		<?php } while ($row_table = mysql_fetch_assoc($table)); ?>
	</tbody>
</table>
