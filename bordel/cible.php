<?php session_start(); ?>

<?php include("navi.php"); ?>

<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['form_name']; ?> !</p>
<p>Ton mot de passe est : <?php echo $_POST["form_pass"]; ?></p>
<p>Votre nationalitée est <?php echo $_POST["form_select"]; ?></p>
<br>

<h3>Voici le texte que vouez avez rentré :</h3>
<p class="center"><?php echo $_POST["form_txt"]; ?></p>

<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page index.php.</p>



<h1>Traitement de fichier recu</h1>
<h2>Informations sur le fichier recu :</h2>

<?php 
	$fname = $_FILES["form_file"]["name"];
	$ftype = $_FILES["form_file"]["type"];
	$fsize = $_FILES["form_file"]["size"];
	$ftmp = $_FILES["form_file"]["tmp_name"];
	$ferror = $_FILES["form_file"]["error"];

	$infofichier = pathinfo($fname);
	$fextention = $infofichier["extension"];

	$extensionok = array("txt", "png", "jpg",);

 ?>


<!-- ANALYSE DU FICHIER -->

<?php 
	if (isset($_FILES["form_file"]) AND $ferror == 0) {
		if ($fsize <= 1000000) {

			if (in_array($fextention, $extensionok)) {
				echo "<p>Tout est ok</p>";
				move_uploaded_file($ftmp, "php_mysql/uploads/");
				echo "<p>Le fichier a été déplacé avec succès</p>";

			}
			
		}
	}
 ?>


 <?php include("footer.php"); ?>