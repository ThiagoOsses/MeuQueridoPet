<?php
 /**
   * The template for cup content.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
?>
<div id="cup" style="background-image:url(<?php echo esc_url(get_theme_mod("zoo_cup_img")); ?>);">
<div class="overlay"></div>
    <div class="container">
        <div class="title" id="title-cup">
          <h2><?php echo esc_attr(get_theme_mod("zoo_cup_title"));?></h2>
        </div>
        <div class="row">
          <?php $published_posts = wp_count_posts()->publish;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $cup = new WP_Query (array(
                'post_type' => 'cup',
                'paged'=>$paged,
                'posts_per_page'=>$posts_per_page,
            )); ?>
            <?php if($cup -> have_posts() ): ?>
            <?php while($cup -> have_posts() ) : $cup -> the_post();?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 one-cup">
                <div class="cup-mask"></div>
                    <div class="cup-content">
                        <h2><?php echo get_the_title() ?></h2>
                        <?php the_post_thumbnail(array(300,300)); ?>
                    </div>
                </div>
              <?php wp_reset_query();?>
              <?php endwhile; ?>
              <?php else : ?>
            <h2><?php  _e('NO cup', 'zoo'); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>