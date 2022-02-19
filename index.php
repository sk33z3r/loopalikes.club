<?php
    if (!empty($_GET["page"])) { $page = $_GET["page"]; } else { $page = "home"; }
    include "modules/header1.html";
    $type = "head"; include "modules/$page.php";
    include "modules/header2.html";
    $type = "body"; include "modules/$page.php";
    include "modules/footer.html";
?>