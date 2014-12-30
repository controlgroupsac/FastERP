<?php  
	include("../queries/functions.php");
?>

<link rel="stylesheet" href="../views/css/styles.css" />

<section class="Container Container-index">
    <article class="Login Login-white">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="Form">
            <div class="Form-inputGroup">
                <span class="Form-info icon-user"></span>
                <label for="almacen" class="Form-label"></label>
                <input type="text" class="Form-inputText" name="almacen" id="almacen" placeholder="almacen" />
            </div>
            <div class="Form-inputGroup">
                <span class="Form-info icon-user"></span>
                <label for="ubicacion" class="Form-label"></label>
                <input type="text" class="Form-inputText" name="ubicacion" id="ubicacion" placeholder="ubicacion" />
            </div>
            <div class="Form-inputGroup">
                <span class="Form-info icon-lock"></span>
                <label for="dependencia" class="Form-label"></label>
                <input type="text" class="Form-inputText" name="dependencia" id="dependencia" placeholder="dependencia" />
            </div>
            <div class="Form-inputGroup">
                <button class="btn btn-green btn-lg btn-block-75">Registrar</button>
            </div>
        </form>
    </article>
</section>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../views/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="../views/js/main.js"></script> -->

<?php  
	@include("functions.php");

	if(empty($_POST['almacen']) || empty($_POST['ubicacion']) || empty($_POST['dependencia'])) {
		
	}else{
		$query_insertar_almacen = "INSERT INTO `fasterp`.`almacen` (`almacen`, `ubicacion`, `dependencia`) 
								   VALUES ($almacen, $ubicacion, $dependencia)";
		insert_table($query_insertar_almacen);		
	}
?>