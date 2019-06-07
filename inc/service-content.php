<div class="wrapper wrapper_service-content" id="content">
	<div class="service-content__inner-helper">
		<div class="container-fluid container-fluid_service-content width-1020">
			<div class="row">
				<?php $image_content = get_field( 'изображение_в_подробном_описании' ); ?>
				<?php if ( $image_content ): ?>
					<div class="col-12 col-sm-12 col-md-12 col_service-content">
				<?php else: ?>
					<div class="col-12 col-sm-12 col-md-12 col_service-content">
				<?php endif; ?>
					<div class="service-content__content">
						<div class="service-content__title">
							<h2>Описание услуги</h2>
						</div>
						<div class="service-content__desc"><?php the_field( 'подробное_описание' ); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>