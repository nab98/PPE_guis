

<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
</head>
<body>
    <header>
         <h1><?php print "Bonjour".$_SESSION['prenom']; ?></h1>
    </header>
    <main>
        <p><?php print "Hello tu as ".$_SESSION['age']." ans"; ?></p>
    </main>
</body>
</html>
<?php
    session_destroy();
?>