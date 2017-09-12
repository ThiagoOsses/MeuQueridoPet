<?php
 /**
   * The template for Search.
   *
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
        <div class="container">
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'zoo' ), get_search_query() ); ?></h1>
            <div class="isotope">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                <?php   get_template_part( 'content', $format = get_post_format() );

                endwhile; ?>

            </div>
            <?php  the_posts_pagination();

             else :

                get_template_part( 'content', 'none' );

             endif; ?>
        </div>
    </div>
</div><!-- #main -->
<?php get_footer(); ?>

