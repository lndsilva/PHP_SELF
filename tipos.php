<?php 

	$carro = array("Volvo","BMW","Toyota");

	var_dump($carro);

	echo "<br>";

	echo "<br> Os carros " . $carro[0] . ", " . $carro[1] . ", " . $carro[2] . ". ";

	echo "<br>";

	$count = count($carro);


	for ($i=0; $i < $count; $i++) {

		echo "<br>";	 
		
		echo $carro[$i];

		echo "<br>";
	}


 ?>