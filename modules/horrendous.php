<?php if ($type === "head") { ?>
    <title>Looplegangers</title>
    <meta name="description" content="A collection of loopalikes the community has noticed between the Loopheads and pop-culture.">
    <script type="text/javascript" src="js/lightbox.js" defer></script>
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/horrendous.json");
        $horrendous = json_decode($json, true);
        include "modules/nav.php";
?>

<div id="container">

    <div id="about">
        <p><big>The Most Horrendous</big></p>
        <p><small>The most horrendous loopheads from each drop, as voted on by the community.</small></p>
        <hr noshade>
    </div>

    <?php include 'modules/back-to-top.html'; ?>

    <div class="drop">
        <?php $count = 0; while ( $count < count($horrendous) ) { ?>
            <div class="comp">
                <a href="https://loopheadexplorer.io" target="_blank"><button class="label">
                    <p>Airdrop <?php echo $count + 1 ?></p>
                </button></a>
                <a href="<?php echo $horrendous[$count]["explorer"] ?>" target="_blank"><button class="label">
                    <p><b><big>#<?php echo $horrendous[$count]["id"] ?></big></b></p>
                    <p><?php echo $horrendous[$count]["name"] ?></p>
                </button></a>
                <?php if ($horrendous[$count]["id"] === "????") { ?>
                    <img loading="lazy" src="images/unknown.png" alt="Loophead #<?php echo $horrendous[$count]["id"] ?>"/>
                <?php } else { ?>
                    <img loading="lazy" src="images/<?php echo $horrendous[$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $horrendous[$count]["id"] ?>"/>
                <?php } ?>
            </div>
        <?php $count++; } ?>
    </div>

</div>

<?php } ?>