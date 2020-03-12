
<section>
	<h2>Contact</h2>
		<form action="contact.php" method="post">
			<!--<label for="Cursus">Cursus</label>-->
			<input type="text" name="Cursus" id="Cursus" placeholder="Cursus">
			<input type="text" name="Campus" id="Campus" placeholder="Campus">
			<input type="text" name="niveau" id="niveau" placeholder="niveau">
			<input type="text" name="formation" id="formation" placeholder="formation">
			<!--<label for="nom">Nom</label>-->
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" autofocus>

			<!--<label for="prenom">Prénom</label>-->
			<input type="text" name="nom" id="prenom" placeholder="prénom" required aria-required="true">

			<!--<label for="prenom">Email</label>-->
			<input type="email" name="mail" id="mail" placeholder="mail" required aria-required="true">
			<!--<label for="prenom">Votre message</label>-->
			<input type="text" name="telephone" id="telephone" placeholder="Telephone">
			<input type="text" name="commentaire" id="commentaire" placeholder="niveau d'etudes actuel" >
			<input type="submit" value="Envoyer">
		</form>
</section>
