<?php

// Inclusion du modele
include 'modele/login/login_functions.php';


// Démarage du controleur

class Check_login
{
	
	private $_login;
	private $_password;
	private $_ID;

	function __construct($log, $pass)
	{
		$this->setLogin($log);
		$this->setPassword($pass);

	}

	public function check_login(){

		$bd_check_login = bd_check($this->getLogin());


		if ($bd_check_login['password'] == $this->getPassword()){

			//Definition de la session

			$_SESSION['id'] = $bd_check_login['id'];

			return true;
		}else{
			session_destroy();
			return false;
		}


	}


	private function setLogin($setlog){
		$this->_login = $setlog;
	}

	private function setPassword($setpass){
		$this->_password = $setpass;
	}

	public function getLogin(){
		return $this->_login;
	}

	private function getPassword(){
		return $this->_password;
	}


	private function getId(){

	}
	
}

// Inclusion de la vue
include 'vue/login/login.php';

 ?>