<?php if ($type === "head") { ?>
    <title>Loophead Info & Guides</title>
    <meta name="description" content="A collection of links and guides from the Loophead community.">
<?php }
    if ($type === "body") {
        $json = file_get_contents("json/lore.json");
        $lore = json_decode($json, true);
        include "modules/nav.php";
?>

<div id="container">
    <div id="about">
        <p><big>Loophead Info & Guides</big></p>
        <p><small>A collection of links and guides from the Loophead community.</small></p>
        <hr noshade>
    </div>
    <div class="text">
        <ul>
            <li><a href="https://reddit.com/r/loopringorg/comments/snvjhs/what_are_loopheads_a_comprehensive_guide/" target="_blank">What Are Loopheads? A Comprehensive Guide</a></li>
            <li><a href="https://reddit.com/r/loopringorg/comments/so4tci/guide_to_move_your_loophead_from_l2_wallet_to/" target="_blank">List Your Loophead on OpenSea</a></li>
            <li><a href="https://reddit.com/r/loopringorg/comments/siy25a/loopheads_drop_1_results_analysis_event_summary/" target="_blank">Airdrop 1 Analysis & Summary Part 1</a></li>
            <li><a href="https://reddit.com/r/loopringorg/comments/sj1wor/loopheads_drop_1_results_analysis_event_summary/" target="_blank">Airdrop 1 Analysis & Summary Part 2</a></li>
        </ul>
    </div>
</div>

<?php } ?>