<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <div id="header-brand-stamp">
        <h1 class="text-center">
          <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <div id="header-location" class="text-center">
          <span class="glyphicon glyphicon-map-marker"></span> Toronto, ON, Canada
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <nav class="collapse navbar-collapse nav-main text-center" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-anson-toolbar'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
