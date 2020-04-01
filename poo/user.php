<?php
	//la classe en PHP 7
	/* 
		Nom, des propriétés et des méthodes ou fonction, constructeur

	*/
		class User{
			public $firstName;
			public $lastname;
			public $age;

			//constructeur
			public function __construct($firstName,$lastname){
					print "hello je suis le constructeur<br>";
					print " ".$firstName." ".$lastname."<br>";
                    
					$this->firstName = $firstName;
					$this->lastname = $lastname;


			}
			//getter
		
		}
		//donnée externes
		
		$nom = "Ledorf";
		$prenom = "Rasmus";

		$newuser = new User($nom,$prenom);
		$newuser_2 = new User("Gius","Mili");
		
		print $newuser_2->firstName;


		

?>