<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=1"/>
		
		<link rel="stylesheet" href="css/styleguide.css" type="text/css">
		<link rel="stylesheet" href="css/schema_r.css" type="text/css">
        
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/jquery.easydropdown.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/login.js"></script>


		<title>Iniciar Sesión</title>
    </head>
<body>
    <section class="nav">
        <div class="container">
            <nav class="top-nav">
                <ul>
                    <li id="logo"><a href="#top">Inicio</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    
    <footer class="credits">
        <div class="container">
            <div class="row">
            <div class="col2"></div>
                <div class="col8">
                <form id="form-login">
                    <div class="form-group">
                          <label for="emailID">Usuario</label>
                          <input type="email" class="form-element" id="usuario" placeholder="Usuario">
                         </div>
                         <div class="form-group">
                          <label for="passwordID">Contraseña</label>
                          <input type="email" class="form-element" id="contrasena" placeholder="Contraseña">
                         </div>
                         
                         <button type="submit" class="btn btn-primary" id="iniciar">Iniciar</button>
                    </form>
                    <span class="error"></span>
                    	
                </div>
                <div class="col2"></div>
            </div>
        </div>
    </footer>
   
   	<a href="#top"><i id="#top" class="icon-up-open"></i></a>
   	
    <script type="text/javascript">
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 700);
                    return false;
                }
            }
        });
    </script>

</body>
</html>