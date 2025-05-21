<?php get_header();?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class='post uncustomized-post-template'>
	    	<h3 class='post-header-h3'><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            	<div class='post-header'><div class='post-header-ine-1'></div></div>
            	<div class='post-body'>
			<?php the_content() ?>
            	</div>
            	<div style='clear: both;'></div>
	    	<div class='post-footer'>
			<div class='post-footer-line post-footer-line-1'><span class='post-author'>By <?php the_author('');?></span> <span class='post-timestamp'>at <?php echo get_the_time();?>, <?php echo get_the_date();?></span><span class='post-comment-link'> <?php comments_popup_link( "No comments", "1 comment", "% comments"); ?> <?php edit_post_link('Edit','|','');?></span></div>
                	<div class='post-footer-line post-footer-line-2'>Labels: <?php the_category(',');?></div>
	    	</div>
        </div>

	
	<?php endwhile; ?>
	<?php
	if ( is_page() || is_single() ) {
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	?>

	<div class='blog-pager' id='blog-pager'>
	<span id='blog-pager-older-link'>
	<?php next_posts_link( 'Older Posts' ); ?>
	</span>
	<span id='blog-pager-newer-link'>
	<?php previous_posts_link( 'Newer Posts' ); ?>
	</span>
	<a class='home-link' href="<?php echo home_url(); ?>">Home</a>
	</div>
	<div class="clear"></div><div class="blog-feeds"><div class="feed-links">Subscribe to: <a class="feed-link" href="<?php echo home_url(); ?>/?feed=atom"  target="_blank" type="application/atom+xml">Posts (Atom)</a></div></div>


<?php else : ?>
	<div class="post" style="border: none"><div style="padding: 30px 10px 10px 10px; width: 90% margin:auto;"><div class="alert alert-dark rounded" style="text-align: center;">Sorry, the page you were looking for in this blog does not exist.</div></div><div class="blog-pager" id="blog-pager"><a href="<?php echo home_url(); ?>">Home</a></div></div><div class="clear"></div><div class="blog-feeds"><div class="feed-links">Subscribe to: <a class="feed-link" href="<?php echo home_url(); ?>/?feed=atom"  target="_blank" type="application/atom+xml">Posts (Atom)</a></div></div>
<?php endif; ?>

<?php get_footer(); ?>
