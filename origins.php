<?php
    $json = file_get_contents("lore.json");
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
        <title>Loophead Lore</title>
        <meta name="description" content="A fan-made site with origin stories for the Loopheads characters.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="container">
            <div id="about">
                <p><small><i>Check out the official collection on OpenSea: <a href="https://opensea.io/collection/moody-brain-loopring"><b>Moody Brain by Loopring</b></a></i></small></p>
                <p><big>Loophead Fan Fiction<big></p>
            </div>
            <?php $count = 0; while ( $count < count($lore) ) { ?>
                <div class="comp">
                    <div class="char">
                        <h2>#<?php echo $lore[$count]["id"] ?> : <?php echo $lore[$count]["name"] ?></h2>
                        <img src="<?php echo $lore[$count]["id"] ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $lore[$count]["id"] ?>" />
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