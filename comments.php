<?php
if ( post_password_required() ) {
    return; // Don't show comments if post is password protected
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( 1 === $comments_number ) {
                printf( _x( 'One Comment', 'comments title', 'your-theme-textdomain' ) );
            } else {
                printf(
                    /* translators: %s: Number of comments */
                    _nx(
                        '%s Comment',
                        '%s Comments',
                        $comments_number,
                        'comments title',
                        'your-theme-textdomain'
                    ),
                    number_format_i18n( $comments_number )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            ) );
            ?>
        </ol>

        <?php
        // Comment navigation for paged comments
        the_comments_navigation();

        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'your-theme-textdomain' ); ?></p>
        <?php
        endif;

    else : // no comments yet ?>

        <?php if ( comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'No comments yet. Be the first to comment!', 'your-theme-textdomain' ); ?></p>
        <?php else : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'your-theme-textdomain' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    // Display comment form
    comment_form();
    ?>

</div><!-- #comments -->
