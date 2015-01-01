<?php 
session_start();

include '/vue/nav.php';

    //Inclusion de la Controleur

    include '/controleur/login/Check_login.class.php';
    include '/controleur/content/Content.class.php';


    //Inclusion du modele

    include '/modele/login/login_functions.php';
    include '/modele/content/content_functions.php';




    //Inclusion de la vue

    include '/vue/login/login.php';
    include '/vue/content/content.php';




include '/vue/footer.php';

?>