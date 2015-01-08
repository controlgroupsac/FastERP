<?php
    include "../config/conexion.php"; 
    include("../queries/query.php"); 
?>
<h2 class="title">Nuevo Detalle Compra</h2>
<form action="javascript: fn_agregar_compra_det();" method="post" id="frm_compra_det">
    <table class="Table Table-striped Table-bordered">
        <tbody>
            <input type="text" name="compra_id" id="compra_id" value="<?php echo $_COOKIE['compra_id']; ?>" />
            <tr>
                <td>
                    <div class="Form-inputGroup inline-block">
                        <label for="producto" class="Form-label">producto</label>
                    </div>
                </td>

                <td>
                    <div class="Form-inputGroup">
                        <select class="Form-inputText-small Form-select" name="producto_id" id="producto_id">
                            <?php query_table_option("SELECT * FROM producto ORDER BY producto", 'producto_id', 'producto'); ?>
                        </select>
                    </div> 
                </td>
            </tr>
            <tr>
                <td>cantidad</td>
                <td><input name="cantidad"  class="Form-inputText-small" type="text" id="cantidad" size="30" value="2" required autofocus /></td>
            </tr>
            <tr>
                <td><label for="precio_compra">Precio</label> </td>
                <td><input name="precio_compra"  class="Form-inputText-small" type="text" id="precio_compra" value="50" required /></td>
            </tr>
            <tr>
                <td>Descuento</td>
                <td><input name="descuento"  class="Form-inputText-small" type="text" id="descuento" value="18" required /></td>
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
                            <?php query_table_option("SELECT * FROM unidad ORDER BY unidad", 'unidad_id', 'unidad'); ?>
                        </select>
                    </div> 
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input name="agregar" class="btn btn-blue" type="submit" id="agregar" value="Agregar" />
                    <input name="cancelar" class="btn btn-blue"  type="button" id="cancelar" value="Cancelar" onclick="fn_cerrar();" />
                </td>
            </tr>
        </tfoot>
    </table>
</form>
<script language="javascript" type="text/javascript">
	function fn_agregar_compra_det(){
		var str = $("#frm_compra_det").serialize();
		$.ajax({
			url: '../models/compra_det_agregar.php',
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