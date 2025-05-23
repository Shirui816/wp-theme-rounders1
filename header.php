<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href='<?php echo get_template_directory_uri(); ?>/assets/images/shi.png' rel='icon' type='image/x-icon'/>
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		MathJax = {
 		 tex: {
 		   inlineMath: [['$', '$'], ['\\(', '\\)']]
 		 }
		};
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.1/es5/tex-chtml-full.min.js" integrity="sha512-A+3TMrV8l6aD9umfABOVASom3HkxhM0xjmVDAbJd6KGxdMXWKxJ6WksBv/NY9J09G9dSSDGd6j/WsIEY1n7edA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
	.wp-block-image {
		margin:auto;
	}

	.wp-block-image figcaption {
		text-align: center;
	}

	.profile-link {
		background: url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_profile_left.gif") no-repeat left .1em;
        	padding-left: 15px;
        	font-weight: bold;
	}
	.sidebar ul li {
		background: url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow_sm.gif") no-repeat 2px .25em;
	}
	.comment-author {
		background: url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_comment_left.gif") no-repeat 2px .3em;
	}
	h3.post-header-h3 {background: url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow.gif") no-repeat 10px .5em;}
	a.comment-link {background:url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_comment_left.gif") no-repeat left 45%;}
	html>body a.comment-link {background: url("<?php echo get_template_directory_uri(); ?>/assets/images/icon_comment_left.gif") no-repeat left 45%;}
		.container-fluid {
	max-width: 764px;
		}
    </style>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/prism.css" rel="stylesheet" />
    <style>
      #back2Top {
        width: 80px;
        line-height: 20px;
        overflow: hidden;
        z-index: 999;
        display: none;
        cursor: pointer;
        position: fixed;
        bottom: 50px;
        right: 10%;
        background-color: #DDD;
        color: #555;
        text-align: center;
        font-size: 12px;
        text-decoration: none;
        border-radius: 3px;
        border-style: double;
        border-width: 2px;
        border-color: #333
      }
      #back2Top:hover {
          background-color: #DDF;
          color: #000;
      }

    </style>
    <script>
      /*Scroll to top when arrow up clicked BEGIN*/
      $(window).scroll(function() {
          var height = $(window).scrollTop();
          if (height > 100) {
              $('#back2Top').fadeIn();
          } else {
              $('#back2Top').fadeOut();
          }
      });
      $(document).ready(function() {
          $("#back2Top").click(function(event) {
              event.preventDefault();
              $("html, body").animate({ scrollTop: 0 }, "slow");
              return false;
          });

      });
       /*Scroll to top when arrow up clicked END*/

    </script>

</head>

<body>
<main>
	<div class='container-fluid' id='outer-wrapper'>
		<div class='row'>
			<div class='col-12'>
				<div id='header-wrapper'>
					<div id='header'>
        					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<p class='description'><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class='row d-lg-block d-flex g-2'>
			<div class='col-lg-8 float-lg-start order-1'>
				<div id='articles'> 
