<div id ="nav">
    <div id="simple-nav">
        <a href="index.php?page=home"><button>HOME</button></a>
        <a href="index.php?page=looplegangers"><button <?php if ( $page === "looplegangers" ) { echo 'class="active"'; } ?>>LOOPLEGANGERS</button></a>
        <a href="index.php?page=origins"><button <?php if ( $page === "origins" ) { echo 'class="active"'; } ?>>ORIGINS</button></a>
        <a href="index.php?page=showcase"><button <?php if ( $page === "showcase" ) { echo 'class="active"'; } ?>>SHOWCASE</button></a>
    </div>
    <div id="ext-nav">
        <a target="_blank" href="https://loopheadexplorer.io"><button>EXPLORER</button></a>
        <a target="_blank" href="https://loopheads.info"><button>LH.INFO</button></a>
        <a target="_blank" href="https://loopheads.world"><button>LH.WORLD</button></a>
        <a target="_blank" href="https://opensea.io/collection/moody-brain-loopring"><button>OPENSEA</button></a>
    </div>
</div>