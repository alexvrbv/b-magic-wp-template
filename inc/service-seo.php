<?php $seo_title = get_field( 'seo_заголовок' ); ?>
<?php $seo_desc = get_field( 'seo_описание' ); ?>
<div class="wrapper wrapper_service-seo">
	<div class="container-fluid container-fluid_service-seo width-1020">
		<div class="row">
			<?php if ( $seo_title ): ?>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="service-seo__title">
					<h2><?php echo $seo_title; ?></h2>
				</div>
			</div>
			<?php endif; ?>
			<?php if ( $seo_desc ): ?>
				<div class="col-12 col-sm-12 col-md-12">
					<div class="service-seo__desc"><?php echo $seo_desc; ?></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>