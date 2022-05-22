<?php if ($type === "head") { ?>
    <title>Looplegangers</title>
    <meta name="description" content="A collection of loopalikes the community has noticed between the Loopheads and pop-culture.">
    <script type="text/javascript" src="js/lightbox.js" defer></script>
<?php }
    if ($type === "body") {
        $drop1 = file_get_contents("json/airdrop01.json");
        $airdrop01 = json_decode($drop1, true);
        $drop2 = file_get_contents("json/airdrop02.json");
        $airdrop02 = json_decode($drop2, true);
        $drop3 = file_get_contents("json/airdrop03.json");
        $airdrop03 = json_decode($drop3, true);
        include "modules/nav.php";
?>

<div id="container">
    <div id="about">
        <p><big>Looplegangers</big></p>
        <p><small>A collection of loopalikes the community has noticed between the Loopheads and pop-culture.</small></p>
        <p><small>Click the ID/NAME to get more info on a pop-culture figure.</small></p>
        <hr noshade>
    </div>

    <div class="drop-btn" onclick="drop(1)">
        <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
    </div>
    <div class="drop" id="drop1">
        <!-- <div class="filters">
            <button>Uncanny Valley</button>
            <button>Unique Characters</button>
        </div> -->
        <div class="category" id="drop1-valley">
            <h2>Uncanny Valley Series</h2>
            <?php $count = 0; while ( $count < count($airdrop01["valley"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop01["valley"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big><?php echo $airdrop01["valley"][$count]["id_text"] ?></big></b></p>
                        <p><?php echo $airdrop01["valley"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop01["valley"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop01["valley"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop01["valley"][$count]["file"] ?>" alt="<?php echo $airdrop01["valley"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
        <div class="category" id="drop1-unique">
            <h2>Unique Characters</h2>
            <?php $count = 0; while ( $count < count($airdrop01["unique"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop01["unique"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big>#<?php echo $airdrop01["unique"][$count]["id"] ?></big></b></p>
                        <p><?php echo $airdrop01["unique"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop01["unique"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop01["unique"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop01["unique"][$count]["file"] ?>" alt="<?php echo $airdrop01["unique"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
    </div>

    <div class="drop-btn" onclick="drop(2)">
        <button>Loopheads Airdrop No. 2: IDs #1101 - #2100</button>
    </div>
    <div class="drop" id="drop2">
        <!-- <div class="filters">
            <button>Uncanny Valley</button>
            <button>Unique Characters</button>
        </div> -->
        <div class="category" id="drop2-valley">
            <h2>Uncanny Valley Series</h2>
            <?php $count = 0; while ( $count < count($airdrop02["valley"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop02["valley"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big><?php echo $airdrop02["valley"][$count]["id_text"] ?></big></b></p>
                        <p><?php echo $airdrop02["valley"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop02["valley"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop02["valley"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop02["valley"][$count]["file"] ?>" alt="<?php echo $airdrop02["valley"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
        <div class="category" id="drop2-unique">
            <h2>Unique Characters</h2>
            <?php $count = 0; while ( $count < count($airdrop02["unique"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop02["unique"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big>#<?php echo $airdrop02["unique"][$count]["id"] ?></big></b></p>
                        <p><?php echo $airdrop02["unique"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop02["unique"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop02["unique"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop02["unique"][$count]["file"] ?>" alt="<?php echo $airdrop02["unique"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
    </div>

    <div class="drop-btn" onclick="drop(3)">
        <button>Loopheads Airdrop No. 3: IDs #2101 - #3100</button>
    </div>
    <div class="drop" id="drop3">
        <!-- <div class="filters">
            <button>Uncanny Valley</button>
            <button>Unique Characters</button>
        </div> -->
        <div class="category" id="drop3-valley">
            <h2>Uncanny Valley Series</h2>
            <?php $count = 0; while ( $count < count($airdrop03["valley"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop03["valley"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big><?php echo $airdrop03["valley"][$count]["id_text"] ?></big></b></p>
                        <p><?php echo $airdrop03["valley"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop03["valley"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop03["valley"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop03["valley"][$count]["file"] ?>" alt="<?php echo $airdrop03["valley"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
        <div class="category" id="drop3-unique">
            <h2>Unique Characters</h2>
            <?php $count = 0; while ( $count < count($airdrop03["unique"]) ) { ?>
                <div class="comp">
                    <a href="<?php echo $airdrop03["unique"][$count]["wiki"] ?>" target="_blank"><button class="label">
                        <p><b><big>#<?php echo $airdrop03["unique"][$count]["id"] ?></big></b></p>
                        <p><?php echo $airdrop03["unique"][$count]["name"] ?></p>
                    </button></a>
                    <img loading="lazy" src="images/<?php echo $airdrop03["unique"][$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $airdrop03["unique"][$count]["id"] ?>"/>
                    <img loading="lazy" src="images/comps/<?php echo $airdrop03["unique"][$count]["file"] ?>" alt="<?php echo $airdrop03["unique"][$count]["name"] ?>"/>
                </div>
            <?php $count++; } ?>
        </div>
    </div>

</div>

<?php } ?>