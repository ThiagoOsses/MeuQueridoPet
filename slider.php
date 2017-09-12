<?php
/**
   * The template for Slider.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
?>
<?php $slider = new WP_Query (array(
    'post_type' => 'slider',
    'posts_per_page' => -1,
)); ?>
<?php if($slider -> have_posts() ): ?>
<div id="slider">
    <div class="swiper1">
        <div class="swiper-wrapper">
        <?php while($slider -> have_posts() ) : $slider -> the_post();?>
            <div class="swiper-slide">

                <div class="slider-content">
                        <h1><?php echo get_the_title() ?></h1>
                        <p><?php echo the_content() ?></p>
                </div>
                <?php  the_post_thumbnail(array(1400,1400)); ?>
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




