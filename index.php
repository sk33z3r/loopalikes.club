<?php
    $page = $_GET["page"];
    if ($page == '') { $page = "home"; }
    include "modules/header1.html";
    $type = "head"; include "modules/$page.php";
    include "modules/header2.html";
    $type = "body"; include "modules/$page.php";
    include "modules/footer.html";
?>