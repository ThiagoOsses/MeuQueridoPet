<?php
/**
   * The template for Author.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
get_header(); ?>
<div id="main" class="site-main">
    <div id="content" class="site-content">
        <div class="container">
            <div class="archive-header">
                <h1 class="archive-title">
                        <?php printf( __( 'All posts by %s', 'zoo' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
                </h1>
            </div><!-- .archive-header -->
            <div class="isotope">
            <?php if ( get_the_author_meta( 'description' ) ) : ?>
                <?php get_template_part( 'author-bio' ); ?>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                <?php get_template_part( 'content', $format = get_post_format() );

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