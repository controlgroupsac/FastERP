<?php 
    echo "Almacen: " .$_REQUEST['almacen']. "<br>";
    echo "ubicacion: " .$_REQUEST['ubicacion']. "<br>";
    echo "dependencia: " .$_REQUEST['dependencia']. "<br>";
?>

    <label for="proveedor" class="Form-label">Proveedor</label>
    <select class="Form-inputText-small Form-select" name="proveedor" id="proveedor">
        <?php query_table_option("SELECT * FROM proveedor ORDER BY proveedor", 'proveedor_id', 'proveedor'); ?>
    </select>
    <span class="Form-icon icon-checkmark"></span>
    <button class="btn btn-blue" id="nuevoProveedor">Nuevo</button>

