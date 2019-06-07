<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php $custom_title = get_field( 'заголовок_категории_услуг', $term ); ?>
<?php $custom_desc = get_field( 'описание_категории_услуг', $term ); ?>
<div class="wrapper wrapper_service-category-about">
	<div class="container-fluid container-fluid_service-category-about width-1020">
		<div class="row">
			<?php if ( $custom_title ): ?>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="service-category-about__title">
					<h2><?php echo $custom_title; ?></h2>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-12 col-sm-12 col-md-7">
				<div class="service-category-about__part service-category-about__part_part1">
					<div class="service-category-about__desc"><?php echo $custom_desc; ?></div>
					<div class="service-category-about_order-btn-wrapper">
						<div class="service-category-about_order-btn" href="#call">
							<span>Записаться</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-5">
				<div class="service-category-about__part service-category-about__part_part2">
					<div class="service-category-about__swiper">
						<div class="swiper-container swiper-container_service-category-about">
							<div class="swiper-wrapper swiper-wrapper_service-category-about">
								<?php while ( have_rows('слайдер_изображений', $term) ) : the_row(); ?>
									<?php $img = get_sub_field( 'изображение' ); ?>
									<div class="swiper-slide swiper-slide_service-category-about">
										<div class="service-category-about__img">
											<img src="<?php echo $img['url'];?>" />
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
						<div class="swiper-button-prev swiper-button-prev_service-category-about"></div>
						<div class="swiper-button-next swiper-button-next_service-category-about"></div>
						<div class="swiper-pagination swiper-pagination_service-category-about"></div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>