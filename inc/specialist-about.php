<?php $photo = get_field( 'фото_специалиста_основное' ); ?>
<?php $desc = get_field( 'описание_специалиста' ); ?>
<div class="wrapper wrapper_specialist-about" id="about">
	<div class="container-fluid container-fluid_specialist-about width-1020">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-5 col_specialist-about col_specialist-about_part-1">
				<?php if ( $photo ) { ?>
					<div class="specialist-about_photo">
						<img src="<?php echo $photo['url']; ?>" />
					</div>
				<?php } ?>
				<div class="specialist-about_order-btn-wrapper">
					<div class="specialist-about_order-btn" href="#call">
						<span>Записаться</span>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-7 col_specialist-about col_specialist-about_part-2">
				<div class="specialist-about_title"><?php the_title(); ?></div>
				<div class="specialist-about_desc">
					<?php echo $desc; ?>
				</div>
			</div>
		</div>
	</div>
</div>