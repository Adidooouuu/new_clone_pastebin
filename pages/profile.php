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
    <title>Profile | <?= constant('APP_NAME') ?></title>
  </head>
  <body>
    <header>
      <h1>Profile of (insert name)</h1>
      <div class="account_managment">
        <a href="#">Back home</a>
        <a href="#">Log out</a>
      </div>
    </header>
    <main>
      <form class="modify_profile_infos" method="post" enctype="text/plain">
        <label for="new_user_name">Name</label>
        <input type="text" name="new_user_name" id="new_user_name">

        <label for="new_user_email">Email address</label>
        <input type="text" name="new_user_email" id="new_user_email">

        <label for="new_user_pwd">Password</label>
        <input type="text" name="new_user_pwd" id="new_user_pwd">

        <input type="submit" name="submit" value="Modify">
      </form>
      <aside class="last_shared_content">
        <p>content</p>
      </aside>
    </main>
    <footer>

    </footer>
  </body>
</html>
