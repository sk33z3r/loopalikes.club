<?php if ($type === "head") { ?>
    <title>Loophead Showcase</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <script type="text/javascript" src="js/lightbox.js" defer></script>
    <meta name="description" content="A showcase of characters from the Loopheads collection.">
<?php }
    if ($type === "body") {
        include "modules/nav.php"; ?>

<div id="container">
    <div id="about">
        <p><big>Loopheads Showcase</big></p>
        <p><small>A showcase of characters from the Loopheads collection.</small></p>
        <p><small>Click on a Loophead to see all color variations for that series.</small></p>
        <hr noshade>
    </div>

    <div class="drop-btn" onclick="drop(1)">
        <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
    </div>

    <div class="drop" id="drop1">
        <h2>Unique Loopheads</h2>
        <div class="showcase">
            <div class="showcase-img">
                <img class="img-border" loading="lazy" src="images/1050/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #1050" />
                <div class="img-id">#1050</div>
            </div>
        </div>
        <h2>Series Loopheads</h2>
        <div class="showcase">
            <?php $num = 1; while ( $num <= 100 ) {
                $slide = rand(1,9);
                $set = $slide * 100;
                $firstID = $num + 100;
                $id = $num + $set; ?>
                <div class="showcase-img">
                    <img class="img-border" onclick="openModal('<?php echo $firstID ?>')" loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $id ?>" />
                    <div class="img-id">#<?php echo $id ?></div>
                </div>

                <!-- The Modal/Lightbox -->
                <div id="<?php echo $firstID ?>" class="modal">
                    <span class="close cursor" onclick="closeModal('<?php echo $firstID ?>')">&times;</span>
                    <h2><button onclick="prev(1, <?php echo $firstID ?>)">&lt;</button>X<?php if ($num != 100) { printf("%02d", $num); } else { echo "00"; } ?> Series Color Variations<button onclick="next(1, <?php echo $firstID ?>)">&gt;</button></h2>
                    <div class="modal-content">
                        <?php #print a div for each image
                            $s = 0;
                            while ($s < 1000) {
                                $curID = $firstID + $s;
                                if ($curID > 1091) {
                                    $curID = $curID - 86;
                                } else if ($curID > 1014 or $curID == 1006) {
                                    $curID = $curID + 9;
                                } else if ($curID > 1006 and $curID < 1011) {
                                    $curID = $curID + 10;
                                } else if ($curID > 1011 and $curID < 1015) {
                                    $curID = $curID + 9;
                                } else if ($curID == 1011) {
                                    $curID = $curID + 5;
                                }

                                if ($curID != 1050) { ?>
                                    <div class="showcase-img">
                                        <img class="img-border" loading="lazy" class="<?php echo $firstID ?>-demo" src="images/<?php echo $curID ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $curID ?>">
                                        <div class="img-id">#<?php echo $curID ?></div>
                                    </div>
                        <?php } $s = $s + 100; } ?>
                    </div>
                </div>
            <?php $num++; } ?>
        </div>
    </div>

    <div class="drop-btn" onclick="drop(2)">
        <button>Loopheads Airdrop No. 2: IDs #1101 - #2100</button>
    </div>

    <div class="drop" id="drop2">
        <h2>Series Loopheads</h2>
        <div class="showcase">
            <?php $num = 1; while ( $num <= 100 ) {
                $slide = rand(1,9);
                $set = $slide * 100;
                $firstID = $num + 1100;
                $id = $num + $set + 1000; ?>
                <div class="showcase-img">
                    <img class="img-border" onclick="openModal('<?php echo $firstID ?>')" loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $id ?>" />
                    <div class="img-id">#<?php echo $id ?></div>
                </div>

                <!-- The Modal/Lightbox -->
                <div id="<?php echo $firstID ?>" class="modal">
                    <span class="close cursor" onclick="closeModal('<?php echo $firstID ?>')">&times;</span>
                    <h2><button onclick="prev(2, <?php echo $firstID ?>)">&lt;</button>XX<?php if ($num != 100) { printf("%02d", $num); } else { echo "00"; } ?> Series Color Variations<button onclick="next(2, <?php echo $firstID ?>)">&gt;</button></h2>
                    <div class="modal-content">
                        <?php #print a div for each image
                            $s = 0;
                            while ($s < 1000) {
                                $curID = $firstID + $s; ?>
                                <div class="showcase-img">
                                    <img class="img-border" loading="lazy" class="<?php echo $firstID ?>-demo" src="images/<?php echo $curID ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" alt="Loophead #<?php echo $curID ?>">
                                    <div class="img-id">#<?php echo $curID ?></div>
                                </div>
                        <?php $s = $s + 100; } ?>
                    </div>
                </div>
            <?php $num++; } ?>
        </div>
    </div>

</div>

<?php } ?>