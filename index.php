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
        <script src="stylesheets/js/jquery.easydropdown.js"></script>
        <script src="stylesheets/js/modernizr.custom.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>


		<title>Curso de Programación Web con CodeIgniter</title>
    </head>
<body onload="initialize()">
    <section class="nav">
        <div class="container">
            <nav class="top-nav">
                <ul>
                    <li id="logo"><a href="#top">Inicio</a>

                    </li>
                    <li><a href="#informacion">Información</a>

                    </li>
                    <li><a href="#ubicacion">Ubicación</a>
                </ul>
            </nav>
            <a href="http://goo.gl/forms/NVkHBklEaw" class="btn btn-small right-float round-corners">¡REGISTRARSE!</a>
        </div>
    </section>

    <header id="top">
        <section class="row-fluid">
            <div class="container">
                 <h1>Curso de Desarrollo Web</h1>
                 
                 <hr class="hr_thick_w">

				 <div class="container">
					 	<div class="col6">
						 	<h3>Desarrolla Sitios Web con el framework para PHP <a href="http://escodeigniter.com/guia_usuario/" target="_blank">CodeIgniter.</a></h3>
                            <p class="justified">CodeIgniter es un Framework para el Desarrollo de Aplicaciones - una herramienta - para la gente que crea webs usando PHP. Su meta es permitirte desarrollar proyectos mucho más rápido que si lo hicieras escribiendo el código desde cero, proporcionando una gran variedad de librerías para las tareas más corrientes, así como una interfaz simple y una estructura lógica para acceder para acceder a estas librerías. CodeIgniter te permite concentrarte en tu proyecto minimizando la cantidad de código necesaria para una tarea determinada.</p>
					 	</div>
				 </div>
				 	<hr class="hr_thin_w">
			</div>
        </section>
    </header>

    <section id="informacion" class="typography">
        <div class="container">
            <h1 class="title">Información</h1>

            <div class="row">
                <div class="col12">
                    <h3>Fecha: </h3><h4>Sábado 18 de Octubre del 2014 </h4>
                    <h3>Horario: </h3><h4>09:00 AM-12:00 PM</h4>
                    <h3>Temario: </h3>
                    <ul>
                        <li>Fundamentos de PHP</li>
                        <li>Introducción a CodeIgniter</li>
                        <li>Entendiendo el patrón Modelo-Vista-Controlador</li>
                        <li>Helpers</li>
                        <li>Librerías</li>
                        <li>Vistas</li>
                        <li>Controladores</li>
                        <li>Modelos</li>
                    </ul>
                    <h3>Costo: </h3><h4>Completa y Totalmente Gratis!</h4>
                </div>
            </div>

        </div>
    </section>
    
    <section id="ubicacion" class="buttons">
        <div class="container">
            	<h1 class="title">Ubicación</h1>

            <div class="row">
                <div class="col12">
                     <h4>Avenida Lázaro Cárdenas, frente al Centro Estatal de Oncología, donde antes era la hora de la papa, actualmente son oficinas de tres pisos con un espectacular de Mejora Finanzas. El curso sera en la primera puerta del tercer piso.</h4>
                </div>
                <div id="map_canvas" style="width:80%; height:500px; margin: 0 auto;"></div>
            </div>
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



    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(19.816694, -90.524395);
            var settings = {
                zoom: 15,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Høgenhaug</h1>'+
                    '<div id="bodyContent">'+
                    '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
                    '</div>'+
                    '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var companyPos = new google.maps.LatLng(19.816694, -90.524395);
        var companyMarker = new google.maps.Marker({
              position: companyPos,
              map: map,
              title:"Lugar del Curso"
          });




    }
    </script>



</body>
</html>