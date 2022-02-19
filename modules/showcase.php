<?php if ($type === "head") { ?>
    <title>Loophead Showcase</title>
    <meta name="description" content="A showcase of characters from the Loopheads collection.">
<?php }
    if ($type === "body") { ?>

<div id="container">
    <?php include "modules/nav.php"; ?>
    <div id="about">
        <p><big>Loophead Airdrop Showcase<big></p>
        <hr noshade>
    </div>
    <h3>Sets 100 - 900</h3>
    <div class="showcase">
        <?php
            $num = 1;
            while ( $num <= 100 ) {
                $set = rand(1,9) * 100;
                $id = $num + $set; ?>
                <div class="showcase-img">
                    <img loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $id ?>" />
                    <div class="img-id">#<?php echo $id ?></div>
                </div>
            <?php $num++;
        } ?>
    </div>
    <h3>Set 1000</h3>
    <div class="showcase">
        <?php
            $id = 1001;
            while ( $id <= 1100 ) { ?>
                <div class="showcase-img">
                    <img loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $id ?>" />
                    <div class="img-id">#<?php echo $id ?></div>
                </div>
            <?php $id++;
        } ?>
    </div>
</div>

<?php } ?>