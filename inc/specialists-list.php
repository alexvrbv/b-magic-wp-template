<div class="wrapper wrapper_doctors wrapper_doctors_service" id="specialists">
	<div class="container-fluid container-fluid_doctors width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="doctors__title">
					<h2>Специалисты</h2>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="doctors__desc">
					<span>Выберите из списка или получите консультацию</span>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="doctors__swiper">
					<div class="swiper-container swiper-container_doctors">
						<div class="swiper-wrapper swiper-wrapper_doctors">
							<?php
							$args = array(
								'post_type' => 'specialist'
								);
							$loop = new WP_Query($args);
							if ( $loop->have_posts() ) : ?>
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php $name = get_the_title(); ?>
									<?php $link = get_permalink(); ?>
									<?php $photo = get_field( 'фото_специалиста' ); ?>
									<?php $specialization = get_field( 'специализация_специалиста' ); ?>
									<div class="swiper-slide swiper-slide_doctors">
										<div class="doctor">
											<a href="<?php echo $link; ?>">
												<?php if( $photo ): ?>
													<div class="doctor__img"  style="background: url(<?php echo $photo['url']; ?>) no-repeat 50% 50%;">
												<?php else: ?>
													<div class="doctor__img" >
												<?php endif; ?>
													<span>Записаться</span>
												</div>
												<?php if( $name ): ?>
													<div class="doctor__name">
														<?php echo $name; ?>
													</div>
												<?php endif; ?>
												<?php if( $specialization ): ?>
													<div class="doctor__desc">
														<?php echo $specialization; ?>
													</div>
												<?php endif; ?>
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-prev_doctors"></div>
					<div class="swiper-button-next swiper-button-next_doctors"></div>
				</div>
			</div>
		</div>
	</div>
</div>