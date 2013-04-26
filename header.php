<?php
/**
 * @package Frank for Some Random Dude
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="verify-v1" content="by1MB81PjkQUdjinZJQn73aCwjaV5erxwsvtTP7pTNE=" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<link href="data:image/x-icon;base64,AAABAAIAICAQAAAAAADoAgAAJgAAABAQEAAAAAAAKAEAAA4DAAAoAAAAIAAAAEAAAAABAAQAAAAAAAACAAAAAAAAAAAAABAAAAAQAAAAAAAAAAAAgAAAgAAAAICAAIAAAACAAIAAgIAAAMDAwACAgIAAAAD/AAD/AAAA//8A/wAAAP8A/wD//wAA////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8oAAAAEAAAACAAAAABAAQAAAAAAIAAAAAAAAAAAAAAABAAAAAQAAAAAAAAAAAAgAAAgAAAAICAAIAAAACAAIAAgIAAAMDAwACAgIAAAAD/AAD/AAAA//8A/wAAAP8A/wD//wAA////AIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiI/4iIiIiIiIj/iIiIiIiIj//4iIiIiIiP//iIiIiIiI+I+IiIiIiI/4j/iIiIiIj/iP+IiIiIiP+I/4iIiIiP+IiP+IiIiI/4iI/4iIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==" rel="icon" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/wp-content/themes/mostly-maps/images/apple-touch-icon.png"/>
	
	<title>
		<?php bloginfo('name'); ?> &mdash; <?php is_home() ? bloginfo('description') : wp_title(''); ?>
	</title>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/feed/" />
	<link rel="pingback" href="/xmlrpc.php" />
	
	<?php wp_head(); ?>

	<!--[if lte IE 8]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!--[if lt IE 7]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
</head>
<body id="page" <?php body_class(); ?>>
<div class='container'>
	<header id="page-header" class="row">
		<!--
		<h1 id="site-title" class='three columns'><a href="/">Some Random Dude</a></h1>
		-->
		<?php
		$header_image = get_header_image();
		if ($header_image) :
			if (function_exists('get_custom_header')) {
				$header_image_width = get_theme_support('custom-header', 'width');
			}
			else {
				$header_image_width = HEADER_IMAGE_WIDTH;
			}
		?>
		<a href="<?php echo esc_url(home_url('/')); ?>">
		<?php
			if (is_singular() && has_post_thumbnail($post->ID) &&
					($image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
						array($header_image_width, $header_image_width))) &&
					$image[1] >= $header_image_width) :
		?>
				<div class="site-logo">
					<?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail'); ?>
					<h2><span><?php bloginfo('name'); ?></span></h2>
				</div>
		<?php
			else :
				if (function_exists('get_custom_header')) {
					$header_image_width = get_custom_header()->width;
					$header_image_height = get_custom_header()->height;
				}
				else {
					$header_image_width = HEADER_IMAGE_WIDTH;
					$header_image_height = HEADER_IMAGE_HEIGHT;
				}
		?>
				<div class="site-logo">
					<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
					<h2><span><?php bloginfo('name'); ?></span></h2>
				</div>
			<?php endif; ?>
		</a>
		<?php endif; ?>

		<nav id="site-nav" class='nine columns'>
			<ul id="menu-primary" class="menu">
				<li><a href="/">Home</a></li>
				<li><a href="/about" target="_blank">About</a></li>
				<li><a href="/codeage">Code</a></li>
				<li><a href="http:///maps.geotastic.org/" target="_blank">Maps</a></li>
				<li><a href="/disclaimer">Disclaimer</a></li>
				<li><a href="/speaking">Conferences</a></li>
				<li class="last"><a href="http://here.com/" target="_blank">Work</a></li>
				<li class="rss"><a href="/feed/">RSS</a></li>
				<li class="twitter"><a href="http://twitter.com/vicchi" target="_blank">Twitter</a></li>
			</ul>
		</nav>
	</header>