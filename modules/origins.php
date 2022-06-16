<?php if ($type === "head") { ?>
    <title>Loophead Origin Stories</title>
    <meta name="description" content="A collection of origin stories for the Loopheads characters.">
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/lore.json");
        $lore = json_decode($json, true);
        include "modules/nav.php";
?>

<div id="container">
    <div id="about">
        <p><big>Loophead Origin Stories</big></p>
        <p><small>A collection of origin stories for the Loopheads characters.</small></p>
        <hr noshade>
    </div>
    <div id="to-top">
        <a href="#about"><small>BACK TO TOP ^</small></a>
    </div>
    <?php $count = 0; while ( $count < count($lore) ) { ?>
        <div class="comp">
            <div class="char">
                <h2>#<?php echo $lore[$count]["id"] ?> : <?php echo $lore[$count]["name"] ?></h2>
                <img loading="lazy" src="images/<?php echo $lore[$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $lore[$count]["id"] ?>" />
            </div>
            <div class="lore">
                <?php foreach ( $lore[$count]["lore"] as $p ) { ?>
                    <p><?php echo $p ?></p>
                <?php } ?>
            </div>
        </div>
        <?php if ( $count < (count($lore) - 1) ) { echo '<div class="text"><hr noshade></div>'; } ?>
    <?php $count++; } ?>
</div>

<?php } ?>