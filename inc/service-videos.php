<?php if( have_rows('видеоролики') ): ?>
	<div class="wrapper wrapper_videos">
		<div class="container-fluid container-fluid_videos width-1020">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="videos__title">
						<h2>Видео по данной услуге</h2>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12">
					<div class="videos__desc">
						<span>Выбирете из списка или получите консультацию</span>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12">
					<div class="videos__swiper">
						<div class="swiper-container swiper-container_videos">
							<div class="swiper-wrapper swiper-wrapper_videos">
								<?php while( have_rows('видеоролики') ): the_row(); 

									// vars
									$video = get_sub_field('видео_из_youtube');

									?>
									<div class="swiper-slide swiper-slide_videos">
										<div class="video">
											<div class="video__inner">
												<?php if( $video ): ?>
													<?php echo $video; ?>
												<?php endif; ?>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
							</div>
						</div>
						<div class="swiper-button-prev swiper-button-prev_videos"></div>
						<div class="swiper-button-next swiper-button-next_videos"></div>
						<div class="swiper-pagination swiper-pagination_videos"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>