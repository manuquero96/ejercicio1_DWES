<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Resultado juego</title>
	<style>
	body{
		  background-color:#262262;
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
  <h2>Resultados</h2>
  
  <?php
	if (isset($_POST['opciones'])) {
    $j1 = $_POST['opciones'];
    $j2 = rand(1,5);
    
	//elección random J2	
	switch ($j2) {
		case 1:
			$j2 = "piedra";
			break;
		case 2:
			$j2 = "papel";
			break;
		case 3:
			$j2 = "tijera";
			break;
		case 4:
			$j2 = "lagarto";
			break;
		case 5:
			$j2 = "spock";
			break;
	}
	echo "El jugador 1 eligió ". $j1 ." y el jugador 2 eligió ". $j2. "<br>";
	//J1 gana
    if(
    $j1 == "piedra" && $j2 == "lagarto" || 
    $j1 == "piedra" && $j2 == "tijera" || 
    $j1 == "papel" && $j2 == "piedra" || 
    $j1 == "papel" && $j2 == "spock" || 
    $j1 == "tijera" && $j2 == "papel" || 
    $j1 == "tijera" && $j2 == "lagarto" || 
    $j1 == "lagarto" && $j2 == "papel" || 
    $j1 == "lagarto" && $j2 == "spock" || 
    $j1 == "spock" && $j2 == "piedra" || 
    $j1 == "spock" && $j2 == "tijera"){
		echo "Jugador 1 es el ganador";
		} elseif (//J2 gana
		$j2 == "piedra" && $j1 == "lagarto" || 
		$j2 == "piedra" && $j1 == "tijera" || 
		$j2 == "papel" && $j1 == "piedra" || 
		$j2 == "papel" && $j1 == "spock" || 
		$j2 == "tijera" && $j1 == "papel" || 
		$j2 == "tijera" && $j1 == "lagarto" || 
		$j2 == "lagarto" && $j1 == "papel" || 
		$j2 == "lagarto" && $j1 == "spock" || 
		$j2 == "spock" && $j1 == "piedra" || 
		$j2 == "spock" && $j1 == "tijera"){
			echo "Jugador 2 es el ganador";
			}else{//empate
				echo "Empate";
				}
    
	}
	
  ?>
  <br>
  <br>
	<a id="inicio" href="../../../que_luq_m/index.html"><b>Inicio</b></a>
	<a id="inicio" href="../../../que_luq_m/4/a/index.html"><b>Volver a jugar</b></a>
	<div><p>Este juego sigue estas condiciones</p><img src="../a/img/reglas.png" alt="reglas"></div>
	
  
  </body>
 </html>
