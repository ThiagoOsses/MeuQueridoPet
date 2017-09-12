<?php
/**
   * The template for Content None.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
?>
<header class="page-header">
    <h1 class="page-title"><?php _e( 'Nothing Found', 'zoo' ); ?></h1>
</header>

<div class="page-content">
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zoo' ), admin_url( 'post-new.php' ) ); ?></p>

    <?php elseif ( is_search() ) : ?>

    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'zoo' ); ?></p>
    <?php get_search_form(); ?>

    <?php else : ?>

    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zoo' ); ?></p>
    <?php get_search_form(); ?>

    <?php endif; ?>
</div><!-- .page-content -->
