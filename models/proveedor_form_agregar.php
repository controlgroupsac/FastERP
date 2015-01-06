<?php 
    include "../config/conexion.php"; 
    include("../queries/query.php"); 
?>
<h1>Nuevo Proveedor</h1>
<form action="javascript: fn_agregar_proveedor();" method="post" id="frm_buscar_proveedor">
    <table class="formulario">
        <tbody>
            <tr>
                <td>Proveedor</td>
                <td><input name="proveedor"  class="Form-inputText-small" type="text" id="proveedor" size="16" class="required" value="Backus" /></td>
            </tr>
            <tr>
                <td>RUC</td>
                <td><input name="ruc"  class="Form-inputText-small" type="text" id="ruc" size="40" class="required" value="10123456789" /></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><input name="direccion"  class="Form-inputText-small" type="text" id="direccion" size="40" class="required" value="Av. Tomasa TTito S/N" /></td>
            </tr>
            <tr>
                <td>Contacto</td>
                <td><input name="contacto"  class="Form-inputText-small" type="text" id="contacto" size="30" class="required" value="Contacto Apellidos Apellidos" /></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input name="telefono"  class="Form-inputText-small" type="text" id="telefono" size="30" class="required" value="984 123458" /></td>
            </tr>
            <tr>
                <td>activo</td>
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
	function fn_agregar_proveedor(){
		var str = $("#frm_buscar_proveedor").serialize();
		$.ajax({
			url: '../models/proveedor_agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				fn_cerrar();
				fn_buscar_proveedor();
			}
		});
	};
</script>