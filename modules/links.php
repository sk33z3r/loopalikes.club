<?php if ($type === "head") { ?>
    <title>Loophead Info & Guides</title>
    <meta name="description" content="A collection of links and guides from the Loophead community.">
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/guides.json");
        $guides = json_decode($json, true);
        include "modules/nav.php";
?>

<div id="container">
    <div id="about">
        <p><big>Loophead Info & Guides</big></p>
        <p><small>A collection of links and guides from the Loophead community.</small></p>
        <hr noshade>
    </div>
    <div class="links">
        <?php $count = 0; while ($count < count($guides) ) { ?>
            <a href="<?php echo $guides[$count]["url"] ?>" target="_blank"><button><?php echo $guides[$count]["title"] ?></button></a>
        <?php $count++; } ?>
    </div>
</div>

<?php } ?>