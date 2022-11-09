<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Recogida de datos</title>
    <style>
    #inicio {
	  color: black;
	  text-decoration: none;
	  font-size: medium;
	  border-style:outset;
	  padding: 2px;
	  }
	#inicio:hover{
	  color:grey;
	  }
    </style>
  </head>

  <body>
    <h1>Datos Introducidos</h1>
    <?php
	  
	  
	  
	  $errores="";
	  
	  //validación name
	  $pattern_name = "/^[A-Z][a-z]* [A-Z][a-z]*( [A-Z][a-z]*)?$/";
	  if (preg_match($pattern_name,$_POST['nombre'])){
	  $name = $_POST['nombre'];
	  }else{
		  $errores = $errores . "-Este Nombre y Apellido ". $_POST['nombre'] ." no es válido.\n";
	  }
	  //validación mail
      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST['email'];
	  } else {
		$errores = $errores . "-Este email ". $_POST['email'] . " no es correcto.\n";
	  }
	  //validacion teléfono
	  $pattern_telf="/[0-9]{9}/";
	  if(!empty($_POST['telefono'])){
	  if(preg_match($pattern_telf,$_POST['telefono'])){
      $telefono = $_POST['telefono'];   
	  } else {
		  $errores = $errores . "-Este teléfono ". $_POST['telefono']. " no es correcto. \n";
	  }}
	  
	  //validacion web
	  $pattern_web="/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?/";
	  if(!empty($_POST['web'])){
	  if(preg_match($pattern_web,$_POST['web'])){
      $telefono = $_POST['web'];   
	  } else {
		  $errores = $errores . "-Esta web ". $_POST['web']. " no es correcta. \n";
	  }}
	  
      $consulta = $_POST['consulta'];
    
	  if($errores === ""){
 		  $errores = $errores . "No se han encontrado errores.";
	  }
	  
    ?>

    <p>Your name is <?php echo $name; ?>.</p>
    <p>You email is <?php echo $email; ?>.</p>
    <p>Your telefono is <?php echo $telefono; ?>.</p>
    <p>Your web is <?php echo $web; ?>.</p>
    <p>Your consulta is <?php echo $consulta; ?>.</p>
    
    <p><b>Errores: </b><em><?php echo $errores; ?></em></p>

	<a id="inicio" href="../../../que_luq_m/index.html"><b>Inicio</b></a>
	<a id="inicio" href="../../../que_luq_m/3/a/index.html"><b>Volver al formulario</b></a>
  </body>
</html>
