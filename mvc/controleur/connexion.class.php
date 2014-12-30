<?php 

class Connexion
{
	
	private $_login;
	private $_password;
	private $_access = array("Charles" => "root");
	private bdd =

	function __construct($log, $pass)
	{
		$this->setLogin($log);
		$this->setPassword($pass);
	}

		
	public function checkInfo(){

		foreach ($this->_access as $key => $value) {
			if ($this->_login == $key AND $this->_password == $value)  {
				return true;
			}else{
				unset($this->_login);
				unset($this->_password);
				return false;
			}
		}
		

	}

	public function stateSession(){
		if ($this->checkInfo() == true) {
			return '<h3 class="text-center">Vous êtes connecté</h3>';
		}else{
			return '<h3 class="text-center">Pas connecté</h3>';
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
	
	
}
 ?>