<?php
//on démarre la session
    session_start();
    $_SESSION['prenom'] = "Rasmus";
    $_SESSION['age'] = 50;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
         <h1><?php print "Bonjour".$_SESSION['prenom']; ?></h1>
    </header>
    <p>
    <a href="session_php.php">Vos informations</a>
    </p>
    <pre>
        <?php  
            //print_r($_SERVER);
        ?>
    </pre>
</body>
</html>









    