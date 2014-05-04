<?php get_template_part('templates/page', 'header'); ?>

<div class="translucent-content-area">
  <p><strong><?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?></strong></p>
  
  <p>
    <img class="img-responsive img-embed" src="<?php echo get_template_directory_uri() . '/assets/img/rob-ford-confusion.jpg'; ?>" alt="Rob Ford's confusion" />
  </p>
  
  <p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
  <ul>
    <li><?php _e('a mistyped address', 'roots'); ?></li>
    <li><?php _e('an out-of-date link', 'roots'); ?></li>
    <li><?php _e('an act of God', 'roots'); ?></li>
    <li><?php _e('a time-travelling paradox in which the page you are looking for teaches you how to travel back in time.', 'roots'); ?></li>
  </ul>
  
</div>
