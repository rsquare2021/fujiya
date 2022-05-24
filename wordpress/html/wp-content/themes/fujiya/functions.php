<?php
// 追加function
add_filter('show_admin_bar', '__return_false');
remove_filter('the_content', 'wpautop');
// ルート簡略化
function imgr() {
    return esc_url( get_template_directory_uri().'/assets/images' );
}
function jsr() {
    return esc_url( get_template_directory_uri().'/assets/js' );
}
function cssr() {
    return esc_url( get_template_directory_uri().'/assets/css' );
}
function pdfr() {
    return esc_url( get_template_directory_uri().'/assets/pdf' );
}
function title() {
    return the_title();
}
function eyecatch() {
    return the_post_thumbnail('full');
}
// ルーティング
// home
function home() {
	return esc_url( home_url() );
}
// 富士屋のこだわり
function about() {
	return esc_url( home_url().'/about' );
}
// 会社案内
function company() {
	return esc_url( home_url().'/company' );
}
// 店舗・チラシ情報
function shoplist() {
	return esc_url( home_url().'/shoplist' );
}
// 採用情報
function recruit() {
	return esc_url( home_url().'/recruit' );
}
// 親ページ
function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

// 投稿名称変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = '新着情報';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = '新着情報';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// カスタム投稿
// お買い得情報
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
	register_post_type( 'slide',
		array(
				'labels' => array(
				'name' => __( 'スライド' ),
				'singular_name' => __( 'スライド' ),
				'add_new' => _x('新規追加', 'スライド'),
				'add_new_item' => __('新規追加'),
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','thumbnail','revisions'),
		)
	);
	register_post_type( 'bargain',
		array(
				'labels' => array(
				'name' => __( 'お買得情報' ),
				'singular_name' => __( 'お買得情報' ),
				'add_new' => _x('新規追加', 'お買得情報'),
				'add_new_item' => __('新規追加'),
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','thumbnail','revisions'),
		)
	);
	register_post_type( 'banner',
		array(
				'labels' => array(
				'name' => __( 'バナー' ),
				'singular_name' => __( 'バナー' ),
				'add_new' => _x('新規追加', 'バナー'),
				'add_new_item' => __('新規追加'),
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','thumbnail','revisions'),
		)
	);
	register_post_type( 'shops',
		array(
				'labels' => array(
				'name' => __( '店舗' ),
				'singular_name' => __( '店舗' ),
				'add_new' => _x('新規追加', '店舗'),
				'add_new_item' => __('新規追加'),
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','thumbnail','revisions'),
		)
	);
	register_post_type( 'enkaku',
		array(
				'labels' => array(
				'name' => __( '沿革' ),
				'singular_name' => __( '沿革' ),
				'add_new' => _x('新規追加', '沿革'),
				'add_new_item' => __('新規追加'),
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-edit',
			'supports' => array('title','editor','thumbnail','revisions'),
		)
	);
}

// タクソノミー
function add_taxonomy() {
	register_taxonomy(
		'shops_category',
		'shops',
		array(
			'hierarchical' => true,
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true,
		)
	);
}
add_action( 'init', 'add_taxonomy' );

// スライドショー
function slides() {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'slide',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	return get_posts($args);
}

// 新着情報
function news_lists($cat) {
	if($cat == 'all') {
		$cat = '';
	}
	$args = array(
		'posts_per_page' => 500,
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => $cat,
	);
	return get_posts($args);
}

// お買い得情報
function bargain_lists() {
	$args = array(
		'posts_per_page' => 5,
		'post_type' => 'bargain',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	return get_posts($args);
}

// 店舗一覧
function shop_name_lists() {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'shops',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	return get_posts($args);
}

// バナー一覧
function banner_lists() {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'banner',
		'orderby' => 'date',
		'order' => 'DESC',
	);
	return get_posts($args);
}

// 沿革
function enkakus() {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'enkaku',
		'orderby' => 'date',
		'order' => 'ASC',
	);
	return get_posts($args);
}

// 店舗情報
function shop_lists($cat) {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => array('shops'),
		'orderby' => 'date',
		'order' => 'DESC',
		'tax_query' => array(
			array(
				'taxonomy' => 'shops_category',
				'field' => 'slug',
				'terms' => $cat,
			),
		),
	);
	return get_posts($args);
}












if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'twentynineteen' ) : null,
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'twentynineteen' ) : null,
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height.
		add_theme_support( 'custom-line-height' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Nineteen 2.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentynineteen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Post title. */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentynineteen_excerpt_more' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Common theme functions.
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';