<div class="wrapper wrapper_content">
	<div class="container-fluid container-fluid_content width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>		
</div>