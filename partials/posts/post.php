<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('leftaside'); ?>>
	<header class="post-header">
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h1>
	</header>
	<div class="row">
		<section class="post-content">
			<?php
			if (frank_featured_image_button()) {
				the_post_thumbnail('medium-thumbnail');
			}
			?>
			<?php if($post->post_excerpt) : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php the_content('Read On&hellip;'); ?>
		</section>
		<footer class="post-info">
			<?php get_template_part('partials/post-metadata'); ?>
		</footer>
	</div>
</article>