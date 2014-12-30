<!DOCTYPE html>
<!--[if lt IE 7]>      <html  lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html  lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html  lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html  lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>FastERP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="views/css/styles.css" />

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section class="Container Container-index">
            <article class="Login">
                <figure class="Logo-Container">
                    <img src="views/img/logo.png" class="Logo-image" width="150" alt="FastERP">
                    <!-- <figcaption>FastERP</figcaption> -->
                </figure>

                <form action="views/homepage.php" class="Form">
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
        <script>window.jQuery || document.write('<script src="views/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="views/js/main.js"></script> -->
    </body>
</html>