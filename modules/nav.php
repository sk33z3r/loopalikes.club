<div id ="nav">
    <div id="simple-nav">
        <a href="home"><button>HOME</button></a>
        <a href="looplegangers"><button <?php if ( $page === "looplegangers" ) { echo 'class="active"'; } ?>>LOOPLEGANGERS</button></a>
        <a href="origins"><button <?php if ( $page === "origins" ) { echo 'class="active"'; } ?>>ORIGINS</button></a>
        <a href="showcase"><button <?php if ( $page === "showcase" ) { echo 'class="active"'; } ?>>SHOWCASE</button></a>
        <a href="gifs"><button <?php if ( $page === "gifs" ) { echo 'class="active"'; } ?>>GIFS</button></a>
        <a href="guides"><button <?php if ( $page === "guides" ) { echo 'class="active"'; } ?>>GUIDES</button></a>
    </div>
    <div id="ext-nav">
        <a target="_blank" href="https://loopheadexplorer.io"><button>EXPLORER</button></a>
        <a target="_blank" href="https://opensea.io/collection/moody-brain-loopring"><button>OPENSEA</button></a>
    </div>
</div>