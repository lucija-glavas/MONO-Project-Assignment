<nav id="sidebar_navbar" class="sidebar_navbar_dropdowns">
  <button id="sidebarNavbarClose" class="sidebar_navbar_btn sidebar_navbar_btn_close" type="button" name="button">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <div class="sidebar_navbar_header">
    <div class="logo_img"></div>
    <div class="logo_txt">
      <h5><?php print $site_title; ?></h5>
      <p><strong><?php print $site_tagline; ?></strong></p>
    </div>
  </div>
  <ul class="sidebar_navbar_menu">
    <li>
      <a href="<?php print $base_url; ?>"><i class="fas fa-home"></i>Home</a>
    </li>
    <li>
      <a href="#submenu1" class="sidebar_navbar_submenu_toggle" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-list"></i>Product List
      </a>
      <ul id="submenu1" class="sidebar_navbar_submenu collapse">
        <li>
          <a href="<?php print $base_url; ?>">View All</a>
        </li>
        <li>
          <a href="<?php print $base_url; ?>">Crude Production</a>
        </li>
        <li>
          <a href="<?php print $base_url; ?>">Natural Gas</a>
        </li>
        <li>
          <a href="<?php print $base_url; ?>">Gasoline</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#submenu2" class="sidebar_navbar_submenu_toggle" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-pen"></i>Administration
      </a>
      <ul id="submenu2" class="sidebar_navbar_submenu collapse">
        <li>
          <a href="<?php print $base_url; ?>">Crude Production</a>
        </li>
        <li>
          <a href="<?php print $base_url; ?>">Natural Gas</a>
        </li>
        <li>
          <a href="<?php print $base_url; ?>">Gasoline</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="<?php print $base_url; ?>"><i class="fas fa-user"></i>My Account</a>
    </li>
  </ul>
  <div class="sidebar_navbar_footer">
    <p class="mb-0"><?php print $site_title; ?> &copy; <?php print $copyYear; ?>. All rights reserved.</p>
  </div>
</nav>
