<?php
    if ($type === "head") { ?>
    <script type="text/javascript" src="js/lightbox.js" defer></script>
    <title>Loopalike Club</title>
    <meta name="description" content="A fan-made site for all things Moody Brain by Loopring.">
<?php }
    if ($type === "body") { $randID = rand(101,3100); $randBG = rand(0,4); ?>
    <div id="container">
        <div id="about">
            <p><small><i>This is a fan-made site for all things Loopheads from the Moody Brain NFT Collection.</i></small></p>
            <img id="showcase-gif" src="images/<?php echo $randID ?>/<?php echo $randID ?>_<?php echo $randBG ?>_throb_900x900.gif" />
        </div>
        <div class="links">
            <a href="looplegangers"><button>LOOPLEGANGERS</button></a>
            <a href="showcase"><button>SHOWCASE</button></a>
            <a href="assets"><button>IMAGES & GIFS</button></a>
            <a href="origins"><button>ORIGIN STORIES</button></a>
            <a href="horrendous"><button>MOST HORRENDOUS</button></a>
            <a href="graveyard"><button>THE GRAVEYARD</button></a>
            <a href="links"><button>INFO & GUIDES</button></a>
            <a target="_blank" href="https://loopheads.info"><button>LOOPHEADS.INFO</button></a>
        </div>
    </div>
<?php } ?>