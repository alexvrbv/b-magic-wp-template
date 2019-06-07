<div class="wrapper wrapper_products-list" id="products">
	<div class="container-fluid container-fluid_products-list width-1020">
		<div class="row row_products-list">
			<?php
			$args = array(
				'post_type' => 'product'
				);
			$loop = new WP_Query($args);
			if ( $loop->have_posts() ) : ?>
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $title = get_the_title(); ?>
					<?php $img = get_field( 'изображение' ); ?>
					<?php $desc_short = get_field( 'краткое_описание' ); ?>
					<div class="col-12 col-sm-12 col-md-4 col_products-list">
						<div class="products-list-item">
							<div class="products-list-item__title"><?php echo $title; ?></div>
							<?php if( $img ): ?>
								<div class="products-list-item__image"><img src="<?php echo $img['url']; ?>"></div>
							<?php endif; ?>
							<?php if( $desc_short ): ?>
								<div class="products-list-item__desc"><?php echo $desc_short; ?></div>
							<?php endif; ?>
							<a class="products-list-item__readmore" data-toggle="modal" href="#myModal" data-slider="<?php echo $i; ?>">
								<span>Подробнее</span>
							</a>
						</div>
					</div>
					<?php ++$i; ?>
				<?php endwhile; ?>
			<?php endif; wp_reset_postdata(); ?>			
		</div>
	</div>
</div>
<div class="modal modal_products" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog_products">
		<div class="modal-content modal-content_products panel-warning">
			<button type="button" class="close close_products" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div class="modal-body">	
				<div class="col-12 col-sm-12 col-md-12 col_products-swiper">
					<div class="products__swiper">
						<div class="swiper-button-prev swiper-button-prev_products"></div>
						<div class="swiper-button-next swiper-button-next_products"></div>
						<div class="swiper-container swiper-container_products">
							<div class="swiper-wrapper swiper-wrapper_products">
								<?php
								$args = array(
									'post_type' => 'product'
									);
								$loop = new WP_Query($args);
								if ( $loop->have_posts() ) : ?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<?php $title = get_the_title(); ?>
										<?php $img = get_field( 'изображение' ); ?>
										<?php $desc = get_field( 'подробное_описание' ); ?>
										<div class="swiper-slide swiper-slide_products">
											<div class="product">
												<div class="product_part product_part_1">
													<?php if( $img ): ?>
														<div class="product__img"><img src="<?php echo $img['url']; ?>"></div>
													<?php endif; ?>													
												</div>
												<div class="product_part product_part_2">
													<div class="product__title"><?php echo $title; ?></div>
													<?php if( $desc ): ?>
														<div class="product__desc"><?php echo $desc; ?></div>
													<?php endif; ?>
													<div class="product__back-btn" data-dismiss="modal" aria-hidden="true">
														<span>Назад</span>
													</div>																		
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>