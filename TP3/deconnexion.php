<?php 
    session_start();
    session_unset();
    session_destroy();
    echo "<p>Vous avez été déconnecté : <a href='login.php'>Se reconnecter. </a> <p>";
?>
