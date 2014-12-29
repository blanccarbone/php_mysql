<?php 

class Connexion
{
	
	private $_login;
	private $_password;
	private $_access = array("Charles" => "root");

	function __construct($log, $pass)
	{
		$this->_login = $log;
		$this ->_password = $pass;
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
			return '<h3>Vous êtes connecté</h3>';
		}else{
			return '<h3>Pas connecté</h3>';
		}
	}
	
	
}
 ?>