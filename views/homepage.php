<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Homepage - FastERP</title>
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
					<li class="Menu-item"><a href="homepage.php" class="Menu-link active">General</a></li>
					<li class="Menu-item"><a href="ventas.php" class="Menu-link">Ventas</a></li>
					<li class="Menu-item"><a href="compras.php" class="Menu-link">Compras</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Inventario</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Informe</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Ayuda</a></li>
				</ul>
				<div class="Menu-logoUsuario">
					<figcaption class="Menu-logoContainer">
						<img src="img/user.png" width="50px" class="Menu-logoImage" alt="FastERP">
						<figcaption class="Menu-logoDescription"><a href="#">Usuario</a></figcaption>
					</figcaption>
				</div>
			</nav>
		</header>


		<section class="Container Container-2x">
			<article class="Content">
				<div class="Content-item" id="proveedor">
					<span class="Content-icon icon-user"></span>
					<p>Proveedor</p>
				</div>
				<div class="Content-item" id="ordenDeCompra">
					<span class="Content-icon icon-coin-dollar"></span>
					<p>Orden de Compra</p>
				</div>
				<div class="Content-item" id="inventario">
					<span class="Content-icon icon-stats-dots"></span>
					<p>Inventario</p>
				</div>
				<div class="Content-item" id="ordenDeVenta">
					<span class="Content-icon icon-coin-dollar"></span>
					<p>Orden de Venta</p>
				</div>
				<div class="Content-item" id="cliente">
					<span class="Content-icon icon-users"></span>
					<p>Cliente</p>
				</div>


				<div class="Content-detail" id="proveedorDetalle">
					<a href="#"><h3 class="Content-detailTitle">Nuevo Proveedor</h3>
						<p>Ingresa un nuevo proveedor a quien </p></a>
					<a href="#"><h3 class="Content-detailTitle">Lista de pedidos</h3>
						<p>Ver o actualizar sus Proveedores</p></a>
				</div>
				<div class="Content-detail" id="ordenDeCompraDetalle">
					<a href="#"><h3 class="Content-detailTitle">Nuevo Pedido</h3>
						<p>Comprale más stock a tus proveedores</p></a>
					<a href="#"><h3 class="Content-detailTitle">Lista de pedidos</h3>
						<p>Ve o actualizar Ordenes de compra anteriores</p></a>
				</div>
				<div class="Content-detail" id="inventarioDetalle">
					<a href="#"><h3 class="Content-detailTitle">Nuevo Producto</h3>
						<p>Agregar un nuevo tipo de producto para rastrear</p></a>
					<a href="#"><h3 class="Content-detailTitle">Orden de Trabajo</h3>
						<p>Fabrique productos finales de piezas</p></a>
				</div>
				<div class="Content-detail" id="inventarioDetalle2">
					<a href="#"><h3 class="Content-detailTitle">Stock Actual</h3>
						<p>Ver lo que tiene en stock y dónde lo tiene</p></a>
					<a href="#"><h3 class="Content-detailTitle">Ajustar Stock</h3>
						<p>Fabrique productos finales de piezas</p></a>
					<a href="#"><h3 class="Content-detailTitle">Reabastecer Stock</h3>
						<p>Reabastecer productos escasos</p></a>
				</div>
				<div class="Content-detail" id="ordenDeVentaDetalle">
					<a href="#"><h3 class="Content-detailTitle">Nuevo Pedido</h3>
						<p>Vender algo a  uno de sus clientes</p></a>
					<a href="#"><h3 class="Content-detailTitle">Lista de Pedidos</h3>
						<p>Ver o actualizar Ordenes de venta anteriores</p></a>
				</div>
				<div class="Content-detail" id="clienteDetalle">
					<a href="#"><h3 class="Content-detailTitle">Nuevo Cliente</h3>
						<p>Agregar un nuevo Cliente a su lista</p></a>
					<a href="#"><h3 class="Content-detailTitle">Lista de Cliente</h3>
						<p>Ver o actualizar su Lista de Clientes</p></a>
				</div>
			</article>

			<aside class="Aside">
				<div class="Aside-item">
					<h2 class="Aside-title">Atajos</h2>
					<ul class="Aside-list">
						<li class="Aside-listItem"><span class="icon-stats-dots"></span> <a href="#"> Panel de Control</a></li>
						<li class="Aside-listItem"><span class="icon-profile"></span> <a href="#"> Informes</a></li>
						<li class="Aside-listItem"><span class="icon-cog"></span> <a href="#"> Configuraciones</a></li>
						<li class="Aside-listItem"><span class="icon-download2"></span> <a href="#"> Importar</a></li>
					</ul>
				</div>
				<div class="Aside-item">
					<h2 class="Aside-title">Prueba</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quo, in ad soluta accusantium expedita similique debitis sit tenetur nihil beatae dicta magni dolorem explicabo consequuntur deleniti sint ipsa iure.</p>
				</div>

			</aside>
		</section>

		<footer class="Footer">
			<p>Control Group SAC Derechos de autor ® 2015</p>
		</footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>