<div class="wrapper">
  <?php require_once 'navigation/sidebar-nav.php'; ?>
  <header class="site_header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 col-lg-8 col-md-6 col-sm-12 col-12 left">
          <button id="sidebarNavbarOpen" class="sidebar_navbar_btn hidden" type="button" name="button">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <h1 class="page_title"><?php print $page_title; ?></h1>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6 right">
          <div class="site_header_buttons">
            <a href="<?php print $base_url; ?>" class="header_btn header_search_btn">
              <i class="fas fa-search"></i>
            </a>
            <a href="<?php print $base_url; ?>" class="header_btn header_notif_btn">
              <i class="fas fa-bell"></i>
              <span class="badge"></span>
            </a>
            <a href="<?php print $base_url; ?>" class="header_btn header_logout_btn">
              <i class="fas fa-sign-out-alt"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="content">
