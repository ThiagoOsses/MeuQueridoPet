<?php
 /**
   * The template for Blog 3 Full Column page.
   * Template Name: Blog 3 Column Page
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
get_header();
?>
<div id="main" class="site-main">
  <div id="content" class="site-content">
  <div id="three-column">
    <div class="container">
      <div id="options">
        <h2><?php _e('Last News', 'zoo'); ?></h2>
      </div>
      <div class="grid">
      <div class="grid-sizer"></div>
      <?php $published_posts = wp_count_posts()->publish;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts( array(
                            'paged'=>$paged,
                            'posts_per_page'=>$posts_per_page
                            )
                      );
                  if( have_posts() ){
                          while( have_posts() ){ the_post();
                          get_template_part( 'content', $format = get_post_format() ); ?>

                      <?php } ?>
                      </div>

                <?php  wp_reset_query();
                 } else {
                      get_template_part( 'content', 'none' );
        } ?>
      <div class="pagination">
                <?php  zoo_pagenavi($published_posts,$posts_per_page); ?>
      </div>
    </div>
  </div>
</div><!-- #main -->
</div>
<?php get_footer(); ?>