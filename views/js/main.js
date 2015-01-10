$(function () {
	$("#proveedor").hover(function(){$("#proveedorDetalle").addClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#ordenDeCompra").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").addClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#inventario").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").addClass("block"); $("#inventarioDetalle2").addClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#ordenDeVenta").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").addClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#cliente").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").addClass("block"); });
});


/**/
/**/
/**/
/*BEGIN POP UP functions*/
function fn_cerrar(){
  $.unblockUI({ 
    onUnblock: function(){
      $("#div_oculto_proveedor").html("");
      $("#div_oculto_producto").html("");
      $("#div_oculto_compra_det").html("");

      fn_buscar_compra_det();
      fn_buscar_proveedor();
      fn_buscar_producto();
    }
  }); 
};

/*PROVEEDOR*/
$("#nuevoProveedor").click(function () {
  $("#div_oculto_proveedor").load("../models/proveedor_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_proveedor'),
      css:{
        top: '20%'
      }
    }); 
  });
});

function fn_buscar_proveedor(){
  var str = $("#frm_buscar_proveedor").serialize();
  $.ajax({
    url: '../models/proveedor_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_proveedor").html(data);
    }
  });
}




/*PRODUCTO*/
$("#nuevoProducto").click(function () {
  $("#div_oculto_producto").load("../models/producto_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_producto'),
      css:{
        top: '1%'
      }
    }); 
  });
});

function fn_buscar_producto(){
  var str = $("#frm_buscar_producto").serialize();
  $.ajax({
    url: '../models/producto_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_producto").html(data);
    }
  });
}







function fn_agregar_compra(){
  var compra = $("#frm_compra_agregar").serialize();
  $.ajax({
    url: '../models/compra_agregar.php',
    data: compra,
    type: 'post',
    success: function(data){
      if(data != "")
        alert(data);
    }
  });
};


$('#finalizar').change(function() {
  if($(this).is(":checked")) {
    var notas = document.getElementById('notas').value;
    var neto = document.getElementById('neto').value;
    var descuento = document.getElementById('descuento').value;
    var impuesto1 = document.getElementById('impuesto1').value;
    var total = document.getElementById('total').value;
    $.ajax({
      data: "notas=" +notas+ "&neto=" +neto+ "&descuento_p=" +descuento+ "&impuesto1=" +impuesto1+ "&total=" +total,
      url: '../models/compra_agregar_finalizar.php',
      type: "post"
    });
    $("#bloquear").block({
       message: "",
       css: { backgroundColor: '#fff', color: '#fff'}
    })
    // console.log("yay" +notas + neto + descuento + impuesto1 + total);
  }else {
    $("#bloquear").unblock();
  }
});


/*COMPRA DETALLE*/
$("#nuevoCompraDet").click(function () {
  $("#div_oculto_compra_det").load("../models/compra_det_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_compra_det'),
      css:{
        top: '5%'
      }
    });
  });
});
function fn_buscar_compra_det(){
  var str = $("#frm_buscar_compra_det").serialize();
  $.ajax({
    url: '../models/compra_det_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_compra_det").html(data);
    }
  });
  $.ajax({
    url: '../models/compra_det_listar_precios.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_compra_precios").html(data);
    }
  });
}
function fn_eliminar_compra_det(compra_det_id){
  var respuesta = confirm("Desea eliminar esta compra?");
  if (respuesta){
    $.ajax({
      url: '../models/compra_det_eliminar.php',
      data: 'compra_det_id=' + compra_det_id,
      type: 'post',
      success: function(data){
        if(data!="")
          alert(data);
        fn_buscar_compra_det()
      }
    });
  }
}
function fn_mostrar_frm_modificar_compra_det(compra_det_id){
  $("#div_oculto_compra_det").load("../models/compra_det_form_modificar.php", {compra_det_id: compra_det_id}, function(){
    $.blockUI({
      message: $('#div_oculto_compra_det'),
      css:{
        top: '5%'
      }
    }); 
  });
};