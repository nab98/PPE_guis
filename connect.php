<?php
$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
try
{
    if($bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', ''));
    echo"connexion reussi";
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
    //require_once 'user2.php';
    //$newuser = new Inscription($login,$pass);
    //$newuser->getName();
    //$login = "Ledorf";
    //$pass = 2020;
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
        public function __construct($cursus, $campus, $niveau, $formation, $nom, $prenom, $mail, $telephone, $etude)
        {
                $this->cursus = $_POST['cursus'];
                $this->campus= $_POST['campus'];
                $this->niveau = $_POST['niveau'];
                $this->formation = $_POST['formation'];
                $this->nom = $_POST['nom'];
                $this->prenom = $_POST['prenom'];
                $this->mail = $_POST['mail'];
                $this->telephone = $_POST['telephone'];
                $this->etude = $_POST['commentaire'];


        }
        //getter
    
    }
   if (isset($cursus) && isset($campus) && isset($niveau) && isset($formation) && isset($nom) && isset($prenom)  && isset($mail) && isset($telephone) && isset($etude))
   {
     $sql = $bdd->prepare("insert into 'eleves'('cursus','campus','niveau','formation','nom','prenom','telephone','mail','etudes') values ($cursus, $campus, $niveau, $formation, $nom, $prenom, $telephone, $mail, $etude)");
     $sql-> execute();
   }
   if($sql)
   {
    echo 'Données insérées';
  }else
  {
    echo "Échec de l'opération d'insertion";
  }
?>