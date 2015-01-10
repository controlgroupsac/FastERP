<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 

    $query = "SELECT compra_det.compra_det_id, compra_det.cantidad, compra_det.precio_compra, compra_det.descuento, 
    				 producto.producto, unidad.unidad
    		  FROM compra, compra_det, producto, unidad
              WHERE compra.compra_id = compra_det.compra_id
              AND producto.producto_id = compra_det.producto_id
              AND unidad.unidad_id = compra_det.unidad_id";
    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $row_table = mysql_fetch_assoc($table);

    $suma_descuentos = "";
    $subtotal = "";
    do {
		$monto = $row_table['cantidad'] * $row_table['precio_compra'];
		$descuento = $row_table['cantidad'] * $row_table['precio_compra'] * ($row_table['descuento']/100);
        @$suma_descuentos += $descuento;
		@$suma_subtotal += ($monto - $descuento);
    } while ($row_table = mysql_fetch_assoc($table));
?>
<div class="Form-inputGroup">
    <label for="neto" class="Form-label">Neto</label>
    <input type="text" class="Form-inputText-small text-right" name="neto" id="neto" value="<?php echo @$suma_subtotal; ?>" readonly />
</div>
<div class="Form-inputGroup">
    <label for="descuento" class="Form-label">Descuento</label>
    <input type="text" class="Form-inputText-small text-right" name="descuento" id="descuento" value="<?php echo $suma_descuentos ?>" readonly />
</div>
<div class="Form-inputGroup">
    <label for="impuesto" class="Form-label">Impuestos</label>
    <input type="text" class="Form-inputText-small text-right" name="impuesto1" id="impuesto1" value="<?php echo @$suma_subtotal * 0.18; ?>" readonly />
</div>
<div class="Form-inputGroup">
    <label for="total" class="Form-label">Total</label>
    <input type="text" class="Form-inputText-small text-right" name="total" id="total" value="<?php echo @$suma_subtotal + (@$suma_subtotal * 0.18); ?>" readonly />
</div>
