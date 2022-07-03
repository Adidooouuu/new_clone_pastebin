<?php
  require("../config.php");
  require("../db/db.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Log in | <?= constant('APP_NAME') ?></title>
  </head>
  <body>
    <main>
      <form class="login_form" method="post" enctype="text/plain">
        <label for="connect_user_name">Name <span class="required">*</span></label>
        <input type="text" name="connect_user_name" id="connect_user_name">

        <label for="connect_user_email">Email address <span class="required">*</span></label>
        <input type="text" name="connect_user_email" id="connect_user_email">

        <label for="connect_user_pwd">Password <span class="required">*</span></label>
        <input type="text" name="connect_user_pwd" id="connect_user_pwd">

        <input type="submit" name="submit" value="Log in">
      </form>
    </main>
  </body>
</html>
