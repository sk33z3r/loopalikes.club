<?php if ($type === "head") { ?>
    <title>Loophead Assets</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <script type="text/javascript" src="js/lightbox.js"></script>
    <meta name="description" content="A repository of gifs and images from the Loophead variations.">
<?php }
    if ($type === "body") {
        include "modules/nav.php";

        function drop_display($start, $end) {
            $id = $start;
            while ( $id <= $end ) { ?>
                <div class="gif-btn" onclick="openModal('<?php echo $id ?>')">
                    <img loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo rand(0,4) ?>-<?php echo rand(0,4) ?>.png" />
                    <div class="gif-id">#<?php echo $id ?></div>
                </div>

                <!-- The Modal/Lightbox -->
                <div id="<?php echo $id ?>" class="modal">
                    <span class="close cursor" onclick="closeModal('<?php echo $id ?>')">&times;</span>
                    <h2>Loophead #<?php echo $id ?></h2>
                    <h3>Brain GIFs</h3>
                    <div class="modal-content">
                        <?php #print a div for each image
                            $bg = 0;
                            while ($bg < 5) { ?>
                                <img class="img-border" loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_<?php echo $bg ?>_throb_900x900.gif" alt="Loophead #<?php echo $id ?> BG <?php echo $bg ?>" />
                        <?php $bg++; } ?>
                    </div>
                    <h3>Random GIFs</h3>
                    <div class="modal-content">
                        <img class="img-border" loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_random_900x900.gif" alt="Loophead #<?php echo $id ?> Random" />
                        <img class="img-border" loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_showcase_900x900.gif" alt="Loophead #<?php echo $id ?> Showcase" />
                    </div>
                    <h3>Static Images</h3>
                    <div class="modal-content">
                        <?php #print a div for each image
                            $bg = 0;
                            while ($bg < 5) {?>
                                <div class="variations">
                                    <?php $brain = 0; while ($brain < 5) { ?>
                                        <img class="img-border" loading="lazy" src="images/<?php echo $id ?>/vars/<?php echo $bg ?>-<?php echo $brain ?>.png" alt="Loophead #<?php echo $id ?> Variation <?php echo $bg . "-" . $brain ?>" />
                                    <?php $brain++; } ?>
                                </div>
                            <?php $bg++; } ?>
                    </div>
                </div>

            <?php $id++; }
        } ?>

<div id="container">
    <div id="about">
        <p><big>Loopheads Assets</big></p>
        <p><small>A repository of gifs and images from the Loophead variations.</small></p>
        <p><small>Click on a Loophead to see all its gifs and variations.</small></p>
        <hr noshade>
    </div>

    <div id="to-top">
        <a href="#about"><small>BACK TO TOP ^</small></a>
    </div>

    <div class="drop-btn" onclick="drop(1)">
        <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
    </div>

    <div class="drop" id="drop1">
        <div class="showcase">
            <?php
                drop_display(101, 1100); ?>
        </div>
    </div>

    <div class="drop-btn" onclick="drop(2)">
        <button>Loopheads Airdrop No. 2: IDs #1101 - #2100</button>
    </div>

    <div class="drop" id="drop2">
        <div class="showcase">
            <?php
                drop_display(1101, 2100); ?>
        </div>
    </div>

    <div class="drop-btn" onclick="drop(3)">
        <button>Loopheads Airdrop No. 3: IDs #2101 - #3100</button>
    </div>

    <div class="drop" id="drop3">
        <div class="showcase">
            <?php
                drop_display(2101, 3100); ?>
        </div>
    </div>
</div>

<?php } ?>