<?php 
session_start();

include 'vue/nav.php';

    //Inclusion de la Controleur

    include 'controleur/login/check_login.class.php';
    include 'controleur/content/Content.class.php';


include 'vue/footer.php';

?>