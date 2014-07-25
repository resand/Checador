<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 <link rel="stylesheet" href="estilos.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
 
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
  
  
  

	<title>Inicio </title>
</head>

<body>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      
     
    </div>
    <nav class="" role="navigation">
      <ul class="nav navbar-nav">
      	 <li class="pepino">
      	 	 <a href="./" class="" role="banner">PEPINOS S.A. DE C.V.</a>

      	 </li>
        <li class="">
          <a href="#">INICIO</a>
        </li>
				
        <li class="active">
          <a href="#">PERSONAL</a>
        </li>
        <li>
          <a href="#">CHECADOR</a>
        </li>
        <li class="">
          <a href="#">REPORTES</a>
        </li>
        <li class="">
          <a href="#">CERRAR SESIÓN</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<br>
<br>
<br>
<h1 align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #39872D; font-weight: bold;">PEPINOS S.A DE C.V.</h1>
<div class="login2">
  <div class="cabezera" align="center" ><h4>REGISTRO DE USUARIO</h4></div>
  <form action="altas.php" method="post">
      <table align="center">
        <tr>
          <td>
            <label id="nombre"name="contrseña"style="color:green;"><b>NOMBRE</b></label>

          </td>
           <td>
            <input type="text"  id="nombre"name="nombre" placeholder="Nombre" autofocus class=""/>

          </td>
           
        </tr>
        <tr>
          <td>
            <label id="apellidos" name="apellidos" style="color:green;"><b>APELLIDOS</b></label>
           </td>
           <td>
            <input type="text" id="apellidos" name="apellidos"  placeholder="apellidos"class=""/>
           </td>

        </tr>
        <tr>
          <td>
            <label id="area" name="area" style="color:green;"><b>AREA</b></label>
            
          </td>
          <td>
            <select name="area" id="area">
              <option style="color:green;">selecciona una opcion</option>

            </Select>

          </td>

        </tr>
        <tr>
          <td>
             <label id="rfc" name="rfc" style="color:green;"><b>RFC</b></label>

          </td>
          <td>
            <input type="text" name="rfc" id="rfc" placeholder="teclea tu RFC"/>
          </td>

        </tr>
        <tr>
          <td>
            <label id="horario" name="horario"  style="color:green"><b>Horario</b></label>
          </td>
          <td>
            <input type="text" name="horario" id="horario" placeholder="Horario"/>
          </td>
        </tr>
        <tr>
          <td>
            <label id="fecha" name="fecha" style="color:green"><b>Fecha</b></label>
          </td>
          <td>
            <input type="date" name="fecha" id="fecha"/>
          </td>
        </tr>
        <tr>
          <td>
            <label id="clave" name="clave" style="color:green"><b>Clave</b></label>
          </td>
          <td>
            <input type="text"name="clave" id="clave" placeholder="Digita tu clave"/>
          </td>
        </tr>

      </table><br>
      <center>
       <input type="submit" class="btn btn-success btn-large" value="Iniciar Sesion"  />
       </center>
  </form>

</div>
</body>


</html>
<br>
<br>
<br>
<br> 




<footer align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #39872D; font-weight: bold;">
		<p><h6>software versio 1.0 para el checado de horas de los trabajadores
		el mal uso de este sistema puede causar sanciones con forme a la ley de privacidad de usuarios</h6></p>
		<P><h6>Desarrollado por PEPINOS S.A. DE C.V </h6></p>
		
			
	</footer>

	