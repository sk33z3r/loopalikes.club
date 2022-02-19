<?php if ($type === "head") { ?>
    <title>Looplegangers</title>
    <meta name="description" content="A collection of loopalikes the community has noticed between the Loopheads and pop-culture.">
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/airdrop01.json");
        $loopalikes = json_decode($json, true);
?>

<div id="container">
    <?php include "modules/nav.php"; ?>
    <div class="text">
        <h1>Looplegangers</h1>
        <h3>A list of loopalikes the community has noticed between Loopheads and pop-culture.</h3>
    </div>
    <div class="text">
        <hr noshade>
    </div>
    <div class="drop-btn">
        <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
    </div>
    <div class="drop" id="drop1">
        <!-- <div class="filters">
            <button>Uncanny Valley</button>
            <button>Unique Characters</button>
        </div> -->
        <div class="category" id="drop1-valley">
            <h2>Uncanny Valley Series</h2>
            <?php $count = 0; while ( $count < count($loopalikes["valley"]) ) { ?>
                <div class="comp">
                <a href="<?php echo $loopalikes["valley"][$count]["wiki"] ?>" target="_blank"><button class="label">
                    <p><big><?php echo $loopalikes["valley"][$count]["id_text"] ?></big></p>
                    <p><?php echo $loopalikes["valley"][$count]["name"] ?></p>
                </button></a>
                <img loading="lazy" src="images/<?php echo $loopalikes["valley"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $loopalikes["valley"][$count]["id"] ?>"/>
                <img loading="lazy" src="images/comps/<?php echo $loopalikes["valley"][$count]["file"] ?>" alt="<?php echo $loopalikes["valley"][$count]["name"] ?>"/>
            </div>
            <?php $count++; } ?>
        </div>
        <div class="category" id="drop1-unique">
            <h2>Unique Characters</h2>
            <?php $count = 0; while ( $count < count($loopalikes["unique"]) ) { ?>
                <div class="comp">
                <a href="<?php echo $loopalikes["unique"][$count]["wiki"] ?>" target="_blank"><button class="label">
                    <p><big>#<?php echo $loopalikes["unique"][$count]["id"] ?></big></p>
                    <p><?php echo $loopalikes["unique"][$count]["name"] ?></p>
                </button></a>
                <img loading="lazy" src="images/<?php echo $loopalikes["unique"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $loopalikes["unique"][$count]["id"] ?>"/>
                <img loading="lazy" src="images/comps/<?php echo $loopalikes["unique"][$count]["file"] ?>" alt="<?php echo $loopalikes["unique"][$count]["name"] ?>"/>
            </div>
            <?php $count++; } ?>
        </div>
    </div>
</div>

<?php } ?>