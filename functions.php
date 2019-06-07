<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage B-magic
 */

 // allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
add_action('admin_head', 'fix_svg');
add_theme_support( 'post-thumbnails' ); // для всех типов постов
 
add_action( 'init', 'service' ); // Использовать функцию только внутри хука init
function service() {
	$labels1 = array(
		'name' => 'Товары',
		'singular_name' => 'Товар', // админ панель Добавить->Функцию
		'add_new' => 'Добавить товар',
		'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
		'edit_item' => 'Редактировать товар',
		'new_item' => 'Новый товар',
		'all_items' => 'Все товары',
		'view_item' => 'Просмотр товара на сайте',
		'search_items' => 'Искать товар',
		'not_found' =>  'Товары не найдены.',
		'not_found_in_trash' => 'В корзине нет товаров.',
		'menu_name' => 'Товары' // ссылка в меню в админке
	);
	$args1 = array(
		'labels' => $labels1,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('product_category'),
	);	
	register_post_type('product', $args1);

	register_taxonomy('product_category', array('product'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории товаров',
			'singular_name'     => 'Категория товаров',
			'search_items'      => 'Искать категории товаров',
			'all_items'         => 'Все категории товаров',
			'view_item '        => 'Просмотр категории',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Переименовать категорию',
			'menu_name'         => 'Категории товаров',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'has_archive'           => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
	
	$labels2 = array(
		'name' => 'Акции',
		'singular_name' => 'Акция', // админ панель Добавить->Функцию
		'add_new' => 'Добавить акцию',
		'add_new_item' => 'Добавить новую акцию', // заголовок тега <title>
		'edit_item' => 'Редактировать акцию',
		'new_item' => 'Новая акция',
		'all_items' => 'Все акции',
		'view_item' => 'Просмотр акции на сайте',
		'search_items' => 'Акции не найдены.',
		'not_found_in_trash' => 'В корзине нет акций.',
		'menu_name' => 'Акции' // ссылка в меню в админке
	);
	$args2 = array(
		'labels' => $labels2,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('special', $args2);

	$labels3 = array(
		'name' => 'Услуги',
		'singular_name' => 'Услуга', // админ панель Добавить->Функцию
		'add_new' => 'Добавить услугу',
		'add_new_item' => 'Добавить новую услугу', // заголовок тега <title>
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'all_items' => 'Все услуги',
		'view_item' => 'Просмотр услуги на сайте',
		'search_items' => 'Услуги не найдены.',
		'not_found_in_trash' => 'В корзине нет услуг.',
		'menu_name' => 'Услуги' // ссылка в меню в админке
	);
	$args3 = array(
		'labels' => $labels3,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('service', $args3);

	register_taxonomy('service_category', array('service'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории услуг',
			'singular_name'     => 'Категория услуг',
			'search_items'      => 'Искать категории услуг',
			'all_items'         => 'Все категории услуг',
			'view_item '        => 'Просмотр категории',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Переименовать категорию',
			'menu_name'         => 'Категории услуг',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'has_archive'           => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );

	$labels4 = array(
		'name' => 'Специалисты',
		'singular_name' => 'Специалист', // админ панель Добавить->Функцию
		'add_new' => 'Добавить специалиста',
		'add_new_item' => 'Добавить нового специалиста', // заголовок тега <title>
		'edit_item' => 'Редактировать специалиста',
		'new_item' => 'Новый специалист',
		'all_items' => 'Все специалисты',
		'view_item' => 'Просмотр специалиста на сайте',
		'search_items' => 'Специалисты не найдены.',
		'not_found_in_trash' => 'В корзине нет специалистов.',
		'menu_name' => 'Специалисты' // ссылка в меню в админке
	);
	$args4 = array(
		'labels' => $labels4,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('specialist', $args4);

	register_taxonomy('specialist_category', array('specialist'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории специалистов',
			'singular_name'     => 'Категория специалистов',
			'search_items'      => 'Искать категории специалистов',
			'all_items'         => 'Все категории специалистов',
			'view_item '        => 'Просмотр категории',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Переименовать категорию',
			'menu_name'         => 'Категории специалистов',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'has_archive'           => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );	

}
if ( 'service' != $screen->post_type )
	return;

?>