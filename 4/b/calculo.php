<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>Resultado calculo</title>
		<style>
		body{
			background-color: b50707;
			text-align: center;
			color: white;
			}
		#inicio {
			color: white;
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
		<h2>Resultado calculo área y perímetro</h2>
		<div>
		<?php
		if (isset($_POST['lado'])) {
		$lado = $_POST['lado'];
		$area = $lado*$lado;
		$perimetro = $lado + $lado + $lado + $lado;
		//area
		echo "El área de este cuadrado es ".$area." mm<br>";
		
		//perimetro
		echo "El perímetro de este cuadrado es ".$perimetro." mm";
		}
		?>
		</div><br>
		<div>
		<a id="inicio" href="../../../que_luq_m/index.html"><b>Inicio</b></a>
		<a id="inicio" href="../../../que_luq_m/4/b/index.html"><b>Volver al formulario</b></a>
		</div>
	</body>
</html>

