<?php get_header(); ?>
<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
<div class="singleHorisontalScroll">
	<section class="one container">
		<div class="text">
			<h1><?php the_title(); ?></h1>
			<?php $posttags = get_the_tags();
			if ($posttags) {
				foreach ($posttags as $tag) {
					echo '<p class="tag tag-gray">' . $tag->name . '</p>';
				}
			} ?>
			<div class="objective">
				<div class="client">

					<h3>
						<?php the_field('headline-client'); ?></h3> <?php the_field('client'); ?>
					<?php if (get_field('href-project')) : ?>
						<a href="<?php the_field('href-project') ?>" target="_blank"><?php the_field('href-project-name') ?></a>
					<?php endif; ?>
				</div>
			</div>

		</div>
		<div class=" bottom">
			<span class="scroll_p">Листай ↓</span>
			<div class="client-logo">
				<img class="img-responsive" <?php awesome_acf_responsive_image(get_field('client-logo'), 'thumb-200', '100%'); ?> alt="" />
			</div>
			<!-- <div class="people">
				<?php

				$post_objects = get_field('kto_rabotal_nad_proektom');

				if ($post_objects) : ?>
					<?php foreach ($post_objects as $post) : // variable must be called $post (IMPORTANT) 
							?>
						<?php setup_postdata($post); ?>
						<p><?php the_field('name-team'); ?></p>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
						?>
				<?php endif;
				?>
			</div> -->
		</div>
	</section>
	<section class="two" style="background-image: url('<?php echo $image_url[0]; ?>');"></section>
	<?php the_content(); ?>
	<section class="last">




		<?php


		if (get_adjacent_post(false, '', true)) {
			$pred_post = get_previous_post(); // получили и записали в переменную объект предыдущего поста
			echo '<a href="' . get_permalink($pred_post) . '"></a>';
		} else {
			$first = new WP_Query('post_type=project', 'posts_per_page=1&order=DESC');
			$first->the_post();

			echo '<a href="' . get_permalink() . '"></a>';
			wp_reset_postdata();
		};
		?>
		<div class="nextProject">
			<p>Следующий проект</p>
			<p class="arrow">
				<svg width="110" height="59" viewBox="0 0 110 59" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M84.4271 22.7871H0V36.3361H84.5495L61.9132 59H80.7564L110 29.5616L80.7564 0H61.9132L84.4271 22.7871Z" fill="#00284b" />
				</svg>
			</p>
		</div>

	</section>
</div>

<style>
	footer {
		display: none;
	}
</style>

<?php get_footer(); ?>