<?php

//Appel du modele
include 'modele/content/content_functions.php';


class Content {
    private $_id;
    private $_contenu;
    private $_contenu_detail;
    private $test;

    function __construct(){
        $this->setId();
        $this->getContent();
        $this->showContent();
    }

    private function getContent(){
        $this->_contenu = bd_getContent($this->_id);
    }

    public function showContent(){

    }


    private function setId(){
        $this->_id = $_SESSION['id'];
    }


}


//Appel de la vue
include 'vue/content/content.php';

?>
