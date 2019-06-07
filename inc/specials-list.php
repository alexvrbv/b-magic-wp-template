<div class="wrapper wrapper_specials-list">
	<div class="container-fluid container-fluid_specials-list">
		<div class="row row_specials-list">
			<?php
			$args = array(
				'post_type' => 'special'
				);
			$loop = new WP_Query($args);
			if ( $loop->have_posts() ) : ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $title = get_the_title(); ?>
					<?php $desc = get_field( 'описание_акции' ); ?>
					<?php $img = get_field( 'изображение_акции' ); ?>
					<?php $discount = get_field( 'скидка_в_%' ); ?>
					<div class="col-12 col-sm-12 col-md-12 col_specials-list-item">
						<div class="specials-list-item">
							<?php if( $img ): ?>
								<div class="specials-list-item__part specials-list-item__part_1" style="background-image: url(<?php echo $img['url']; ?>);">
							<?php else: ?>
								<div class="specials-list-item__part specials-list-item__part_1">
							<?php endif; ?>								
								<?php if( $discount ): ?>
									<div class="specials-list-item__discount"><?php echo $discount; ?>%</div>
								<?php endif; ?>								
							</div>							
							<div class="specials-list-item__part specials-list-item__part_2">
								<div class="specials-list-item__title">
									<?php echo $title; ?>
								</div>
								<?php if( $desc ): ?>
									<div class="specials-list-item__desc"><?php echo $desc; ?></div>
								<?php endif; ?>
								<div class="specials-list-item__order-btn" href="#call">
									<span>Записаться</span>
								</div>							
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>