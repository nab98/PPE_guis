<?php
$bdd = new PDO('mysql:host=localhost;dbname=eleve;charset=utf8', 'root', '');
try
{
    if($bdd = new PDO('mysql:host=localhost;dbname=eleve;charset=utf8', 'root', ''));
    echo"connexion reussi";
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<h1>connect</h1>
</header>
<!--
    <?php
    //require_once 'user2.php';
    //$newuser = new Inscription($login,$pass);
    //$newuser->getName();
    //$login = "Ledorf";
    //$pass = 2020;
   if (isset($_POST['nom']))
   {
    print $_POST['nom']; 
   }

    include_once("./poo/from.php");
?>
-->
    
</body>
</html>