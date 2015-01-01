<?php

    function bd_getContent($id){
        try {
            $bd = new PDO('mysql:host=localhost;dbname=test','Charles','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

        catch (Exception $e){
            die('Erreur : '. $e->getMessage());
        }
        $retour = [];
        $contenu = $bd->prepare('SELECT idcontent, message FROM content WHERE id = :requid');
        $contenu->bindParam('requid', $id, PDO::PARAM_INT);
        $contenu->execute();

        while ($tab = $contenu->fetch(PDO::FETCH_OBJ)){
            echo '<h3>' . $tab->message . '</h3>';
        }

        $contenu->closeCursor();

        return $tab;
    }


?>
