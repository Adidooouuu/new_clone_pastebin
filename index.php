<?php
  require("config.php");
  require("db/db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Home | <?= constant('APP_NAME') ?></title>
  </head>
  <body>
    <header>
      <h1>Hello, Guest!</h1>
      <div class="account_managment">
        <a href="#">Log in</a>
        <a href="#">Create an account</a>
      </div>
    </header>
    <main>
      <form class="link_creating_form" method="post" enctype="text/plain">
        <label for="link_title">Title <span class="required">*</span></label>
        <input type="text" name="link_title" id="link_title">

        <label for="link_content">Content <span class="required">*</span></label>
        <textarea name="link_content" id="link_content" rows="8" cols="80"></textarea>

        <input type="submit" name="submit" value="Share">
      </form>
    </main>
    <footer>

    </footer>
  </body>
</html>
