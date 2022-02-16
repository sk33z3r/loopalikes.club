<?php
    $json = file_get_contents("json/airdrop01.json");
    $loopalikes = json_decode($json, true);
?><!DOCTYPE html>
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
        <link rel="stylesheet" href="css/main.css">
        <link rel="preload" href="css/fonts/Unifont.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="css/fonts/Unifont.svg" as="font" type="font/svg" crossorigin>
        <link rel="preload" href="css/fonts/Unifont.eot" as="font" type="font/embedded-opentype" crossorigin>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/site.webmanifest">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MTD13XJPLZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-MTD13XJPLZ');
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="container">
            <div id ="nav">
                <div id="simple-nav">
                    <a href="index.html"><button>HOME</button></a>
                    <a href="origins.php"><button>ORIGIN STORIES</button></a>
                </div>
                <div id="ext-nav">
                    <a target="_blank" href="https://loopheadexplorer.io"><button>LOOPHEAD EXPLORER</button></a>
                    <a target="_blank" href="https://loopheads.info"><button>LOOPHEADS.INFO</button></a>
                    <a target="_blank" href="https://loopheads.world"><button>LOOPHEADS.WORLD</button></a>
                    <a target="_blank" href="https://opensea.io/collection/moody-brain-loopring"><button>OPENSEA COLLECTION</button></a>
                </div>
            </div>
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
    </body>
</html>