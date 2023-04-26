				</div>
			</div> <!-- article col -->
			<div class="col-12 col-lg-4 float-lg-end order-0">
				<div id='sidebartop-wrap'><div id='sidebartop' class='sidebar'>
					<h3 class='sidebar'>Profile</h3>
					<div class='widget-content'>
						<a href='/about'><?php echo get_simple_local_avatar('shirui816@gmail.com', 80, '', 'my photo', array(
	"class" => "profile-img",
)); ?></a>
					<dl class='profile-datablock'>
					<dt class='profile-data'>
					<a class='profile-name-link' href='https://v2ex.com/member/necomancer' rel='author' style='background-image: url(//v2ex.com/static/icon-192.png);background-size: 16px 16px;'>Nox</a>
					</dt>
					</dl>
					<a class='profile-link' href='/about' rel='author'>View my complete profile</a>
					<div class='clear'></div>
					</div></div>
				</div>
			</div>
			<div class="col-12 col-lg-4 float-lg-end order-2">
				<div id="sidebarbottom-wrap">
				<?php get_sidebar('bot'); ?>
				</div>
			</div>
		</div> <!-- main row  -->
		
		<div class='row d-flex d-lg-block'>
			<div class='col-12 col-lg-12'>
			<div id='footer-wrap'><div id='footer'>
			<p>This Blog is Powered by <a href="https://wordpress.org/">Wordpress</a>. Blogger Rounders Theme remade by <a href='https://www.shirui.me' >Nox</a></p>
			</div></div>
			</div>
		</div>
	</div> <!-- end of outer-wrap | container -->
	</main>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/prism.js"></script>
<a href='#' id='back2Top' title='Back to top'>Back2Top ^</a>

<?php wp_footer() ?>
</body>
</html> 
