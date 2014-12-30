<link rel="stylesheet" href="../views/css/styles.css" />

<section class="Container Container-index">
    <article class="Login">
        <figure class="Logo-Container">
            <img src="../views/img/logo.png" class="Logo-image" width="150" alt="FastERP">
            <!-- <figcaption>FastERP</figcaption> -->
        </figure>

        <form action="../views/homepage.php" class="Form">
            <p><span class="Form-messages">Usuario o contraseña incorrectos...</span></p>
            <div class="Form-inputGroup">
                <span class="Form-info icon-user"></span>
                <label for="user" class="Form-label"></label>
                <input type="text" class="Form-inputText" id="user" placeholder="username" />
                <span class="Form-icon icon-checkmark"></span>
            </div>
            <div class="Form-inputGroup">
                <span class="Form-info icon-lock"></span>
                <label for="password" class="Form-label"></label>
                <input type="text" class="Form-inputText" id="password" placeholder="password" />
                <span class="Form-icon icon-cross"></span>
            </div>
            <div class="Form-inputGroup">
                <button class="btn btn-green btn-lg btn-block-75">Ingresar</button>
            </div>
            <div class="Form-inputGroup right">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="estado" /> Recordar Usuario
                    </label>
                </div>
            </div>
        </form>
    </article>
</section>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../views/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="../views/js/main.js"></script> 