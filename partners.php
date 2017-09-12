<?php
 /**
   * The template for partners content.
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
    $posts_per_page = get_theme_mod("zoo_number_partners");
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $partners = new WP_Query (array(
        'post_type' => 'partners',
        'paged'=>$paged,
        'posts_per_page'=>$posts_per_page,
      )); ?>
<?php if($partners -> have_posts() ): ?>
<div id="slider-partners">
<div class="container">
  <div class="title">
      <h2><?php echo esc_attr(get_theme_mod("zoo_partners_title"));?></h2>
  </div>
</div>
    <div class="swiper3">
          <div class="swiper-wrapper">
            <?php while($partners -> have_posts() ) : $partners -> the_post();?>
                <div class="swiper-slide">
                  <a  href="<?php the_permalink(); ?>" rel="bookmark">
                        <h3 class="entry-title">
                        <?php the_title(); ?>
                        </h3>
                  </a>
                  <div class="partners-mask"></div>
                <?php the_post_thumbnail(); ?>
                </div>
              <?php wp_reset_query();?>
              <?php endwhile; ?>
        </div>
                            <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<?php else : ?>
    <div style="display:none"></div>
<?php endif; ?>