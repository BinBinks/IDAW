<?php
    require_once('template_header.php')
?>
<DOCTYPE html>
    <html>
        <head>
            <metadata charset="utf-8">
            <title>TP1</title>
            <link rel="stylesheet" href="style.css" type="text/css">
        </head>
        <body>
            <header>Projet</header>
            <?php 
                require_once('template_menu.php');
                renderMenuToHTML('projets');
            ?>
            <article>
                
            </article>   
            <?php
                require_once('template_footer.php');
            ?> 
        </body>
    </html>  