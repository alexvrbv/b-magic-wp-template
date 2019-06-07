<div class="wrapper wrapper_about-content">
	<div class="container-fluid container-fluid_about-content width-1020">
		<div class="row">
			<?php $image_content = get_field( 'изображение_в_подробном_описании' ); ?>
			<?php if ( $image_content ): ?>
				<div class="col-12 col-sm-12 col-md-12 col_about-content" style="background-image: url(<?php echo $image_content['url']; ?>);">
			<?php else: ?>
				<div class="col-12 col-sm-12 col-md-12 col_about-content">
			<?php endif; ?>
				<div class="about-content__content">
					<?php if ( $image_content ): ?>
						<div class="about-content__title">
							<h2><?php the_field( 'заголовок_подробного_описания' ); ?></h2>
						</div>
					<?php endif; ?>
					<div class="about-content__desc"><?php the_field( 'подробное_описание' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>