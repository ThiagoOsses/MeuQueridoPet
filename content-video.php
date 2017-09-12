 <?php
  /**
   * The template for Content Video.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
 ?>
<div  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<article class="content">
    <header class="entry-header">
    <?php if ( is_single() ) : ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark">
          <h1 class="entry-title">
              <?php the_title(); ?>
          </h1>
        </a>
    <?php endif; // is_single() ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
     <?php if ( is_single() ) : ?>
    <div class="video">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zoo' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zoo' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </div>
     <?php else : ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
       <?php   endif; ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
    <?php if ( is_single() ) :
        zoo_entry_meta();
    else : ?>
        <a class="more-button" href="<?php the_permalink(); ?>" rel="bookmark"><?php _e('Read More', 'zoo') ?></a>
 <?php   endif;
    if ( comments_open() && ! is_single() ) : ?>
        <i class="ion-ios-chatboxes-outline"></i>
        <div class="comments-link">
            <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'zoo' ) . '</span>', __( 'One comment so far', 'zoo' ), __( 'View all % comments', 'zoo' ) ); ?>
        </div><!-- .comments-link -->
    <?php endif; // comments_open() ?>

    <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
        <?php get_template_part( 'author-bio' ); ?>
    <?php endif; ?>
    </footer><!-- .entry-meta -->
</article><!-- #post -->
</div>
