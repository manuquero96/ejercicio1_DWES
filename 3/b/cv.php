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
	  div{
		  text-align: center;
		  }
	h2{
		color: 2fbbe7;
		}
    </style>
  </head>
  <body>
	  	  
	  <?php 
	  
	  //control fecha hoy
	  $today=date('Y-m-d'); 
	  
	  //variable error vacia
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
	  
	  //validacion nacimiento
	  if(!empty($_POST['nacimiento'])){
		  if($_POST['nacimiento']>$today){
			$errores = $errores . "-Esta fecha ". $_POST['nacimiento']. " de nacimiento no es correcta. \n";
		  }   
			else {
				  $nacimiento = $_POST['nacimiento'];
	  }
	  }
    
	 //validacion nombre experiencia
     
     if(!empty($_POST['experiencia_nombre'])){
		 
		 $experiencia_nombre = $_POST['experiencia_nombre'];
		 
		 } else{
			$errores = $errores . "-Nombre del puesto no introducido. \n";

			 }
      
	//validacion nombre empresa
      if(!empty($_POST['experiencia_empresa'])){
		 
		 $experiencia_empresa = $_POST['experiencia_empresa'];
		 
		 }else{
			 $errores = $errores . "-Nombre de empresa no introducido. \n";
			 }
       
		 
    //validacion fecha inicio experiencia
    if(!empty($_POST['experiencia_fecha_inicio'])){
		  if($_POST['experiencia_fecha_inicio']>$today){
			$errores = $errores . "-Esta fecha ". $_POST['experiencia_fecha_inicio']. " no es correcta. \n";
		  }  elseif($_POST['experiencia_fecha_inicio']>$_POST['experiencia_fecha_fin']){
			  $errores = $errores . "-La fecha inicio no puede ser mayor que la de fin. \n";
			  } 
			else {
				  $experiencia_fecha_inicio = $_POST['experiencia_fecha_inicio'];
	  }
	  }
    
    //validacion fecha fin experiencia
    if(!empty($_POST['experiencia_fecha_fin'])){
		  if($_POST['experiencia_fecha_fin']>$today){
			$errores = $errores . "-Esta fecha ". $_POST['experiencia_fecha_fin']. " no es correcta. \n";
		  }  elseif($_POST['experiencia_fecha_fin']===$today){
			  $experiencia_fecha_fin = "Actual";
			  } elseif($_POST['experiencia_fecha_inicio']>$_POST['experiencia_fecha_fin']){
				$errores = $errores . "-La fecha final no puede ser menor que la de inicio. \n";
				}else {
				  $experiencia_fecha_fin = $_POST['experiencia_fecha_fin'];
	  }
	  }
	  
	  //validacion funciones
	  if(!empty($_POST['experiencia_funciones'])){
	 $experiencia_funciones = $_POST['experiencia_funciones'];
    }
    
		
	//validacion formacion nombre
	if(!empty($_POST['formacion_nombre'])){
	 $formacion_nombre = $_POST['formacion_nombre'];
    }
    
    //validacion formacion instituto
	if(!empty($_POST['formacion_instituto'])){
	 $formacion_instituto = $_POST['formacion_instituto'];
    }
    
    	 
    //validacion fecha inicio formacion
    if(!empty($_POST['formacion_fecha_inicio'])){
		  if($_POST['formacion_fecha_inicio']>2022){
			$errores = $errores . "-Esta fecha ". $_POST['formacion_fecha_inicio']. " no es correcta. \n";
		  } elseif($_POST['formacion_fecha_inicio']>$_POST['formacion_fecha_fin']){
			 $errores = $errores . "-La fecha inicio no puede ser mayor que la de fin. \n";
			  }  
			else {
				  $formacion_fecha_inicio = $_POST['formacion_fecha_inicio'];
	  }
	  }
    
    //validacion fecha fin formacion
    if(!empty($_POST['formacion_fecha_fin'])){
		  if($_POST['formacion_fecha_fin']>2022){
			$errores = $errores . "-Esta fecha ". $_POST['formacion_fecha_fin']. " no es correcta. \n";
		  }  elseif($_POST['formacion_fecha_fin']==2022){
			  $formacion_fecha_fin = "Actual";
			  } elseif($_POST['experiencia_fecha_inicio']>$_POST['experiencia_fecha_fin']){
				$errores = $errores . "-La fecha final no puede ser menor que la de inicio. \n";
				}
				else {
				  $formacion_fecha_fin = $_POST['formacion_fecha_fin'];
	  }
	  }
    
    //validacion competencias
  if(!empty($_POST['competencias'])){
	 $competencias = $_POST['competencias'];
    }
		

     
		//control de errores
	  if($errores === ""){
 		  $errores = $errores . "No se han encontrado errores.";
	  }
	  
	  
	  ?>
	  
	  <!--Datos personales-->
	  <div name="datos_personales">
	  <h2>Datos Personales</h2>
	  <h4><?php echo $name; ?></h4>
	  <p><b>Dirección de correo electrónico: </b><?php echo $email; ?></p>
	  <p><b>Número de teléfono: </b><?php echo $telefono; ?></p>
	  <p><b>Fecha de nacimiento: </b><?php echo $nacimiento; ?></p>
	  </div>
	  
	        
       <!--Experiencia laboral-->
       <div name="experiencia_laboral">
		<h2>Experiencia Laboral</h2>
       <p><b>Puesto: </b> <?php echo $experiencia_nombre; ?>.</p>
       <p><b>Empresa: </b> <?php echo $experiencia_empresa; ?>.</p>
       <p>[<?php echo $experiencia_fecha_inicio; ?> - <?php echo $experiencia_fecha_fin; ?>]</p>
       <?php if (!$experiencia_funciones == ""){
		?>
       <p><b>Principales actividades y responsabilidades: </b></p>
       <p><?php echo $experiencia_funciones; ?></p>
       <?php } ?>
	   </div>
    
		<!--Formacion-->
		<div name="formacion">
		<h2>Formación</h2>
		<p><b>Nombre: </b> <?php echo $formacion_nombre; ?>.</p>
		<p><b>Instituto: </b> <?php echo $formacion_instituto; ?>.</p>
		<p>[<?php echo $formacion_fecha_inicio; ?> - <?php echo $formacion_fecha_fin; ?>]</p>
		</div>
		
		<!--Idiomas-->
		<div name="idiomas">
		<?php if (!$_POST['idiomas'] == ""){
		?>
		<h2>Idiomas</h2>
		<?php } ?>
		<?php 
		if(!empty($_POST['idiomas'])){
		foreach($_POST['idiomas'] as $selected){
		echo $selected."</br>";
		}
		}?>
		</div>
		
		<!--Competencias Digitales-->
		<div name="competencias">
		<?php if (!$_POST['competencias'] == ""){
		?>
		<h2>Competencias Digitales</h2>
		<p><b>Mis capacidades digitales</b></p>
		<?php } ?>
		<p><?php echo $competencias; ?></p>
		</div>
		
		<!--Permiso de conducir-->
		<div name="conducir">
		<?php if (!$_POST['conducir'] == ""){
		?>
		<h2>Permiso de conducir</h2>
		<?php } ?>
		<?php 
		if(!empty($_POST['conducir'])){
		foreach($_POST['conducir'] as $selected){
		echo $selected."</br>";
		}
		}?>
		</div>
		
		
		
		
		
		<!--errores-->
    
    <p><b>Errores: </b><em><?php echo $errores; ?></em></p>
	  
	 <a id="inicio" href="../../../que_luq_m/index.html"><b>Inicio</b></a>
	<a id="inicio" href="../../../que_luq_m/3/b/index.html"><b>Volver al formulario</b></a>
  </body>
</html>
