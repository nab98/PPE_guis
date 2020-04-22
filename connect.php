<?php
//session_start();
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
    /*class User{
        public $cursus;
        public $campus;
        public $niveau;
        public $formation;
        public $nom;
        public $prenom;
        public $mail;
        public $telephone;
        public $etude;*/

        
        function construct()
        {
              $cursus = $_POST['cursus'];
              $campus= $_POST['campus'];
              $niveau = $_POST['niveau'];
              $formation = $_POST['formation'];
              $nom = $_POST['nom'];
              $prenom = $_POST['prenom'];
              $mail = $_POST['mail'];
              $telephone = $_POST['telephone'];
              $etude = $_POST['commentaire'];
              /* $cursus = array(":cursus"=>$_POST['cursus']);
              $campus = array(":campus"=>$_POST['campus']);
              $niveau = array(":niveau"=>$_POST['niveau']);
              $formation = array(":formation"=>$_POST['formation']);
              $nom = array(":$nom"=>$_POST['$nom']);
              $prenom = array(":prenom"=>$_POST['prenom']);
              $mail = array(":mail"=>$_POST['mail']);
              $telephone = array(":telephone"=>$_POST['telephone']);
              $etude = array(":etude"=>$_POST['etude']);*/
        }
    construct();
    var_dump($_POST);
   if (isset($_POST['Envoyer']))
   {
    $sql = $bdd->prepare('INSERT INTO eleves (cursus, campus, niveau , formation , nom , prenom , telephone , mail , etudes) VALUES ($cursus, $campus, $niveau, $formation, $nom, $prenom, $telephone, $mail, $etude)');
     if(isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']) and isset($_POST['cursus']))
     {
      construct();
      $sql->execute();
      if($sql)
      {
      echo 'Données insérées';
      }
      else
      {
        echo "Échec de l'opération d'insertion";
      }
    }
}
      
?>