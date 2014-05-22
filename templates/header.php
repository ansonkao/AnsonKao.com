<header class="banner container" role="banner">
  <div class="row">
    <div id="mind-map" class="col-xs-12 collapsed">
      <a id="mind-map-toggle" href="<?= home_url() ?>" class="js-mind-map-toggle">
        Mind-map <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <h1 class="x50 y50 mind-map-title">
        <a href="<?= home_url() ?>" class="dark">Anson Kao</a>
        <div>
          <a href="https://www.google.ca/search?q=toronto" class="dark" target="_blank">
            <span class="glyphicon glyphicon-map-marker"></span>
            Toronto, ON, Canada
          </a>
        </div>
      </h1>
      <h4 class="x20 y35"><a href="" class="color-music     ">Electronic Dance Music</a></h3>
      <h3 class="x35 y20"><a href="" class="color-music     ">Music Production</a></h3>
      <h2 class="x50 y15"><a href="" class="color-music     ">Music</a></h2>
      <h3 class="x65 y25"><a href="" class="color-music     ">Music Theory</a></h3>
      <h4 class="x80 y40"><a href="" class="color-music     ">Emotion</a></h3>
      <h3 class="x90 y50"><a href="" class="color-philosophy">Passion</a></h3>
      <h4 class="x80 y60"><a href="" class="color-philosophy">Interpersonal Relationships</a></h3>
      <h2 class="x80 y75"><a href="" class="color-philosophy">Philosophy</a></h2>
      <h3 class="x70 y80"><a href="" class="color-philosophy">Motivation</a></h3>
      <h4 class="x55 y85"><a href="" class="color-philosophy">Innovation</a></h3>
      <h4 class="x30 y85"><a href="" class="color-technology">Startup</a></h3>
      <h3 class="x45 y90"><a href="" class="color-technology">Design</a></h3>
      <h2 class="x20 y75"><a href="" class="color-technology">Technology</a></h2>
      <h3 class="x25 y65"><a href="" class="color-technology">Software Development</a></h3>
      <h4 class="x15 y60"><a href="" class="color-technology">User Experience</a></h3>
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
