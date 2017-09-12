<?php
/**
   * The template for Content Quote.
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
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zoo' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zoo' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        <?php else : ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
       <?php   endif; ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
        <?php if ( is_single() ) :
        zoo_entry_meta();
        edit_post_link( __( 'Edit', 'zoo' ), '<span class="edit-link">', '</span>' );
          else : ?>
          <a class="more-button" href="<?php the_permalink(); ?>" rel="bookmark"><?php _e('Read More', 'zoo') ?></a>
        <?php  endif;

         if ( comments_open() && ! is_single() ) : ?>
        <span class="comments-link">
            <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'zoo' ) . '</span>', __( 'One comment so far', 'zoo' ), __( 'View all % comments', 'zoo' ) ); ?>
        </span><!-- .comments-link -->
        <?php endif; // comments_open() ?>
    </footer><!-- .entry-meta -->
</article><!-- #post -->
</div>