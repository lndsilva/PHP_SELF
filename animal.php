<?php 


	class Animal{
		

		public function teste(){
			echo "\$this é instância de ".
			get_class($this) . "<br>";

			// chama Animal::fala(), independentemente do
    		// tipo da instância
    		echo "self::fala()";
    		self::fala();

		}

		public function fala(){
			echo "<br> Oi <br>";
		}

	}

	class Gato extends Animal{

		public function fala(){
			echo "Miau <br>";
		}
	}
	// Nesse caso, self != get_class($this)
	// - self == Animal
	// - get_class($this) == Gato

	$gato = new Gato();
	$gato->teste();

	echo "<br>";

	//Nesse caso, self == get_class($this) == Animal

	$animal = new Animal();
	$animal->teste();


 ?>