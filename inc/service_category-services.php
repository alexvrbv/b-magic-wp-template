<?php $term = get_queried_object(); // get the current taxonomy term ?>
<div class="wrapper wrapper_service-category-services" id="service-category-services">
	<div class="container-fluid container-fluid_service-category-services width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="service-category-services__title">
					<h2><?php echo $term->name; ?></h2>
				</div>
			</div>
			<?php
			$args = array(
				'post_type' => 'service',
				'service_category' => $term->slug
				);
			$loop = new WP_Query($args);
			if ( $loop->have_posts() ) : ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $title = get_the_title(); ?>
					<?php $link = get_permalink(); ?>
					<div class="col-12 col-sm-6 col-md-4 col_service-category-services">
						<div class="service-category-services__service">
							<a href="<?php echo $link; ?>"><?php echo $title; ?></a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>