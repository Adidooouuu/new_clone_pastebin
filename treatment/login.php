<?php
  require("../config.php");
  require("../db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>Log in | <?= constant('APP_NAME') ?></title>
    </head>
    <body>
        <?php require("../partials/nav.php"); ?>
        <main>
            <form class="log_in_form" method="post" enctype="text/plain">
                <h2>Log in!</h2>
                <label for="connect_email">Email address <span class="required">*</span></label>
                <input type="text" name="connect_email" id="connect_email" autocomplete="email">

                <label for="connect_password">Password <span class="required">*</span></label>
                <input type="password" name="connect_password" id="connect_password" autocomplete="off">

                <input type="submit" name="submit" value="Log in">
            </form>
        </main>
    </body>
</html>