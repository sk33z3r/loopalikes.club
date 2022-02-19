<?php
    if ($type === "head") { ?>
    <title>Loopalikes Admin</title>
    <meta name="description" content="A page for doing things.">
<?php }
    if ($type === "body") {
        $password = $_POST["password"];
        $sanitized_pw = filter_var($password, FILTER_SANITIZE_STRING);
        include ".env.php";
        include "modules/nav.php";
        echo "<h1>Loopalikes Admin</h1>";
        if ($password == "") { ?>
            <div id="container">
                <div id="login">
                    <form method="post" action="index.php?page=admin">
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