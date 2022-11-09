<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Calculo ICM y metabolismo basal</title>
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
	<h2>Calculo ICM y metabolismo basal</h2>
	
	<?php
	
	$errores="";
	
	if (isset($_POST['sexo'])) {
	
		$sexo = $_POST['sexo'];
		
	}
	
	if (isset($_POST['edad'])) {
		if($_POST['edad']>0 && $_POST['edad']<100){
		$edad = $_POST['edad'];
		}else {
			$errores = $errores . "-La edad introducida es incorrecta";
			}
	}
	
	if (isset($_POST['altura'])) {
		if($_POST['altura']>50 && $_POST['altura']<270){
		$altura = $_POST['altura'];
		}else{
			$errores = $errores . "-La altura introducida es incorrecta";
			}
	}
	
	if (isset($_POST['peso'])) {
		if($_POST['peso']>25 && $_POST['peso']<600){
		$peso = $_POST['peso'];
		}else{
			$errores = $errores . "-El peso introducido es incorrecta";
			}
	}
	
	
	$imc = $peso/(pow(($altura * 0.01),2));
	
	$imc_resultado = "";
	
	if($imc < 18.5){
		$imc_resultado = "peso es inferior al normal";
		}elseif($imc > 18.5 && $imc < 24.9){
			$imc_resultado = "peso es normal";
			}elseif($imc > 24.9 && $imc < 29.9){
				$imc_resultado = "peso es superior al normal";
				}else{
					$imc_resultado = "peso es de obesidad";
					}
	
	if($sexo=="Hombre"){
	$basal = (10*$peso)+(6.25*$altura)-(5*$edad)+5;
		}else{
		$basal = (10*$peso)+(6.25*$altura)-(5*$edad)-161;
		}
		
		//control de errores
	  if($errores === ""){
 		  $errores = $errores . "No se han encontrado errores.";
	  }
	  
	?>
	<div name="sexo">
		Tu sexo es <b><?php echo $sexo; ?></b>
	</div>
	<div name="edad">
		Tu edad es de <b><?php echo $edad; ?> años</b>
	</div>
	<div name="altura">
		Tu altura es de <b><?php echo $altura; ?> cm</b>
	</div>
	<div name="peso">
		Tu peso es de <b><?php echo $peso; ?> kg</b>
	</div>
	<div name="imc">
		Tu IMC es de <b><?php echo round($imc,2); ?> </b>por lo que tu <b><?php echo $imc_resultado; ?></b>
	</div>
	<div name="basal">
		Tu tasa metabólica basal en cal/día es de <b><?php echo $basal; ?></b>
	</div>
	
	
	<p><b>Errores: </b><em><?php echo $errores; ?></em></p>
	<a id="inicio" href="../../../que_luq_m/index.html"><b>Inicio</b></a>
		<a id="inicio" href="../../../que_luq_m/4/c/index.html"><b>Volver al formulario</b></a>
	</body>
</html>

