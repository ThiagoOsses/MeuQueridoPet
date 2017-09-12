<?php
 /**
   * The template for Content Aside page.
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
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
        <?php endif; // is_single() ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zoo' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zoo' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
        <?php if ( is_single() ) : ?>
            <?php zoo_entry_meta(); ?>
            <?php //edit_post_link( __( 'Edit', 'zoo' ), '<span class="edit-link">', '</span>' ); ?>

            <?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                <?php get_template_part( 'author-bio' ); ?>
            <?php endif; ?>

        <?php else : ?>
            <?php zoo_entry_date(); ?>
            <?php //edit_post_link( __( 'Edit', 'zoo' ), '<span class="edit-link">', '</span>' ); ?>
        <?php endif; // is_single() ?>
    </footer><!-- .entry-meta -->
</article><!-- #post -->
</div>
