<?php
/**
   * The template for Category page.
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
<div id="main" class="site-main">
    <div id="content" class="site-content">
        <div class="container">
            <h1 class="page-title"><?php printf( __( 'Category: %s', 'zoo' ), single_cat_title( '', false ) ); ?></h1>
            <div class="row">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                        <?php if (get_theme_mod("zoo_columns_posts")) : ?>
                         <div id="post" class="<?php echo esc_attr(get_theme_mod("zoo_columns_posts"));?> container-post">
                         <?php else: ?>
                        <div id="post" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 container-post">
                        <?php endif; ?>
                      <?php  get_template_part( 'content', $format = get_post_format() ); ?>
                    </div>
                <?php  endwhile; ?>
                </div>
                <?php if (get_theme_mod("zoo_enable_paginate")) : ?>
                <div class="pagination" style="<?php echo esc_attr(get_theme_mod("zoo_enable_paginate"));?>">
                <?php else : ?>
                <div class="pagination">
                <?php endif; ?>
                    <?php  the_posts_pagination(); ?>
                </div>
                <?php
                 else :
                      get_template_part( 'content', 'none' );
                 endif; ?>
        </div>
    </div>
</div><!-- #main -->
<?php get_footer(); ?>