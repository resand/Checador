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


		<title>Curso de Programación Web con CodeIgniter</title>
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
                <div class="col6">
                    	<h5>Cualquier duda mandar un correo a la dirección <a href="mailto:resand91@gmail.com">resand91@gmail.com</a>.</h5>
                    <p>&copy; 2014. Todos los derechos reservados.
                </div>
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