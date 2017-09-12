<?php
 /**
   * The template for Home page.
   * Template Name: Home
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
  $footer_left = false;
if (is_active_sidebar( 'footer_left' ) ) {
    $footer_left = true;
}

$footer_right = false;
if (is_active_sidebar( 'footer_right' ) ) {
    $footer_right = true;
}

get_header();
?>
<div id="main" class="site-main">
    <div id="content" class="site-content">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slides">
            <?php get_template_part( 'slider' ); ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block-service">
            <?php get_template_part( 'classes' ); ?>
            </div>
        </div>
        <?php $posts_per_page = get_theme_mod("zoo_number_product");
            $args=array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => $posts_per_page,
            );
            $my_products = null;
            $my_products = new WP_Query($args);
            if( $my_products->have_posts() ) : ?>
            <div id="<?php echo esc_attr(get_theme_mod("zoo_columns_product"));?>" class="mask">
            <div class="overlay"></div>
                <div class="container">
                    <div class="title">
                        <h2><?php echo esc_attr(get_theme_mod("zoo_product_title"));?></h2>
                    </div>
                    <div class="grid">
                    <div class="grid-sizer"></div>
                    <?php  while( $my_products->have_posts() ): $my_products->the_post(); ?>
                        <?php  get_template_part( 'products' ); ?>
                    </div>
                <?php wp_reset_query();?>
                <?php endwhile; ?>
                </div>
            </div>
            <?php else : ?>
                <div style="display:none"></div>
            <?php endif; ?>

        <?php get_template_part( 'gallery' ); ?>

        <div class="container">
            <div id="blog">
                <div class="title">
                    <h2><?php echo esc_attr(get_theme_mod("zoo_blog_title"));?></h2>
                </div>
                <div class="row">
                <?php $published_posts = wp_count_posts()->publish;
                    $posts_per_page = get_theme_mod("zoo_number_posts");
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts( array(
                        'paged'=>$paged,
                        'posts_per_page'=>$posts_per_page,

                    )
                );
                if( have_posts() ){
                    while( have_posts() ){ the_post(); ?>
                        <?php if (get_theme_mod("zoo_columns_posts")) : ?>
                         <div id="post" class="<?php echo esc_attr(get_theme_mod("zoo_columns_posts"));?> container-post">
                         <?php else: ?>
                        <div id="post" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 container-post">
                        <?php endif; ?>
                      <?php  get_template_part( 'content', $format = get_post_format() ); ?>
                    </div>
                <?php } ?>
                </div>

                <?php  wp_reset_query();
                 } else {
                      get_template_part( 'content', 'none' );
                } ?>
                </div>
                <?php if (get_theme_mod("zoo_enable_paginate")) : ?>
                <div class="pagination" style="<?php echo esc_attr(get_theme_mod("zoo_enable_paginate"));?>">
                <?php else : ?>
                <div class="pagination">
                <?php endif; ?>
                    <?php  the_posts_pagination(); ?>
                </div>
            </div>
            <div id="partners">
                <?php get_template_part( 'partners' ); ?>
            </div>
            <div class="container">
                <div class="row">
                    <?php if (is_active_sidebar( 'footer_left' ) ) : ?>
                            <div class="widgets <?php if($footer_left && $footer_right) {echo 'col-lg-6 col-md-6 col-sm-6 col-xs-12';}
                                else {echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');}?>">
                                <?php dynamic_sidebar('footer_left'); ?>
                            </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar( 'footer_right' ) ) : ?>
                            <div class="widgets <?php if($footer_right && $footer_left) {echo 'col-lg-6 col-md-6 col-sm-6 col-xs-12';}
                                    else {echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');}?>">
                                <?php dynamic_sidebar('footer_right'); ?>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container">
                <div id="contacts">
                    <div class="title">
                        <h2><?php echo esc_attr(get_theme_mod("zoo_contacts_title"));?></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php echo do_shortcode(get_theme_mod("zoo_map_shortcode")); ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php echo do_shortcode(get_theme_mod("zoo_cf_shortcode")); ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php get_footer(); ?>