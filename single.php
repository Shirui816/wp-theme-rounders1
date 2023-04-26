<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
	<div class='post uncustomized-post-template'>
	    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            <div class='post-header'><div class='post-header-ine-1'></div></div>
            <div class='post-body'>
			<?php the_content() ?>
            </div>
            <div style='clear: both;'></div>
	    <div class='post-footer'>
		<div class='post-footer-line post-footer-line-1'><span class='post-author'>By <?php the_author('');?></span> <span class='post-timestamp'>at <?php echo get_the_time();?></span><span class='post-comment-link'><?php edit_post_link('Edit','|','');?></span></div>
                <div class='post-footer-line post-footer-line-2'>Labels: <?php the_category(',');?></div>
	    </div>
	</div>
	<?php
        if ( comments_open() || get_comments_number() ) :
                comments_template();
		endif
	?>
	<div class='blog-pager' id='blog-pager'>
<?php 
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' =>  __( 'Newer' ),
                'prev_text' =>  __( 'Older'),
	    ) ); ?>
	</div>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();

?>
