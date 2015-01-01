<?php

    if (isset($_SESSION['id'])){
        $content_user = new Content();
        $content_user->showContent();

    }else{
        echo 'Rien a afficher';
    }



?>
