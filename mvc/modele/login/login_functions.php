<?php

        function bd_check($log){

            try {
                $bd = new PDO('mysql:host=localhost;dbname=test','Charles','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }

            catch (Exception $e){
                die('Erreur : '. $e->getMessage());
            }

            $retour = $bd->prepare('SELECT password, id FROM access WHERE login = :log');
            $retour->bindParam('log',$log,PDO::PARAM_STR);
            $retour->execute();

            $retour_detail = $retour->fetch();
            $retour->closeCursor();

            return $retour_detail;

        }











?>

