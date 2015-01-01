




<?php

	try {

		$bdd = new PDO('mysql:host=localhost;dbname=test', 'Charles', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
		
	}


    $reponse = $bdd->prepare("SELECT nom FROM jeux_video WHERE prix >= :lim");
	$reponse->bindParam('lim',$_POST['choix'],PDO::PARAM_INT);
	$reponse->execute();


	echo '<ul class="list-group">';

    while($donnees = $reponse->fetch()){
?>
    	<li class="list-group-item"><?php echo $donnees['nom'];?></li>


<?php
}
echo'</ul>';

?>




