<?php
/**
   * The template for woocommerce.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
get_header(); ?>
<div id="page" class="site-page">
    <div id="content" class="site-content">
        <div class="container">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div><!-- #main -->
<?php get_footer(); ?>