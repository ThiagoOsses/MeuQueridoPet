<?php
/**
   * The template for Footer.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/

?>
    <footer id="footer" class="site-footer">
    <?php get_template_part( 'social' ); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div id="copyright">
                    <?php if ((get_theme_mod("zoo_copyright_link"))&&(get_theme_mod("zoo_copyright_text"))) : ?>
                        <a target="blank" class="copyright" href='<?php echo esc_url(get_theme_mod("zoo_copyright_link"));?>'>
                        <?php echo esc_attr(get_theme_mod('zoo_copyright_text')) . date('Y');?>
                        </a>
                    <?php endif; ?>
                    <?php if ((!get_theme_mod("zoo_copyright_link"))&&(get_theme_mod("zoo_copyright_text"))) : ?>
                        <p><?php echo esc_attr(get_theme_mod('zoo_copyright_text')) .date('Y');?></p>
                    <?php endif; ?>
                    <?php if ((get_theme_mod("zoo_copyright_link"))&&(!get_theme_mod("zoo_copyright_text"))) : ?>
                        <a target="blank" class="copyright" href='<?php echo esc_url(get_theme_mod("zoo_copyright_link"));?>'></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>