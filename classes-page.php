<?php
/**
    * Template Name: services
    * The template for services page.
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
    <div id="with-left-sidebar">
        <div id="content" class="site-content">
            <div class="container">
                <div class="row" id="services">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <?php get_sidebar(); ?>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 cont">
                    <div class="title">
                        <h2><?php echo esc_attr(get_theme_mod("zoo_services_title"));?></h2>
                    </div>
                        <div class="row">
                        <div class="grid-sizer"></div>
                       <?php $published_posts = wp_count_posts()->publish;
                        $posts_per_page = get_theme_mod("zoo_number_services");
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $services = new WP_Query (array(
                            'post_type' => 'services',
                            'paged'=>$paged,
                            'posts_per_page'=>$posts_per_page,
                        )); ?>
                        <?php if($services -> have_posts() ): ?>
                        <?php while($services -> have_posts() ) : $services -> the_post();?>
                        <article class="col-lg-6 col-md-6 col-sm-12 col-xs-12 serv">
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <span class="more">
                                        <a href="<?php the_permalink(); ?>"><?php  _e('View', 'zoo'); ?></a>
                                    </span>
                                <?php the_post_thumbnail(); ?>
                                </div>
                            </header>
                            <div class="services-content">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php echo get_the_title() ?></h2></a>
                            </div>
                        </article>
                  <?php wp_reset_query();?>

                  <?php endwhile; ?>
                  <?php else : ?>
                <h2><?php  _e('NO services', 'zoo'); ?></h2>
                <?php endif; ?>
                        </div>
                                <div id="contacts">
                <div class="title">
                    <h2><?php echo esc_attr(get_theme_mod("zoo_contacts_title"));?></h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo do_shortcode(get_theme_mod("zoo_cf_shortcode")); ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php echo do_shortcode(get_theme_mod("zoo_map_shortcode")); ?>
                    </div>
                </div>
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