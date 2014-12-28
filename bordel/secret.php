<?php
if((isset($_POST["flog"])) OR (isset($_POST["fpass"]))){
	$validation = false;
	$access = array(
		"Charles" => "root"
		);
	$login = $_POST["flog"];
	$password = $_POST["fpass"];
	foreach($access as $logOK => $passOK){
		if($logOK == $login AND $passOK == $password){
			$validation = true;
			$_SESSION["log"] = $login;
			$_SESSION["pwd"] = $password;
			$_SESSION["session_ouverte"] = true;
			echo "<h1 class='text-center'>Vous avez acces aux données !!!</h1>";
			echo '<h2 class="text-center">Début de session</h2>';
		}else{
			echo "<h1 class='text-center'>Echec il faut réessayer</h1>";
			$_SESSION["session_ouverte"] = false;
		}
	}
}else{}
?>