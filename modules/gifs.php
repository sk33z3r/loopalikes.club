<?php if ($type === "head") { ?>
    <title>Loophead GIFs</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <script type="text/javascript" src="js/lightbox.js"></script>
    <meta name="description" content="A showcase of gifs generated from Loophead variations.">
<?php }
    if ($type === "body") {
        include "modules/nav.php"; ?>

<div id="container">
    <div id="about">
        <p><big>Loopheads GIFs</big></p>
        <p><small>A showcase of gifs generated from Loophead variations.</small></p>
        <p><small>Click on an ID to see all the gifs for that Loophead.</small></p>
        <hr noshade>
    </div>
    <div class="drop-btn">
        <button>Loopheads Airdrop No. 1: IDs #101 - #1100</button>
    </div>

    <div class="drop" id="drop1">
        <div class="showcase">
            <?php
                $id = 101;
                while ( $id <= 1100 ) { ?>
                    <button onclick="openModal('<?php echo $id ?>')">#<?php echo $id ?></button>

                    <!-- The Modal/Lightbox -->
                    <div id="<?php echo $id ?>" class="modal">
                        <span class="close cursor" onclick="closeModal('<?php echo $id ?>')">&times;</span>
                        <h2>Loophead #<?php echo $id ?> GIFs</h2>
                        <div class="modal-content">
                            <?php #print a div for each image
                                $bg = 0;
                                while ($bg < 5) { ?>
                                    <div class="showcase-img">
                                        <img loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_<?php echo $bg ?>_throb_900x900.gif" alt="Loophead #<?php echo $id ?> BG <?php echo $bg ?>">
                                    </div>
                            <?php $bg++; } ?>
                            <div class="showcase-img">
                                <img loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_random_900x900.gif" alt="Loophead #<?php echo $id ?> Random">
                            </div>
                            <div class="showcase-img">
                                <img loading="lazy" src="images/<?php echo $id ?>/<?php echo $id ?>_showcase_900x900.gif" alt="Loophead #<?php echo $id ?> Showcase">
                            </div>
                        </div>
                    </div>

                <?php $id++; } ?>
        </div>
    </div>
</div>

<?php } ?>