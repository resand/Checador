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
  
  
  
  

  <title>Checador </title>
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
        
        <li class="">
          <a href="#">PERSONAL</a>
        </li>
        <li class="active">
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
<div class="login3">
  <div class="cabezera" align="center" ><h4>SALIDA</h4></div>
  <form action="altas.php" method="post">
      <table align="center">
        <tr>
          <td>
            <label id="clave"name="clave"style="color:green;"><b>CLAVE</b></label>

          </td>
           <td>
            <input type="text"  id="clave"name="clave" placeholder="Digita tu clave" autofocus class=""/>

          </td>
           
        </tr>
        <tr>
          <td>
            <label id="nombre" name="nombre" style="color:green;"><b>NOMBRE</b></label>
           </td>
           <td>
            <input type="text" id="nombre" name="nombre"  placeholder="Nombre"class=""/>
           </td>

        </tr>
        <tr>
          <td>
            <label id="hora" name="hora" style="color:green;"><b>HORA</b></label>
            
          </td>
          <td>
            <input type="time" name="hora" id="hora"/>

            

          </td>

        </tr>
        <tr>
          <td>
             <label id="fecha" name="fecha" style="color:green;"><b>FECHA</b></label>

          </td>
          <td>
            <input type="text" name="fecha" id="fecha" placeholder=""/>
          </td>

        </tr>
        

      </table><br>
      <center>
       <input type="submit" class="btn btn-success btn-large" value="Terminar El Dia"  />
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

  