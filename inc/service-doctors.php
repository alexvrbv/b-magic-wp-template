<?php if( have_rows('специалисты') ): ?>
	<div class="wrapper wrapper_doctors wrapper_doctors_service">
		<div class="container-fluid container-fluid_doctors width-1020">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="doctors__title">
						<h2>Специалисты по данной услуге</h2>
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
								<?php while( have_rows('специалисты') ): the_row(); 

									// vars
									$doctor_name = get_sub_field('имя_специалиста');
									$doctor_photo = get_sub_field('фото_специалиста');
									$doctor_specialization = get_sub_field('специализация_специалиста');

									?>
									<div class="swiper-slide swiper-slide_doctors">
										<div class="doctor">
											<?php if( $doctor_photo ): ?>
												<div class="doctor__img"  style="background: url(<?php echo $doctor_photo['url']; ?>) no-repeat 50% 50%;">
											<?php else: ?>
												<div class="doctor__img" >
											<?php endif; ?>
												<span>Записаться</span>
											</div>
											<?php if( $doctor_name ): ?>
												<div class="doctor__name">
													<?php echo $doctor_name; ?>
												</div>
											<?php endif; ?>
											<?php if( $doctor_specialization ): ?>
												<div class="doctor__desc">
													<?php echo $doctor_specialization; ?>
												</div>
											<?php endif; ?>
										</div>
									</div>

								<?php endwhile; ?>
							</div>
						</div>
						<div class="swiper-button-prev swiper-button-prev_doctors"></div>
						<div class="swiper-button-next swiper-button-next_doctors"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>