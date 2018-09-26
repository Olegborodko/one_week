<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <?php
    the_content( sprintf(
    wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'one' ),
    array(
    'span' => array(
    'class' => array(),
    ),
    )
    ),
    get_the_title()
    ) );
    ?>
  </div><!-- .entry-content -->
</article>
