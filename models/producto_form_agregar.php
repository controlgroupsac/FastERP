<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 
?>
<h2 class="title">Nuevo Producto</h2>
<form action="javascript: fn_agregar_producto();" method="post" id="frm_producto">
    <table class="Table Table-striped Table-bordered">
        <tbody>
            <tr>
                <td>Producto</td>
                <td><input name="producto"  class="Form-inputText-small" type="text" id="producto" size="30" value="Cerveza Barena" required autofocus /></td>
            </tr>
            <tr>
                <td>
                    <div class="Form-inputGroup inline-block">
                        <label for="unidad_id" class="Form-label">Unidad</label>
                    </div>
                </td>

                <td>
                    <div class="Form-inputGroup">
                        <select class="Form-inputText-small Form-select" name="unidad_id" id="unidad_id">
                            <?php query_table_option("SELECT * FROM unidad ORDER BY unidad", 'unidad_id', 'unidad'); ?>
                        </select>
                        <input type="text" class="Form-inputText-small" size="4" name="unidad_cont" id="unidad_cont" value="18" title="unidades que contiene el producto Ej. Pack X12 = unidad_id y unidad_cont = 12 bot." required />
                    </div> 
                </td>
            </tr>
            <tr>
                <td><label for="compuesto" class="Form-label">Compuesto</label> </td>
                <td><input type="checkbox" id="compuesto" class="switchYESNO" /> </td>
            </tr>
            <tr>
                <td>Código</td>
                <td><input name="ean_code"  class="Form-inputText-small" type="text" id="ean_code" value="000984123458" required /></td>
            </tr>
            <tr>
                <td>Precio Neto</td>
                <td><input name="precio_neto"  class="Form-inputText-small" type="text" id="precio_neto" value="5" required /></td>
            </tr>
            <tr>
                <td>                    
                    <div class="Form-inputGroup">
                        <label for="impuesto1" class="Form-label">Impuesto</label>
                    </div>                 
                </td>
                <td>             
                    <div class="Form-inputGroup">
                        <label for="impuesto1" class="Form-label">imp1.</label>
                        <input type="text" class="Form-inputText-small" size="4" name="impuesto1" id="impuesto1" value="18" required />
                    </div>   
                    <div class="Form-inputGroup">
                        <label for="impuesto2" class="Form-label">imp2.</label>
                        <input type="text" class="Form-inputText-small" size="4" name="impuesto2" id="impuesto2" value="2" required />
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td>tipo</td>
                <td>
                    <select class="Form-inputText-small Form-select" name="tipo" id="tipo">
                        <option value="1">Ensamblado</option>
                        <option value="2">Final</option>
                        <option value="3">Producción</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Serie</td>
                <td><input name="serie"  class="Form-inputText-small" type="text" id="serie" size="30" value="002" required /></td>
            </tr>
            <tr>
                <td>Precio Compra</td>
                <td><input name="precio_compra"  class="Form-inputText-small" type="text" id="precio_compra" size="30" value="6" required /></td>
            </tr>
            <tr>
                <td>Activo</td>
                <td><input name="activo" type="checkbox" id="activo" size="30" checked /></td>
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
	function fn_agregar_producto(){
		var str = $("#frm_producto").serialize();
		$.ajax({
			url: '../models/producto_agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				fn_cerrar();
				fn_buscar_producto();
			}
		});
	};
</script>