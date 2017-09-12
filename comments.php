<?php
/**
   * The template for Comments.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
?>
<?php if ( post_password_required() ) return; ?>
<div class="row comments">
    <div class="col-lg-12">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
        <?php
            printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'zoo' ),
                number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
        ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) );
            ?>
          </ul><!-- .comment-list -->

          <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
          ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'zoo' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zoo' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zoo' ) ); ?></div>
            </nav><!-- .comment-navigation -->
            <?php endif; // Check for comment navigation ?>

            <?php if ( ! comments_open() && get_comments_number() ) : ?>
                <p class="no-comments"><?php _e( 'Comments are closed.' , 'zoo' ); ?></p>
            <?php endif; ?>

            <?php endif; // have_comments() ?>

            <?php $commenter = wp_get_current_commenter();
                $req = get_option( 'require_name_email' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $fields =  array(
                    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name*','zoo' ) . '</label> ' . ( $req ? '<span class="required"></span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                                'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email*','zoo' ) . '</label> ' . ( $req ? '<span class="required"></span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                );

                $comments_args = array(
                    'fields' =>  $fields
                );

                comment_form($comments_args); ?>
    </div>
</div><!-- #comments -->