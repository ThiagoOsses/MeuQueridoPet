<?php
/**
   * The template for Post Index page.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
get_header(); ?>
<div id="main" class="site-main">
  <div class="container">
    <div id="content" class="site-content archive" role="main">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php endif; ?>
    </div><!-- #content -->

    <?php //the_posts_pagination(); ?>
</div>
</div><!-- #main -->
<?php get_footer(); ?>