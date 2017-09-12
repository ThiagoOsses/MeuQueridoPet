<?php
/**
   * The template for Social.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
?>
<div id="social">
        <div class="title">
            <h2><?php echo esc_attr(get_theme_mod("zoo_soc_title"));?></h2>
        </div>
        <div  class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="soc-links">
                <ul>
                <?php if (get_theme_mod("zoo_soc_facebook")){?>
                    <li><a target=_blank class="facebook fa fa-facebook" href='<?php echo esc_url(get_theme_mod("zoo_soc_facebook"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_twitter")){?>
                    <li><a target=_blank class="twitter fa fa-twitter" href='<?php echo esc_url(get_theme_mod("zoo_soc_twitter"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_skype")){?>
                    <li><a target=_blank class="skype fa fa-skype" href='<?php echo esc_url(get_theme_mod("zoo_soc_skype"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_soundcloud")){?>
                    <li><a target=_blank class="soundcloud fa fa-soundcloud" href='<?php echo esc_url(get_theme_mod("zoo_soc_soundcloud"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_dribbble")){?>
                    <li><a target=_blank class="dribbble fa fa-dribbble" href='<?php echo esc_url(get_theme_mod("zoo_soc_dribbble"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_google")){?>
                    <li><a target=_blank class="google fa fa-google-plus" href='<?php echo esc_url(get_theme_mod("zoo_soc_google"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_vimeo")){?>
                    <li><a target=_blank class="vimeo fa fa-vimeo-square" href='<?php echo esc_url(get_theme_mod("zoo_soc_vimeo"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_flickr")){?>
                    <li><a target=_blank class="flickr fa fa-flickr" href='<?php echo esc_url(get_theme_mod("zoo_soc_flickr"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_youtube_play")){?>
                    <li><a target=_blank class="youtube fa fa-youtube" href='<?php echo esc_url(get_theme_mod("zoo_soc_youtube_play"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_instagram")){?>
                    <li><a target=_blank class="instagram fa fa-instagram" href='<?php echo esc_url(get_theme_mod("zoo_soc_instagram"));?>'></a></li>
                <?php } ?>
                <?php if (get_theme_mod("zoo_soc_linkedin")){?>
                    <li><a target=_blank class="linkedin fa fa-linkedin" href='<?php esc_url(get_theme_mod("zoo_soc_linkedin"));?>'></a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>