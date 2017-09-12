<?php
/**
   * The template for Single page.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
get_header();
?>
<div id="single" class="single-main">
    <div id="content" class="single-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 cont">
                    <div class="isotope">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post();  ?>
                        <?php   get_template_part( 'content', $format = get_post_format() );

                        endwhile;
                        zoo_post_nav(); ?>


                    <?php if ( comments_open() || get_comments_number() ) {
                    comments_template();
                  } ?>
                  <?php get_template_part( 'social' ); ?>
                  </div>
                    <?php

                     else :

                        get_template_part( 'content', 'none' );

                     endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- #main -->
<?php get_footer(); ?>