<?php 
    setcookie("style", $_GET['css'],time()+3600);
    session_start();
?> 

<?php 
    if(!isset($_GET['css'])){
        $_GET['css'] = "style1";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP3 Mahery</title>
        <?php
            if (isset($_GET['css'])){
                echo "<link rel='stylesheet' href='" . $_GET['css'] . ".css'" . " type='text/css'>";
            }
            else if (isset($_COOKIE['style'])){
                echo "<link rel='stylesheet' href='" . $_COOKIE['style'] . ".css'" . " type='text/css'>";
            } else {
                echo "<link rel='stylesheet' href='style1.css'" . " type='text/css'>";
            }
         ?>
    </head>
    <body>

    <?php 
    if (isset($_SESSION['login'])){
    echo "<h1>Bienvenu " . $_SESSION['login'] . "</h1>"; 
    }
    else{
        echo "<a href='login.php'>Se connecter</a>";
    }
    ?>

    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>

    <a href=deconnexion.php>Deconnexion</a>
    
</body>
</html>