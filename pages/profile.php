<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Profile</title>
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
        <label for="user_name">Name</label>
        <input type="text" name="user_name" id="user_name">

        <label for="user_email">Email address</label>
        <input type="text" name="user_email" id="user_email">

        <label for="user_pwd">Password</label>
        <input type="text" name="user_pwd" id="user_pwd">

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
