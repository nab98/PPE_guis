<?php
	const titre ="EDW école pour les métiers du web";
?>


<!DOCTYPE HTML>
<html lang="fr">
<?php
	include_once("./template/head.inc.php");
?>
<body>

	<ul>
		<li><a href="index.php?page=1">&lt;/&gt;  L'école</a></li>
		<li><a href="index.php?page=2">&lt;/&gt; Formations</a></li>
		<li><a href="index.php?page=3">&lt;/&gt;  Contact</a></li>
		
	</ul>
	<main>
		<h1><?php print titre ?></h1>

	
			<?php
				if(isset($_GET['page'])){
				//variable pour $_GET
				$root = $_GET['page'];
						if($root==1){
							include_once("./template/index.inc.php");
						}
						if($root==2){
							include_once("./template/portfolio.inc.php");
						}
						if($root==3){
							include_once("./template/contact.inc.php");
						}
						else if($root>3 || $root==0){
							echo '<p class="warning"><i class="far fa-frown"></i>La page demandée n\'existe pas!!</p>';
							//header("HTTP/1.0 404 Not Found");
						}

				}
					else{
						include_once("./template/index.inc.php");
					}

			?>
	</main>
	<?php
	include_once("./template/footer.inc.php");
	?>
</body>
</html>	