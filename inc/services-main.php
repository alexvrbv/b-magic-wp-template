<?php $banner = get_field( 'баннер' ); ?>
<?php if ( $banner ): ?>
	<div class="wrapper wrapper_services-main" style="background: url(<?php echo $banner['url']; ?>) no-repeat 50% 50%;">
<?php else: ?>
	<div class="wrapper wrapper_services-main">
<?php endif; ?>
	<div class="container-fluid container-fluid_services-main width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="services-main__content">
					<div class="services-main__title"><?php the_title(); ?></div>
					<div class="services-main__desc"><?php the_field( 'краткое_описание' ); ?></div>
					<div class="services-main__order-btn" href="#call">
						<span>Записаться</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>