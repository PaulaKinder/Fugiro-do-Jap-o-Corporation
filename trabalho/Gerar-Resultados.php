<head>
    <title> Fugiro do Japão Corporation </title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style type="text/css">
        body{background: rgb(176,224,230)}
        h1{color: rgb(0,128,128); font-family:'monospace'}
        

        .box {
            display: flex;
            align-items: center;
            flex-flow: row wrap;
            justify-content: center;
        }
        .one {
            flex: 1 1 auto;
        }
    </style>
	<h1>ESSES SÃO SEUS RESULTADOS</h1> 
</head>
<h3>PISOS</h3> 
<?php
	$temp= rand(-10,40);

	if($temp <= 15) {
		echo "É necessário ligar os pisos. O valor atual da temperatura é de: " .$temp;
		echo "<br>";
	} else {
		echo "É necessário desligar os pisos. O valor atual da temperatura é de: " .$temp;
		echo "<br>";
        }
?>
<h3>SILOS</h3>
<?php
	$sonar= rand(0,3);
	// foi utilizado um silo de 3M, e considerado que a medição é feita em metros;

	if($sonar <= 0) {
		echo "É necessário abastecer o silo, pois ele se encontra vazio. O valor encontrado foi de: " .$sonar;
		echo "<br>";
	} else {
		echo "Não é nessário abastecer o silo. O valor encontrado foi de: " .$sonar;
		echo "<br>";
        }
?>
<h3>RESERVATÓRIO DE ÁGUA</h3>
<?php
	$agua= rand(0,1000);

	if($agua <= 0) {
		echo "É necessário reabastecer o reservatório, pois ele se encontra vazio. O valor encontrado foi de:  " .$agua;
		echo "<br>";
	} else {
		echo "Não é necessário reabastecer o reservatório, pois ele se encontra com " .$agua;
		echo " litros de água";
		echo "<br>";
        }
?>
<h3>LONAS</h3>
<?php
	$lumens= rand(0,100000);

	if($lumens >= 5000) {
		echo "É necessário acionar as lonas da granja. O valor atual de lúmens é de: " .$lumens;
		echo "<br>";
	} else {
		echo "É necessário desacionar as lonas da granja. O valor atual de lúmens é de: " .$lumens;
		echo "<br>";
        }
?>
<h3>   </h3>
<h3>   </h3>
<h3>   </h3>
<input type="button" value="Novos Resultados" onClick="window.location.reload()">