<?php

    echo "test";

    $servername = "localhost";
    $username = "IDAW";
    $password = "IDAW";

    //on tente d'établir la connexion
    try {
        $conn = new PDO("mysql:host=$servername;dbname=TP3users", $username, $password);
        //On définit la méthode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCPETION);
        echo "connexion réussie";
    }

    //on capture les exceptions, si une exception est lancée, on affiche les infos relatives à celles-ci
    catch(PDOException $e){
        echo "error" . $e->getMessage();
    }
    



?>