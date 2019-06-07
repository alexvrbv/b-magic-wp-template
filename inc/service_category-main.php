<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php $banner = get_field( 'баннер', $term ); ?>
<?php if ( $banner ): ?>
	<div class="wrapper wrapper_service_category-main" style="background: url(<?php echo $banner['url']; ?>) no-repeat 50% 50%;">
<?php else: ?>
	<div class="wrapper wrapper_service_category-main">
<?php endif; ?>
	<div class="container-fluid container-fluid_service_category-main width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="service_category-main__content">
					<div class="service_category-main__title"><?php echo $term->name; ?></div>
					<div class="service_category-main__desc"><?php the_field( 'краткое_описание', $term ); ?></div>
					<div class="service_category-main__order-btn" href="#call">
						<span>Записаться</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>