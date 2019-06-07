<div class="wrapper wrapper_breadcrumbs">
	<div class="container-fluid container-fluid_breadcrumbs width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<?php if ( function_exists( 'bcn_display' ) && !is_front_page() ): ?>
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
						<?php bcn_display(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>