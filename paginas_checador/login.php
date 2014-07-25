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
  
  
  
  

	<title>Inicio de sesion</title>
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
        <li class="active">
          <a href="#">INICIO DE SESION</a>
        </li>
				
        <li>
          <a href="#">REGLESAR AL INICIO DEL SISTEMA</a>
        </li>
        
      </ul>
    </nav>
  </div>
</header>
<br>
<br>
<br>
<h1 align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #39872D; font-weight: bold;">PEPINOS S.A DE C.V.</h1>
<br>
<br>
<div class="login">
  <div class="cabezera" ><h4>Inicio de Sesion</h4></div>
  <form action="verificar.php" method="post">
      <table>
        <tr>
          <td>
            <label id="usuario"name="contrseña"style="color:green;"><b>USUARIO</b></label>

          </td>
           <td>
            <input type="text"  id="usuario"name="usuario" placeholder="Usuario" autofocus class="usuario"/>

          </td>
           
        </tr>
        <tr>
          <td>
            <label id="contraseña" name="contraseña" style="color:green;"><b>CONTRASEÑA</b></label>
           </td>
           <td>
            <input type="password" id="contraseña" name="contraseña"  placeholder="*********"class="password"/>
           </td>

        </tr>
        <tr>
          <td>
            
          </td>

        </tr>

      </table><br>
<input type="submit" class="btn btn-success btn-large" value="Iniciar Sesion"/>
  </form>

</div>

</body>


</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<footer align="center"style="font-family: Arial, Helvetica, sans-serif; font-size: xx-large; color: #39872D; font-weight: bold;">
		<p><h6>software versio 1.0 para el checado de horas de los trabajadores
		el mal uso de este sistema puede causar sanciones con forme a la ley de privacidad de usuarios</h6></p>
		<P><h6>Desarrollado por PEPINOS S.A. DE C.V </h6></p>
		
			
	</footer>
	