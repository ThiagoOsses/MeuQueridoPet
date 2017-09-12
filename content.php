 <?php /**
   * The template for Content.
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
    <?php endif; // is_single() ?>
    </header><!-- .entry-header -->
    <?php if ( is_single() ) : ?>
    <div class="entry-content">
        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail">
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="entry-content">
      <?php endif; ?>
        <?php if ( is_single() ) : // Only display Excerpts for Search ?>
            <p><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zoo' ) ); ?></p>
            <?php wp_link_pages(array(
                'before' => '<span style="clear:both; display:block">Pages',
                'after'  => '</span>',
                'next_or_number'=>'number',
                'previouspagelink' => 'previous',
                'nextpagelink'=> 'Next'
            )); ?>

    <?php else : ?>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <h1 class="entry-title">
            <?php the_title(); ?>
        </h1>
    </a>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php endif; ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
    <?php if ( is_single() ) :
        zoo_entry_meta();
        zoo_entry_date();
    else : ?>
        <a class="more-button" href="<?php the_permalink(); ?>" rel="bookmark"><?php _e('Read More', 'zoo') ?></a>
<?php    endif;
    if ( is_single() ) : ?>
    <div class="comments-link">
        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'zoo' ) . '</span>', __( 'One comment so far', 'zoo' ), __( 'View all % comments', 'zoo' ) ); ?>
    </div><!-- .comments-link -->
    <?php endif; // comments_open() ?>

    <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
        <?php get_template_part( 'author-bio' ); ?>
    <?php endif; ?>
    </footer><!-- .entry-meta -->
</article>
</div><!-- #post -->
