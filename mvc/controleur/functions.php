

<?php 


function connexion(){

	$access = array(
		"Charles" => "root");



	// Test de session

	if (isset($_SESSION["session_log"]) AND isset($_SESSION["session_pass"])){
		foreach ($access as $key => $value) {
						if ($_SESSION["session_log"] == $key AND $_SESSION["session_pass"] == $value) {
							echo "<h2 class = text-center>vous êtes déja connecté</h2>";
							return true;
						}
					}			
	}

	// Test des informations du formulaire

	if (isset($_POST["flog"]) AND isset($_POST["fpass"])) {
		$log = $_POST["flog"];
		$pass = $_POST["fpass"];




		foreach($access as $logOK => $passOK) {
			if ($logOK == $log AND $passOK == $pass) {
				$_SESSION["session_log"] = $log;
				$_SESSION["session_pass"] = $pass;

				echo "<h1 class='text-center'>Vous avez acces aux données !!!</h1>";
				return true;

			}else{
				echo "<h1 class='text-center'>Erreur</h1>";
				return false;

			}
		}



	}else{
		return false;

	}
}


?>

