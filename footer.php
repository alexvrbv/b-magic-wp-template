	<?php global $settings; ?>
		<div class="wrapper wrapper_call-footer">
			<div class="container-fluid container-fluid_call-footer width-1020">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12">
						<div class="call-footer">
							<div class="call-footer__title">
								<span>Будем на связи</span>
							</div>
							<div class="call-footer__desc">
								<span>Консультация - бесплатно!</span>
							</div>
							<div class="call-footer__form">
								<?php echo do_shortcode( '[contact-form-7 id="8" title="Обратный звонок"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container-fluid width-1020">
				<div class="row">
					<!--<div class="col-12 col-sm-12 col-md-6 col_footer col_footer_1">
						<div class="footer__menus">
							<div class="footer__menu footer__menu_1">
								<ul>
									<li><a href="#">Популярные процедуры</a></li>
									<li><a href="#">Морщины</a></li>
									<li><a href="#">Сниженный тургор кожи</a></li>
									<li><a href="#">Нарушения пигментации</a></li>
									<li><a href="#">Алопеция</a></li>
									<li><a href="#">Нарушения пигментации</a></li>
									<li><a href="#">Алопеция</a></li>
								</ul>
							</div>
							<div class="footer__menu footer__menu_2">
								<ul>
									<li><a href="#">Карта сайта</a></li>
									<li><a href="#">Новости</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="/продукция/">Продукция</a></li>
									<li><a href="/акции/">Акции</a></li>
									<li><a href="/контакты/">Контакты</a></li>
									<li><a href="#">Специалисты</a></li>
								</ul>
							</div>
						</div>
					</div>-->
					<!--<div class="col-12 col-sm-12 col-md-6 col_footer col_footer_2">
						<div class="footer__socials-phone">
							<div class="footer__socials">
								<a class="footer__social footer__social_fb" href="#"></a>
								<a class="footer__social footer__social_insta" href="#"></a>
								<a class="footer__social footer__social_yt" href="#"></a>
								<a class="footer__social footer__social_vk" href="#"></a>
								<a class="footer__social footer__social_wa" href="#"></a>
							</div>
							<div class="footer__phone">
								<span>8 800 2000 600</span>
							</div>
						</div>
						<div class="footer__divider"></div>						
						<div class="footer__vk-widget">
							<script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
							<div id="vk_groups"></div>
							<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, color1: '1C1C1C', color2: 'FFFFFF', color3: '52555C'}, 20003922);
							</script>
						</div>
						<div class="footer__insta-widget">
						</div>
					</div>-->
					<div class="col-12 col-sm-12 col-md-12">
						<div class="footer__copyright">
							<span>HelenBirk Med 2018</span>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.qtip.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/swiper.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.validate.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/input.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.matchHeight-min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery-filestyle.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.hoverIntent.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
	</body>
</html>