<!DOCTYPE html>
<html>
    <head>
        <title>TP3 test connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  

        <?php

            $servername = "localhost";
            $username = "IDAW";
            $password = "IDAW";
            $mabase = "TP3users";

            $conn = mysqli_connect($servername, $username, $password, $mabase);

            if(!$conn){
                die('Erreur : ' . mysqli_connect_error());
            }
            echo "Connexion réussie";
            
            $req = "select * from user_login";

            $res = $conn->query($req);

            echo "<table>";
            while($data = mysqli_fetch_array($res)){
                echo "<tr><td>" . $data['login'] . "</td><td>" . $data['pseudo'] . "</td></tr>";
            }

            echo "</table>";

            mysqli_close($conn);
        ?>
    </body>
</html>
