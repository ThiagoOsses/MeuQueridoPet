<?php
/**
   * The template for Author Bio.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
?>
<div class="author-info">
    <div class="author-avatar">
    <?php
        $author_bio_avatar_size = apply_filters( 'zoo_author_bio_avatar_size', 74 );
        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
    ?>
    </div><!-- .author-avatar -->
    <div class="author-description">
        <h2 class="author-title"><?php printf( __( 'About %s', 'zoo' ), get_the_author() ); ?></h2>
        <p class="author-bio">
            <?php the_author_meta( 'description' ); ?>
            <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'zoo' ), get_the_author() ); ?>
            </a>
        </p>
    </div><!-- .author-description -->
</div><!-- .author-info -->