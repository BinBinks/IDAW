<?php
    require_once("template_header.php");   
    $currentPageId = 'accueil';
    $currentLang = 'fr';

    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])){
        $currentLang = $_GET['lang'];
    }

    require_once("template_menu.php");
    renderMenuToHTML($currentPageId, $currentLang);
?>
<section class="corps">
<?php
    $pageToInclude = $currentLang . "/" . $currentPageId . "_" . $currentLang . ".php";
    if(isset($pageToInclude)){
        require_once($pageToInclude);
    }
    else{
        require_once("error.php");
    }
?>
</section>

<?php
    require_once("template_footer.php");
?>