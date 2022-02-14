<?php
    $json = file_get_contents("airdrop01.json");
    $loopalikes = json_decode($json, true);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Looplegangers</title>
        <meta name="description" content="A fan-made site showing loopalikes the community has noticed between the Loopheads and various celebrities/characters from pop culture.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="container">
            <div class="text">
                <h1>Looplegangers Archive</h1>
                <h3>A list of loopalikes the community has noticed between Loopheads and pop-culture.</h3>
            </div>
            <div class="text">
                <hr noshade>
            </div>
            <div class="drop-btn">
                <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
            </div>
            <div class="drop" id="drop1">
                <div class="filters">
                    <button>Uncanny Valley</button>
                    <button>Unique Characters</button>
                </div>
                <div class="category" id="drop1-valley">
                    <h2>Uncanny Valley Series</h2>
                    <?php $count = 0; while ( $count < count($loopalikes["valley"]) ) { ?>
                        <div class="comp">
                        <div class="label">
                            <p><b><?php echo $loopalikes["valley"][$count]["id_text"] ?></b></p>
                            <p><?php echo $loopalikes["valley"][$count]["name"] ?></p>
                        </div>
                        <img src="<?php echo $loopalikes["valley"][$count]["id"] ?>/900x900/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $loopalikes["valley"][$count]["id"] ?>"/>
                        <img src="comps/<?php echo $loopalikes["valley"][$count]["file"] ?>" alt="<?php echo $loopalikes["valley"][$count]["name"] ?>"/>
                    </div>
                    <?php $count++; } ?>
                </div>
                <div class="category" id="drop1-unique">
                    <h2>Unique Characters</h2>
                    <?php $count = 0; while ( $count < count($loopalikes["unique"]) ) { ?>
                        <div class="comp">
                        <div class="label">
                            <p><b><?php echo $loopalikes["unique"][$count]["id"] ?></b></p>
                            <p><?php echo $loopalikes["unique"][$count]["name"] ?></p>
                        </div>
                        <img src="<?php echo $loopalikes["unique"][$count]["id"] ?>/900x900/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $loopalikes["unique"][$count]["id"] ?>"/>
                        <img src="comps/<?php echo $loopalikes["unique"][$count]["file"] ?>" alt="<?php echo $loopalikes["unique"][$count]["name"] ?>"/>
                    </div>
                    <?php $count++; } ?>
                </div>
            </div>
        </div>
    </body>
</html>