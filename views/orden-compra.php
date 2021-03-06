<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Orden de Compra - FastERP</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/styles.css" />

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header class="Header">
			<nav class="Menu">
				<div class="Menu-logo">
					<figcaption class="Menu-logoContainer">
						<img src="img/logo.png" width="50px" class="Menu-logo-image" alt="FastERP">
					</figcaption>
				</div>
				<ul class="Menu-list">
					<li class="Menu-item"><a href="homepage.php" class="Menu-link">General</a></li>
					<li class="Menu-item"><a href="ventas.php" class="Menu-link">Ventas</a></li>
					<li class="Menu-item"><a href="compras.php" class="Menu-link active">Compras</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Inventario</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Informe</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Ayuda</a></li>
				</ul>
				<div class="Menu-logoUsuario">
					<figcaption class="Menu-logoContainer">
						<img src="img/user.png" width="50px" class="Menu-logoImage" alt="FastERP">
						<figcaption class="Menu-logoDescription"><a href="#">D.Rojas</a></figcaption>
					</figcaption>
				</div>
			</nav>
		</header>


		<section class="Container Container-1x">
			<h1 class="title">Orden de Compra</h1>
			<article class="Container-item">
				<div class="Container-item-left">
					<div class="Form-inputGroup left">
					    <label for="almacen" class="Form-label">Almacen</label>
					    <select class="Form-inputText-small Form-select" id="almacen">
					    	<option value="">Central</option>
					    	<option value="">Sur</option>
					    	<option value="">Norte</option>
					    	<option value="">Centro</option>
					    	<option value="">Este</option>
					    </select>
					    <button class="btn btn-blue btn-md">Sub Almacen</button>
					</div>
					<div class="Form-inputGroup">
						<br>
						<br>
						<br>
					    <form onsubmit="return false;" action="">
				    		<input type="text" class="Form-inputText-small ac_input" size="40" id="producto" placeholder="Producto" autofocus />
					    	<button class="btn btn-blue" id="nuevoProducto">Nuevo</button>
					    </form>
					</div>
				</div>
				<div class="Container-item-right">
					<br>
					<div class="Form-inputGroup">
					    <label for="fecha" class="Form-label">Fecha</label>
					    <input type="date" class="Form-inputText-small" id="fecha" />
					    <span class="Form-icon icon-checkmark"></span>
					</div>
				</div>
			</article>
			
			<div class="clear"></div>

			<article class="Container-item">
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
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</article>
			<article class="Container-item">
				<div class="Container-item-left">
					<div class="Form-inputGroup">
						<textarea class="Form-inputText-small Form-textarea" cols="80" rows="20" placeholder="Notas y Observaciones"></textarea>
					</div>
					<div class="Form-inputGroup inline-block">
						<input type="checkbox" id="finalizar" class="switch" /> 
					    <label for="finalizar" class="Form-label">Finalizar</label>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="Form-inputGroup inline-block">
						<input type="checkbox" id="aprobado" class="switch" /> 
					    <label for="aprobado" class="Form-label">Aprobado</label>
					</div>
				</div>
				<div class="Container-item-right">
					<div class="Form-inputGroup">
					    <label for="total" class="Form-label">Total</label>
					    <input type="text" class="Form-inputText-small" id="total" placeholder="0.00" />
					</div>
				</div>
			</article>
			
			<div class="clear"></div>

		</section>

		<footer class="Footer">
			<p>Control Group SAC Derechos de autor ® 2015</p>
		</footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>