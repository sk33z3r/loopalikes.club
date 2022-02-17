<?php
    $json = file_get_contents("json/lore.json");
    $lore = json_decode($json, true);
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Loophead Origin Stories</title>
        <meta name="description" content="A fan-made site with origin stories for the Loopheads characters.">
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
                    <a href="looplegangers.php"><button>LOOPLEGANGERS</button></a>
                    <a href="showcase.php"><button>SHOWCASE</button></a>
                </div>
                <div id="ext-nav">
                    <a target="_blank" href="https://loopheadexplorer.io"><button>LOOPHEAD EXPLORER</button></a>
                    <a target="_blank" href="https://loopheads.info"><button>LOOPHEADS.INFO</button></a>
                    <a target="_blank" href="https://loopheads.world"><button>LOOPHEADS.WORLD</button></a>
                    <a target="_blank" href="https://opensea.io/collection/moody-brain-loopring"><button>OPENSEA</button></a>
                </div>
            </div>
            <div id="about">
                <p><big>Loophead Origin Stories<big></p>
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
    </body>
</html>