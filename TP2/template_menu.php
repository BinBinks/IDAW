<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
        'accueil' => array( 'Accueil' ),
        'cv' => array( 'CV' ),
        'projets' => array('Projets')
    );
    echo "<nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li><a ";
        if($currentPageId == $pageId){
            echo " id=\"selected\" ";
        }
        echo "href=index.php?page=" . $pageId . "><span>$pageParameters[0]</span></a></li>\n";
        }
    echo "</ul></nav>";
    }
?>