<?php if( have_rows('примеры_работ') ): ?>
<div class="wrapper wrapper_examples-list" id="examples">
	<div class="container-fluid container-fluid_examples-list width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="examples-list__title">
					<h2>Примеры работ</h2>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="examples-list__swiper">
					<div class="swiper-container swiper-container_examples-list">
						<div class="swiper-wrapper swiper-wrapper_examples-list">
    						<?php while ( have_rows('примеры_работ') ) : the_row(); ?>
								<?php $photo_before = get_sub_field( 'фото_до' ); ?>
								<?php $photo_after = get_sub_field( 'фото_после' ); ?>
								<div class="swiper-slide swiper-slide_examples-list">
									<div class="example">
										<div class="example-part example-part_before">
											<div class="example-part__title">
												<span>До</span>
											</div>
											<div class="example-part__img" style="background-image: url(<?php echo $photo_before['url']; ?>)"></div>
										</div>
										<div class="example-part example-part_after">
											<div class="example-part__title">
												<span>После</span>
											</div>
											<div class="example-part__img" style="background-image: url(<?php echo $photo_after['url']; ?>)"></div>										
										</div>
									</div>
								</div>
    						<?php endwhile; ?>
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-prev_examples-list"></div>
					<div class="swiper-button-next swiper-button-next_examples-list"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<? endif; ?>