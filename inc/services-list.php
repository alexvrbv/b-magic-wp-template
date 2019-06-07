<div class="wrapper wrapper_services-list">
	<div class="container-fluid container-fluid_services-list width-1020">
		<div class="row row_services-list">
			<?php
			// Get terms
			// http://codex.wordpress.org/Function_Reference/get_terms
			// use $args array in second parameter if needed
			$my_categories = get_terms( 'service_category', array(
				'hide_empty' => 1
			) );
			$my_categories_count = count( $my_categories );
			if ( $my_categories_count > 0 && is_array( $my_categories ) ) {
				foreach ( $my_categories as $single_cat ) { ?>
					<?php $cat_img = get_field( 'изображение_категории', $single_cat); ?>
					<div class="col-12 col-sm-12 col-md-4 col_services-list">
						<a href="<?php echo get_category_link( $single_cat ); ?>">
						<div class="services-list-cat">
							<?php if ( $cat_img ) { ?>
								<div class="services-list-cat__image"><img src="<?php echo $cat_img['url']; ?>" /></div>
							<?php } ?>							
							<div class="services-list-cat__title"><?php echo $single_cat->name; ?></div>
							<!--<div class="services-list-cat__divider"></div>
							<div class="services-list-cat__list">
								<ul>
									<?php
									/*$cat_posts_args = array(
										'post_type' => 'service',
										'post_status' => 'publish',
										'tax_query' => array(
											array(
												'taxonomy' => 'service_category',
												'field' => 'id',
												'terms' => $single_cat->term_id,
												'include_children' => false
											)
										)
									);*/
									//$loop = new WP_Query($cat_posts_args);
									//if ( $loop->have_posts() ) : ?>
										<?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
											<?php //$title = get_the_title(); ?>
											<?php// $link = get_permalink(); ?>
												<li><a href="<?php //echo $link; ?>"><?php //echo $title; ?></a></li>
										<?php //endwhile; ?>
									<?php //endif; wp_reset_postdata(); ?>
								</ul>
							</div>-->
						</div>
						</a>
					</div>					
				<?php } // end foreach
			} ?>
		</div>
	</div>
</div>