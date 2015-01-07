<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 
?>
<label for="proveedor_id" class="Form-label">Proveedor</label>
<select class="Form-inputText-small Form-select" name="proveedor_id" id="proveedor_id">
    <?php query_table_option("SELECT * FROM proveedor ORDER BY proveedor_id DESC", 'proveedor_id', 'proveedor'); ?>
</select>
