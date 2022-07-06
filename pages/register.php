<?php
  require("../config.php");
  require("../db/db.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Register | <?= constant('APP_NAME') ?></title>
  </head>
  <body>
    <main>
      <form class="login_form" method="post" enctype="text/plain">
        <label for="register_user_name">Name <span class="required">*</span></label>
        <input type="text" name="register_user_name" id="register_user_name">

        <label for="register_user_email">Email address <span class="required">*</span></label>
        <input type="text" name="register_user_email" id="register_user_email">

        <label for="register_user_pwd">Password <span class="required">*</span></label>
        <input type="text" name="register_user_pwd" id="register_user_pwd">

        <label for="confirm_register_user_pwd">Confirm password <span class="required">*</span></label>
        <input type="text" name="confirm_register_user_pwd" id="confirm_register_user_pwd">

        <input type="submit" name="submit" value="Register">
      </form>
    </main>
  </body>
</html>
