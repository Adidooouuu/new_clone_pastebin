<?php
  require("../config.php");
  require("../db/db.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
