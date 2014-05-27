<div class="entry-meta">
  <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo __('Posted on', 'roots'); ?> <?php echo get_the_date(); ?></time>
  <span class="byline author vcard"><?php echo __('by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span>
  <br/>
  <div class="entry-tags">
    <?php the_tags( '#', ' #', '' ); ?>
  </div>
</div>
