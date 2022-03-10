<?php
    require_once("template_header.php");   
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    require_once("template_menu.php");
    renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
    $pageToInclude = $currentPageId . ".php";
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