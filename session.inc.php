<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <label for="prenom">Votre Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="prénom" required aria-required="true">

            <label for="age">Votre Age</label>
            <input type="number" name="age" id="age" placeholder="Age" required aria-required="true">
            <input type="submit" value="Envoyer">
        </form>
    </main>
    
</body>
</html>