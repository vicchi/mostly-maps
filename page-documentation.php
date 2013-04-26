<?php
/**
 * @package Frank
 * Template Name: Documentation
 */

function vicchi_page_links () {
	/**
	 * Note: needs the Ambrosite Next/Previous Page Link Plus plugin to be installed
	 * and active - http://www.ambrosite.com/plugins/next-previous-page-link-plus-for-wordpress
	 */

	if (function_exists ('previous_page_link_plus') && function_exists ('next_page_link_plus')) {
		$prev_format = '&larr;%link';
		$next_format = '%link&rarr;';
		$args = array ('format' => $prev_format,
			'loop' => true,
			'order_by' => 'menu_order',
			'return' => 'output');
		$content = array ();
		$content[] = '<div id="page-links">';
		$content[] = '<span class="prev-page-link">';
		$content[] = previous_page_link_plus ($args);
		$content[] = '</span>';
		$content[] = '<br />';
		$args['format'] = $next_format;
		$content[] = '<span class="next-page-link">';
		$content[] = next_page_link_plus ($args);
		$content[] = '</span>';
		$content[] = '</div>';
		echo implode (PHP_EOL, $content);
	}
}

function vicchi_previous_page_link() {
	$args = array(
		'format' => '%link',
		'link' => '<nav><span class="arrow-left">%title</span></nav><p>%title</p>',
		'loop' => true,
		'order_by' => 'menu_order',
		'return' => 'output'
		);

	echo previous_page_link_plus($args);
}

function vicchi_next_page_link() {
	$args = array(
		'format' => '%link',
		'link' => '<nav><span class="arrow-right">%title</span></nav><p>%title</p>',
		'loop' => true,
		'order_by' => 'menu_order',
		'return' => 'output'
		);

	echo next_page_link_plus($args);
}
?>

<?php get_header(); ?>
<div id="content" class="page">
	<div class="row">
		<main id="docs-primary" role="main">
			<?php while(have_posts()) : the_post(); ?>
			<article itemscope itemtype="http://schema.org/BlogPosting" class="docs leftaside">
				<header class="post-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				<?php if($post->post_excerpt) : ?>
					<div id='excerpt'><?php the_excerpt(); ?></div>
				<?php endif; ?>
				<div id='content' class='row'>
					<section class='page-content clearfix'>
						<?php
						if (frank_featured_image_button()) {
							the_post_thumbnail( 'default-thumbnail' );
						}
						?>
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="pagination small"><span class="title">Pages:</span>&after=</div>'); ?>
					</section>
					<div class='page-info'>
						<div id="prev-page" class="clearfix">
							<?php vicchi_previous_page_link(); ?>
						</div>
						<div id="next-page" class="clearfix">
							<?php vicchi_next_page_link(); ?>
						</div>
						<?php if ( !dynamic_sidebar('Post Left Aside') ) : ?>
						<?php endif; ?>
					</div>
				</div>
			</article>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>