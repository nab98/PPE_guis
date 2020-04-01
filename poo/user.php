<?php
	//la classe en PHP 7
	/* 
		Nom, des propriétés et des méthodes ou fonction, constructeur

	*/
		class User{
			public $cursus;
			public $campus;
			public $niveau;
			public $formation;
			public $nom;
			public $prenom;
			public $mail;
			public $telephone;
			public $etude;

			//constructeur
			public function __construct($cursus, $campus,$niveau, $formation, $nom, $prenom, $mail, $telephone, $etude){
					$this->firstName = $firstName;
					$this->campus= $campus;
					$this->niveau = $niveau;
					$this->formation = $formation;
					$this->nom = $nom;
					$this->prenom = $prenom;
					$this->mail = $mail;
					$this->telephone = $telephone;
					$this->etude = $etude;


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