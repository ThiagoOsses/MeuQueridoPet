<?php
 /**
   * The template for Clsses content.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
?>
<?php $published_posts = wp_count_posts()->publish;
            $posts_per_page = get_theme_mod("zoo_number_services");
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $services = new WP_Query (array(
                'post_type' => 'services',
                'paged'=>$paged,
                'posts_per_page'=>$posts_per_page,
            )); ?>
            <?php if($services -> have_posts() ): ?>
<div id="services" style="background-image:url(<?php echo esc_url(get_theme_mod("zoo_services_img")); ?>);">
<div class="overlay"></div>
 <!--        <div class="title" id="title-services">
          <h2><?php //echo esc_attr(get_theme_mod("zoo_services_title"));?></h2>
        </div> -->
        <div class="row">
            <?php while($services -> have_posts() ) : $services -> the_post();?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 one-service">
                <div class="service-mask"></div>
                    <div class="service-content">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><h1><?php echo get_the_title() ?></h1></a>
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><i class="ion-ios-medkit"></i></a>
                    </div>
                </div>
              <?php wp_reset_query();?>
              <?php endwhile; ?>
        </div>
</div>
<?php else : ?>
    <div style="display:none"></div>
<?php endif; ?>