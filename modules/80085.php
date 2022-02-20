<?php
    if ($type === "head") { ?>
    <title>Loopalikes Admin</title>
    <meta name="description" content="A page for doing things.">
<?php }
    if ($type === "body") {
        if (!empty($_POST["password"])) {
            $password = $_POST["password"];
            $sanitized_pw = filter_var($password, FILTER_UNSAFE_RAW);
        } else { $sanitized_pw = ""; }
        include ".env.php";
        include "modules/nav.php";
        echo "<h1>Loopalikes Admin</h1>";
        if ($sanitized_pw == "") { ?>
            <div id="container">
                <div id="login">
                    <form method="post" action="admin">
                        <b>PASSWORD: </b> <input type="password" name="password" /> <button type="submit">LOG IN</button>
                    </form>
                </div>
            </div>
        <?php }
        else if ($sanitized_pw !== $ADMIN_PASS) { ?>
            <div id="container">
                <div id="login">
                    <span class="fail">ACCESS DENIED!</span>
                </div>
            </div>
        <?php }
        else if ($sanitized_pw === $ADMIN_PASS) { ?>
            <div id="container">
                <div id="admin">
                    <b>SUCCESS!</b>
                </div>
            </div>
        <?php }
    } ?>