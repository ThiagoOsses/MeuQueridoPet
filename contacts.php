<?php
 /**
   * The template for Contacts page.
   * Template Name: Contacts
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
            <div id="contacts">
                <div class="title">
                    <h2><?php echo esc_attr(get_theme_mod("zoo_contacts_title"));?></h2>
                </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont">
              <div class="page">
              <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post();  ?>
                      <h3><?php the_title();  ?></h3>
                  <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                      <div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
                      </div>
                  <?php endif; ?>
                  <p><?php the_content(); ?></p>

              <?php endwhile; ?>

              </div>

            <?php else : ?>

                <h2><?php  _e('Sorry, no content', 'zoo'); ?></h2>

            <?php endif; ?>
        </div>
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
    </div><!-- #main -->
</div>
<?php get_footer(); ?>