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

<?php
	$sonar= rand(0,3);
	// foi utilizado um silo de 3M, e considerado que a medição é feita em metros;

	if($sonar = 0) {
		echo "É necessário abastecer o silo, pois ele se encontra vazio. O valor encontrado foi de: " .$sonar;
		echo "<br>";
	} else {
		echo "Não é nessário abastecer o silo. O valor encontrado foi de: " .$sonar;
		echo "<br>";
        }
?>

<?php
	$agua= rand(0,1000);

	if($agua = 0) {
		echo "É necessário reabastecer o reservatório, pois ele se encontra vazio. O valor encontrado foi de:  " .$agua;
		echo "<br>";
	} else {
		echo "Não é necessário reabastecer o reservatório, pois ele se encontra com " .$agua;
		echo " litros de água";
		echo "<br>";
        }
?>

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