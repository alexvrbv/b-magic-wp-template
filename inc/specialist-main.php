<?php $banner = get_field( 'баннер' ); ?>
<?php if ( $banner ): ?>
	<div class="wrapper wrapper_specialist-main" style="background: url(<?php echo $banner['url']; ?>) no-repeat 50% 50%;">
<?php else: ?>
	<div class="wrapper wrapper_specialist-main">
<?php endif; ?>
	<div class="container-fluid container-fluid_specialist-main width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="specialist-main__content">
					<div class="specialist-main__title"><?php the_title(); ?></div>
					<div class="specialist-main__desc"><?php the_field( 'специализация_специалиста' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>