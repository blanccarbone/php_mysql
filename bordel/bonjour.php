
<?php 
	$_GET["repeter"] = (int) $_GET["repeter"];

	if (isset($_GET["nom"]) AND isset($_GET["prenom"]) AND isset($_GET["repeter"])) {

		if (($_GET["repeter"] >= 0) AND ($_GET["repeter"]) < 100) {

	 		for ($i=0; $i < $_GET["repeter"]; $i++) { 
	 			echo "</strong><p>Bonjour " . $_GET["prenom"] . " " . $_GET["nom"] ."</p>";
	 		}
		}else{
			echo "<strong>La valeur de repeter = " . $_GET["repeter"] . " " ." et ne convient pas";
		}


		



	 		

	 }else {
	 	echo "<strong>Les valeurs que vous tentez d'afficher n'existent pas</strong></br>";
	 	echo "<strong>". $_GET["nom"] ."</strong></br>";
	 	echo "<strong>". $_GET["prenom"] ."</strong></br>";
	 	echo "<strong>". $_GET["repeter"] ."</strong></br>";
	 	}?>

