<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?> | <?php ('page' == get_option( 'show_on_front' ) && is_front_page()) ? bloginfo('description') : wp_title(''); ?></title>
		<meta charset="UTF-8">
		<meta name="author" content="HelenBirk Med" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="HelenBirk Med" />
		<!--<link rel="shortcut icon" href="<?php //echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/fullpage.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/jquery.qtip.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/swiper.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/jquery-filestyle.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php global $settings; ?>
	<div class="wrapper wrapper_header">
		<nav class="navbar navbar-expand-md navbar-dark width-100-percents">
			<a class="navbar-brand" href="/">
				<img src="<?php echo get_template_directory_uri();?>/img/logo-dark.svg">
			</a>
			<a class="navbar-brand navbar-brand_white" href="/">
				<img src="<?php echo get_template_directory_uri();?>/img/logo-mobile.png">
			</a>
			<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-right" id="navbarSupportedContent">
				<div class="mobile-menu-close" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					
				</div>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/о-компании/">О нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/акции/">Акции</a>
					</li>
					<li class="nav-item nav-item_services">
						<a class="nav-link" href="/услуги/">Услуги</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/продукция/">Продукция</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="#partners">Партнеры</a>
					</li>-->
					<li class="nav-item">
						<a class="nav-link" href="/специалисты/">Специалисты</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/контакты/">Контакты</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link nav-link_search" href="#">
							<img class="nav-link_search__img" src="<?php //echo get_template_directory_uri();?>/img/search.svg">
							<img class="nav-link_search__img_grey"src="<?php //echo get_template_directory_uri();?>/img/search-grey.svg">
						</a>
					</li>-->				
				</ul>
				<!--<div class="header-search mr-auto">
					<?php //get_search_form(); ?>
				</div>-->
			</div>
			<div class="header-contacts">
				<div class="header-contacts__phone">
					<span>+7 (812) 604-03-17</span>
				</div>
				<div class="header-contacts__address">
					<span>Санкт-Петербург,<br>Артиллерийская ул., 1</span>
				</div>
			</div>
			<div class="header-appointment">
				<div class="header-appointment__btn" href="#call">
					<span>Запись на прием</span>
				</div>
			</div>
		</nav>
		<div class="services-dropdown">
			<div class="container-fluid container-fluid_services-dropdown">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-3 col_services-dropdown">
						<div class="col_services-dropdown-inner">
							<div class="services-dropdown__item-img">
								<img src="<?php echo get_template_directory_uri();?>/img/injection.svg">
							</div>
							<div class="services-dropdown__item-title services-dropdown__item-title-header">
								<span>Для лица</span>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Аппаратная косметология</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Ультразвуковая чистка</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Вакуумная чистка</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>RF- лифтинг</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Микротоковая терапия лица</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Ультразвуковой фонофорез</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Газожидкостный пилинг</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Карбоновый пилинг (неодимовый лазер)</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>SMAS-лифтинг</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Кислородная мезотерапия Мезоджен</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Безинъекционная мезотерапия</span>
														</a>
													</li>																												
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Инъекционная косметология</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Мезотерапия</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Биоревитализация</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Контурная и объемная пластика</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Плазмолифтинг</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Плацентарная терапия Лаеннек</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Лифтинг мезонитями</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Карбокситерапия</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Липолититическая программ</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Эстетическая косметология</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Альгинатные маски</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Криотерапия лица</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Антикуперозная программа</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Пилинги</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Профессиональный уход на основе косметики Christin</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Карбокситерапия неинвазивная СО2</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Диагностика Dermacheck</span>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Консультация косметолога</span>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Консультация дерматолога</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 col_services-dropdown">
						<div class="col_services-dropdown-inner">
							<div class="services-dropdown__item-img">
								<img src="<?php echo get_template_directory_uri();?>/img/waist.svg">
							</div>
							<div class="services-dropdown__item-title services-dropdown__item-title-header">
								<span>Для тела</span>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Аппаратная косметология</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Rf-лифтинг</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Вакуумно-роликовый массаж</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Криотерапия</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Прессотерапия</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Миостимуляция</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Ультразвуковая липосакция</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Криолиполиз</span>
														</a>
													</li>																												
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Инъекционная косметология</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Мезотерапия</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Липолитическая программа</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Укрепление сосудов</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Карбокситерапия</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Плацентарная терапия Лаеннек</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Интимная пластика</span>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Массаж</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Массаж общий</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Лимфодренажный массаж</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Лечебный массаж</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Антицеллюлитный массаж</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Баночный массаж</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Акупунктурный точечный китайский массаж</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Гравитационная терапия</span>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Моделирование фигуры и диетология</span>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Консультация врача - диетолога</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 col_services-dropdown">
						<div class="col_services-dropdown-inner">
							<div class="services-dropdown__item-img">
								<img src="<?php echo get_template_directory_uri();?>/img/thinking.svg">
							</div>
							<div class="services-dropdown__item-title services-dropdown__item-title-header">
								<span>Трихология</span>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Аппаратные услуги</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Криопроцедура кожи головы</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Кислородная мезотерапия Мезоджен</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Микротоковая терапия кожи голов</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Газожидкостный пилинг кожи головы</span>
														</a>
													</li>																												
													<li>
														<a href="/">
															<span>Пилинг «Система 4»</span>
														</a>
													</li>																												
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Инъекционные услуги</span>
								</div>
								<div class="services-dropdown__item-level-3-menu">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-3">
											<div class="services-dropdown__item-level-3-menu-col">
												<ul>
													<li>
														<a href="/">
															<span>Мезотерапия кожи головы</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Плазмолифтинг кожи головы</span>
														</a>
													</li>
													<li>
														<a href="/">
															<span>Карбокситерапия кожи головы</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 col_services-dropdown">
						<div class="col_services-dropdown-inner">
							<div class="services-dropdown__item-img">
								<img src="<?php echo get_template_directory_uri();?>/img/nail.svg">
							</div>
							<div class="services-dropdown__item-title services-dropdown__item-title-header">
								<span>Ногтевой сервис</span>
							</div>
							<div class="services-dropdown__item">
								<div class="services-dropdown__item-title">
									<span>Медицинский педикюр</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>