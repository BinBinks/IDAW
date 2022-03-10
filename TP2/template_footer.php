<footer>
    <?php 
    if($_GET['lang'] == 'fr'){
        echo "<p>Auteur : Mahery RANDRIAMANGA </p>";
    }
    else{
        echo "<p>Author : Mahery RANDRIAMANGA </p>";
    }
    echo "<a href=index.php?page=" . $currentPageId . "&lang=en>Anglais</a> <b> </b>";
    echo "<a href=index.php?page=" . $currentPageId . "&lang=fr>Français</a>";
    ?>


</footer>
</body>
</html>


