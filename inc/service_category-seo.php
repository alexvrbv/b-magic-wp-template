<?php $term = get_queried_object(); // get the current taxonomy term ?>
<?php $seo_title = get_field( 'seo_заголовок', $term ); ?>
<?php $seo_desc = get_field( 'seo_описание', $term ); ?>
<div class="wrapper wrapper_service-category-seo">
	<div class="container-fluid container-fluid_service-category-seo width-1020">
		<div class="row">
			<?php if ( $seo_title ): ?>
			<div class="col-12 col-sm-12 col-md-12">
				<div class="service-category-seo__title">
					<h2><?php echo $seo_title; ?></h2>
				</div>
			</div>
			<?php endif; ?>
			<?php if ( $seo_desc ): ?>
				<div class="col-12 col-sm-12 col-md-12">
					<div class="service-category-seo__desc"><?php echo $seo_desc; ?></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>