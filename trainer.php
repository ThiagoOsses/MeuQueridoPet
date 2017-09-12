<?php
/**
    * Template Name: team
    * The template for team page.
    *
    *
    * @package   zoo WordPress Theme
    * @copyright Copyright (C) 2015, OrdaSoft
    * @license   http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
    * @author     AUTHOR <www.ordasoft.com>
    * zoo is distributed under the terms of the GNU GPL
*/
get_header();
?>
<div id="main" class="site-main">
        <div id="content" class="site-content">
        <div id="with-left-sidebar">
        <div id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <?php get_sidebar(); ?>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 cont">
                     <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $published_posts = wp_count_posts()->publish;
                    $args =  (array(
                            'post_status' => 'publish',
                            'post_type' => 'partners',
                            'paged'=>$paged,
                            'posts_per_page'=>-1,
                        ));
                        $partners = null;
                        $partners = new WP_Query($args);
                         if( $partners->have_posts() ) {
                        $i = 0;
                        while ($partners->have_posts()) : $partners->the_post();
                         if($i % 3 == 0) { ?>
                          <div class="row">
                          <?php } ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="doctor-content">
                                <a  href="<?php the_permalink(); ?>" rel="bookmark">
                                <h3 class="entry-title">
                                    <?php the_title(); ?>
                                </h3>
                                </a>
                                <?php the_post_thumbnail(); ?>
                                <p><?php the_excerpt(); ?></p>
                                <a class="more-button" href="<?php the_permalink(); ?>" rel="bookmark"><?php _e('Read More', 'zoo') ?></a>
                                </div>
                            </div>
                            <?php $i++;
                              if($i != 0 && $i % 3 == 0) { ?>
                        </div><!--/.row-->
                        <?php } ?>
                          <?php endwhile; } ?>
                          <?php wp_reset_query();?>
                        </div>
                    </div><!-- col-lg-9  -->
                </div><!-- row -->
            <div class="pagination">
                <?php  zoo_pagenavi($published_posts,$posts_per_page); ?>
            </div>
            </div>
        </div>
    </div>
</div><!-- #main -->
<?php get_footer(); ?>