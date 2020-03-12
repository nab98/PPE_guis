
<section>
	<h2>Contact</h2>
		<form action="/contact.php" method="post">
			<label for="nom">Votre Nom</label>
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" autofocus>

			<label for="prenom">Votre Prénom</label>
			<input type="text" name="nom" id="prenom" placeholder="prénom" required aria-required="true">

			<label for="prenom">Votre Mail</label>
			<input type="email" name="mail" id="mail" placeholder="mail" required aria-required="true">
			<label for="prenom">Votre message</label>
			<!-- faut virer le text area c'est juste un type texte-->
			<!--<textarea name="commentaire" id="commentaire" cols="30" rows="10">Commentaire</textarea> -->
			<input type="text" name="commentaire" id="commentaire" placeholder="message" >
			<input type="submit" value="Envoyer">
			
		</form>
</section>
