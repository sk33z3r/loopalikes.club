<?php if ($type === "head") { ?>
    <title>The Loophead Graveyard</title>
    <meta name="description" content="Burned or otherwise lost forever Loopheads.">
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/graveyard.json");
        $graveyard = json_decode($json, true);
        include "modules/nav.php";
?>

<div id="container">
    <div id="about">
        <p><big>The Loophead Graveyard</big></p>
        <p><small>Loopheads that have been lost forever to dead wallets.</small></p>
        <hr noshade>
    </div>
    <?php include 'modules/back-to-top.html'; ?>
    <?php $count = 0; while ( $count < count($graveyard) ) { ?>
        <div class="comp">
            <div class="char">
                <h2>Loophead #<?php echo $graveyard[$count]["id"] ?></h2>
                <img loading="lazy" src="images/<?php echo $graveyard[$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $graveyard[$count]["id"] ?>" />
            </div>
            <div class="lore">
                <p>Final Resting Address: <?php echo $graveyard[$count]["details"][0] ?></p>
                <div class="grave-row">
                    <a href="<?php echo $graveyard[$count]['details'][1] ?>" target="_blank"><button class="grave-btn">Loophead on Lexplorer</button></a>
                    <a href="<?php echo $graveyard[$count]['details'][2] ?>" target="_blank"><button class="grave-btn">Wallet on Lexplorer</button></a>
                </div>
                <h4>What Happened?</h4>
                <p><?php echo $graveyard[$count]['details'][3] ?></p>
            </div>
        </div>
        <?php if ( $count < (count($graveyard) - 1) ) { echo '<div class="text"><hr noshade></div>'; } ?>
    <?php $count++; } ?>
</div>

<?php } ?>