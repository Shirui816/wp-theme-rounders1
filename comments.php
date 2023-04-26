<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments">
 
    <?php if ( have_comments() ) : ?>
        <h4>
            <?php
					if ( get_comments_number() == 0 ) {
						printf("No Comments.");
					} else {

                	printf( _nx( '1 Comment:', '%1$s Comments:', get_comments_number(), 'comments title', 'twentythirteen' ),
                    	number_format_i18n( get_comments_number() ) );
					}

            ?>
        </h4>
 
        <ol class="comments-block">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 37,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">'Comments are closed.'</p>
        <?php endif; ?>
    <hr>
    <?php endif; // have_comments() ?>
	<?php if (! have_comments() ) :?>
		<h4>
			No Comments.
		</h4>
	<?php endif; ?>
 	<div class="comment-footer">
		<p class="mathjax_ignore">
			You can use &lt;pre&gt;&lt;code class="language-xxx"&gt;...&lt;code&gt;&lt;pre&gt; to post codes and &#36;...&#36;, &#36;&#36;...&#36;&#36; to post LaTeX inline/standalone equations.
		</p>
		<?php
		$comment_form_args1 = array(
    	'fields' => apply_filters(
        'comment_form_default_fields', array(
			'author' => '<div class="comment-form-author row g-2 align-items-center">' . '<div class="col-2"><label class="col-form-label" for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . "</div>" .
        	'<div class="col-auto"><input class="form-control form-control-sm" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' required /></div></div>',
            'email'  => '<div class="comment-form-email row g-2 align-items-center"><div class="col-2"><label class="col-form-label" for="email">' . __( 'Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span></div>' : '</div>' ) 
                 .
				'<div class="col-auto"><input class="form-control form-control-sm"  id="email" placeholder="" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" ' . $aria_req . ' required /></div>'  .

                '</div>',
            'url'    => '<div class="comment-form-url row g-2 align-items-center">' .
			 '<div class="col-2">' .
			 '<label class="col-form-label" for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
			'</div>'.
			'<div class="col-auto">'.
             '<input id="url" name="url" class="form-control form-control-sm" placeholder="" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /> ' .
               '</div>' .
			'</div>',
        )
    ),
    'comment_field' => '<p class="comment-form-comment">' .
        '<label for="comment" class="form-label">' . __( 'Comments *' ) . '</label>' .
        '<textarea class="form-control" id="comment" name="comment" placeholder="" cols="40" rows="8" aria-required="true" required></textarea>' .
        '</p>',
    'comment_notes_after' => '',
	'class_submit' => 'btn btn-secondary btn-sm',

);
		?>
		<?php comment_form($comment_form_args1); ?>
	</div>
 
</div><!-- #comments -->
