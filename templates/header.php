<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <div id="header-brand-stamp">
        <h1 class="text-center">
          <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
        </h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <nav class="nav-main text-center" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-anson-toolbar'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
