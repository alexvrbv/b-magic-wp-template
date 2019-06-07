<?php $banner = get_field( 'баннер' ); ?>
<?php if ( $banner ): ?>
	<div class="wrapper wrapper_about-main" style="background: url(<?php echo $banner['url']; ?>) no-repeat 50% 50%;">
<?php else: ?>
	<div class="wrapper wrapper_about-main">
<?php endif; ?>
	<div class="container-fluid container-fluid_about-main width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="about-main__content">
					<div class="about-main__title"><?php the_title(); ?></div>
					<div class="about-main__desc"><?php the_field( 'краткое_описание' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>