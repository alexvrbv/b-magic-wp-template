<?php if( have_rows('цены') ): ?>
	<div class="wrapper wrapper_pricelist" id="pricelist">
		<div class="container-fluid container-fluid_pricelist width-1020">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="pricelist__title">
						<h2>Цены</h2>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12">
					<div class="pricelist">
						<?php while( have_rows('цены') ): the_row(); 

							// vars
							$procedure_name = get_sub_field('наименование_процедуры');
							$procedure_price = get_sub_field('стоимость_процедуры');

							?>

							<div class="pricelist__item able-to-hide">

								<?php if( $procedure_name ): ?>
									<div class="pricelist__item-name">
										<?php echo $procedure_name; ?>
									</div>
								<?php endif; ?>

								<?php if( $procedure_price ): ?>
									<div class="pricelist__item-price">
										<?php echo $procedure_price; ?> руб.
									</div>
								<?php endif; ?>
								
								<div class="clearfix"></div>

							</div>

						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col_pricelist__show-all">
					<div class="pricelist__show-all">
						<span>Все цены</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>