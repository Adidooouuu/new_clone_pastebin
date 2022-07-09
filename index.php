<?php
  require("config.php");
  require("db/db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Home | <?= constant('APP_NAME') ?></title>
  </head>
  <body>
    <?php require("partials/nav.php"); ?>
    <header>
      <h1>Hello, Guest!</h1>
      <div class="account_managment">
        <a href="/pages/login.php">Log in</a>
        <a href="/pages/register.php">Create an account</a>
      </div>
    </header>
    <main>
      <form class="link_creating_form" method="post" enctype="text/plain">
        <h2>Share some content!</h2>
        <label for="link_title">Title <span class="required">*</span></label>
        <input type="text" name="link_title" id="link_title" autocomplete="on">

        <label for="link_content">Content <span class="required">*</span></label>
        <textarea name="link_content" id="link_content" rows="8" cols="80" autocomplete="on"></textarea>

        <input type="submit" name="submit" value="Share">
      </form>
    </main>
    <footer>

    </footer>
    <?php require("partials/add_links_to_scripts.html"); ?>
  </body>
</html>
