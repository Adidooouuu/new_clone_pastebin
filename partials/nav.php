<nav class="desktop_nav">
  <ul>
    <li><a href="/" class="logo"><?= constant('APP_NAME') ?></a></li>
  </ul>
  <ul class="desktop_nav_links">
    <li><a href="/pages/profile.php">Profile</a></li>
    <li><a href="/">Share content</a></li>
    <li><a href="/pages/logout.php">Log out</a></li>
  </ul>
</nav>

<nav class="mobile_nav">
  <ul class="horizontal_part_mobile_nav">
    <li><a href="/" class="logo"><?= constant('APP_NAME') ?></a></li>
    <li>
      <a class="toggle_mobile_nav" id="toggle-mobile-nav">
        <span class="toggler_line"></span>
        <span class="toggler_line"></span>
        <span class="toggler_line"></span>
      </a>
    </li>
  </ul>
  <ul class="lateral_nav" id="lateral-nav">
    <li><a href="/pages/profile.php">Profile</a></li>
    <li><a href="/">Share content</a></li>
    <li><a href="/pages/logout.php">Log out</a></li>
  </ul>
</nav>