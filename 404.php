<?php
/**
   * The template for 404 page.
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
<div class="404_page" style="min-height:450px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <div class="errorbox" style="margin:75px 0 0;">

                    <div class="block">
                        <h1 style="font-size:152px; line-height: 152px;">404</h1>
                    <h3><?php  _e('Page not found', 'zoo'); ?></h3>
                    </div>
                    <p>
                        <?php  _e('Sorry! The page you are looking for cannot be found. Please use
                        the provided search box to find what you are looking for,
                        click on our top navigational menu, or', 'zoo'); ?>
                        <a style="cursor:pointer" onclick="window.history.back()"><?php  _e('go back.', 'zoo'); ?></a>
                    </p>

                    </div>
                </center>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>