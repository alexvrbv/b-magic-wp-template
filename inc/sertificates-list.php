<?php if( have_rows('сертификаты') ): ?>
<div class="wrapper wrapper_sertificates-list" id="sertificates">
	<div class="container-fluid container-fluid_sertificates-list width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="sertificates-list__title">
					<h2>Сертификаты/Дипломы</h2>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="sertificates-list__swiper">
					<div class="swiper-container swiper-container_sertificates-list">
						<div class="swiper-wrapper swiper-wrapper_sertificates-list">
    						<?php while ( have_rows('сертификаты') ) : the_row(); ?>
								<?php $sert = get_sub_field( 'сертификат' ); ?>
								<div class="swiper-slide swiper-slide_sertificates-list">
									<div class="sertificate">
										<img src="<?php echo $sert['url'];?>" />
									</div>
								</div>
    						<?php endwhile; ?>
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-prev_sertificates-list"></div>
					<div class="swiper-button-next swiper-button-next_sertificates-list"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<? endif; ?>