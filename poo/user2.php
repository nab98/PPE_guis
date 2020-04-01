<?php
	//la classe en PHP 7
	/* 
		Nom, des propriétés et des méthodes ou fonction, constructeur

	*/
		class User{
			public $user_Name;
			public $user_pass;
	

			//constructeur
			public function __construct($user_name,$user_pass){
                    
					$this->user_name = $user_name;
                    $this->user_pass = $user_pass;
            }

            //getter
            public function getName(){
                return '<p>Login : '.$this->user_name. '<br> pass: '.$this->user_pass.'<p>';
            }
		
		}
		

		
		
		


		

?>