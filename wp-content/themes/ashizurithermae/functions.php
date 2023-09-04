<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// サイト情報
define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

define( 'THEME_NOTE', 'ashizurithermae' );

// define( 'WPCF7_AUTOP', false );

error_reporting(0);

flush_rewrite_rules();

// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post', 'mw-wp-form'))) {
        $editor = true;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

// エディター独自スタイル追加
//TinyMCE追加用のスタイルを初期化
if(!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array) {
        //追加するスタイルの配列を作成
        $style_formats = array(
            array(
                'title' => '注釈',
                'inline' => 'span',
                'classes' => 'cmn_note'
            )
        );
        //JSONに変換
        $init_array['style_formats'] = json_encode($style_formats);
        return $init_array;
    }
}

add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

// オプションページを追加
// if(function_exists('acf_add_options_page')) {
//     $option_page = acf_add_options_page(array(
//         'page_title' => 'テーマオプション', // 設定ページで表示される名前
//         'menu_title' => 'テーマオプション', // ナビに表示される名前
//         'menu_slug' => 'top_setting',
//         'capability' => 'edit_posts',
//         'redirect' => false
//     ));
// }

function my_script_constants() {
?>
    <script type="text/javascript">
        var templateUrl = '<?php echo S_DIRE_URI; ?>';
		var templateDirectoryUri = '<?php echo T_DIRE_URI; ?>';
        var baseSiteUrl = '<?php echo HOME; ?>';
        var themeAjaxUrl = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
    </script>
<?php
}

add_action('wp_head', 'my_script_constants');
// CSS・スクリプトの読み込み
function theme_add_files() {
    global $post;

	wp_enqueue_style('c-font', T_DIRE_URI.'/assets/font/fonts.css', [], '1.0', 'all');
	
    wp_enqueue_style('c-reset', T_DIRE_URI.'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('c-slick', T_DIRE_URI.'/assets/css/slick.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-vegas', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '1.0', 'all');
    wp_enqueue_style('c-common', T_DIRE_URI.'/assets/css/common.css', [], '1.0', 'all');
    wp_enqueue_style('c-style', T_DIRE_URI.'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('c-theme', T_DIRE_URI.'/style.css', [], '1.0', 'all');

    // WordPress本体のjquery.jsを読み込まない
    if(!is_admin()) {
        wp_deregister_script('jquery');
    }

    wp_enqueue_script('s-jquery', T_DIRE_URI.'/assets/js/jquery.min.js', [], '1.0', false);
    wp_enqueue_script('s-slick', T_DIRE_URI.'/assets/js/slick.min.js', [], '1.0', true);
    wp_enqueue_script('s-vegas', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js', [], '1.0', true);
    wp_enqueue_script('s-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '1.0', true);
    wp_enqueue_script('s-fontawesome', 'https://kit.fontawesome.com/8cbdf0a85f.js', [], '6.8.1', true);
    wp_enqueue_script('s-common', T_DIRE_URI.'/assets/js/common.js', [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_add_files');

function add_fontawesome_attributes( $tag, $handle ) {
    if ( 's-fontawesome' === $handle ) {
        return str_replace( 'src', 'crossorigin="anonymous" src', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'add_fontawesome_attributes', 10, 2 );

function post_menu_remove () { 
    remove_menu_page('edit.php');
}
 
// add_action('admin_menu', 'post_menu_remove');

function custom_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'product-type' || $args['taxonomy'] === 'category' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { 
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'custom_term_radio_checklist' );

function theme_custom_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_editor_style('assets/css/reset.css');
    add_editor_style('assets/css/common.css');
    add_editor_style('assets/css/style.css');
    add_editor_style('editor-style.css');
}

add_action( 'after_setup_theme', 'theme_custom_setup' );

function replaceImagePath( $arg ) {
    $content = str_replace('"images/', '"' . T_DIRE_URI . '/assets/img/', $arg);
    $content = str_replace('"/images/', '"' . T_DIRE_URI . '/assets/img/', $content);
    $content = str_replace(', images/', ', ' . T_DIRE_URI . '/assets/img/', $content);
    $content = str_replace("('images/", "('". T_DIRE_URI . '/assets/img/', $content);
    return $content;
}

add_action('the_content', 'replaceImagePath');

function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
    }
    remove_filter( 'the_excerpt', 'wpautop' );
    return $content;
}

add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('query_vars', function($vars) {
	$vars[] = 'news_category';
	return $vars;
});

add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
  
function custom_email_confirmation_validation_filter( $result, $tag ) {
  if ( 'your-email-confirm' == $tag->name ) {
    $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
    $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
  
    if ( $your_email != $your_email_confirm ) {
      $result->invalidate( $tag, "これが正しいメールアドレスですか？" );
    }
  }
  
  return $result;
}

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = T_DIRE_URI . "/assets/img/noimage.jpg";
    }
    return $first_img;
}

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


function taxonomy_checklist_checked_ontop_filter ($args) {
    $args['checked_ontop'] = false;
    return $args;
}

add_filter('wp_terms_checklist_args','taxonomy_checklist_checked_ontop_filter');

function new_excerpt_length($length) {
    return 112;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

/**
 * ショートコード
 */
function do_span($atts) {
	$atts = shortcode_atts([
		'class' => '',
		'content' => '',
	], $atts, 'span' );

	return '<span class="' . $atts['class'] . '">' . $atts['content'] . '</span>';
}
add_shortcode('span', 'do_span');

function do_bold($atts) {
	$atts = shortcode_atts([
		'class' => '',
		'content' => '',
	], $atts, 'bold' );

	return '<span class="bold ' . $atts['class'] . '">' . $atts['content'] . '</span>';
}
add_shortcode('bold', 'do_bold');

function do_br($atts) {
	$atts = shortcode_atts([
		'class' => '',
	], $atts, 'br' );

	return '<br class="' . $atts['class'] . '">';
}
add_shortcode('br', 'do_br');

/**
 * テーマ用関数
 */
function img_srcset($filename, $ext = 'webp', $id = false, $class = false, $lazyload = true, $attrs = []) : string{
	$results = ['img'];

	// id設定
	if (!empty($id)) {
		$results[] = 'id="' . $id . '"';
	}

	// class設定
	if (!empty($class)) {
		$classes = array_map('trim', explode(' ', $class));
		// LazyLoad設定
		if ($lazyload) {
			$classes[] = 'lazyload';
		}
		$classes = array_unique($classes);
		$results[] = 'class="' . implode(' ', $classes) . '"';
	} else {
		// LazyLoad設定
		if ($lazyload) {
			$results[] = 'class="lazyload"';
		}
	}

	if(!empty($attrs)) {
		foreach ($attrs as $key => $attr) {
			$results[] = $key . '="' . $attr . '"';
		}
	}

	// レスポンシブ対応
	$files = [];
	$files[] = get_template_directory_uri() . '/assets/img/' . $filename . '.' . $ext . ' 1x';
	$files[] = get_template_directory_uri() . '/assets/img/' . $filename . '@2x.' . $ext . ' 2x';
	$files[] = get_template_directory_uri() . '/assets/img/' . $filename . '@3x.' . $ext . ' 3x';
	$files[] = get_template_directory_uri() . '/assets/img/' . $filename . '@4x.' . $ext . ' 4x';
	if ($lazyload) {
		$results[] = 'data-srcset="' . implode(', ', $files) . '"';
	} else {
		$results[] = 'srcset="' . implode(', ', $files) . '"';
	}

	// imgタグ合成
	return '<' . implode(' ', $results) . '>';
}

function img_srcset_abs($filename, $ext = 'webp', $id = false, $class = false, $lazyload = true) : string{
	$results = ['img'];

	// id設定
	if (!empty($id)) {
		$results[] = 'id="' . $id . '"';
	}

	// class設定
	if (!empty($class)) {
		$classes = array_map('trim', explode(' ', $class));
		// LazyLoad設定
		if ($lazyload) {
			$classes[] = 'lazyload';
		}
		$classes = array_unique($classes);
		$results[] = 'class="' . implode(' ', $classes) . '"';
	} else {
		// LazyLoad設定
		if ($lazyload) {
			$results[] = 'class="lazyload"';
		}
	}

	// レスポンシブ対応
	$files = [];
	$files[] = $filename . '-320x320.' . $ext . ' 1x';
	$files[] = $filename . '-640x640.' . $ext . ' 2x';
	$files[] = $filename . '-960x960.' . $ext . ' 3x';
	$files[] = $filename . '-1280x1280.' . $ext . ' 4x';
	if ($lazyload) {
		$results[] = 'data-srcset="' . implode(', ', $files) . '"';
	} else {
		$results[] = 'srcset="' . implode(', ', $files) . '"';
	}

	// imgタグ合成
	return '<' . implode(' ', $results) . '>';
}

function img_src($filename, $ext = 'webp', $id = false, $class = false, $lazyload = true) : string{
	$results = ['img'];

	// id設定
	if (!empty($id)) {
		$results[] = 'id="' . $id . '"';
	}

	// class設定
	if (!empty($class)) {
		$classes = array_map('trim', explode(' ', $class));
		// LazyLoad設定
		if ($lazyload) {
			$classes[] = 'lazyload';
		}
		$classes = array_unique($classes);
		$results[] = 'class="' . implode(' ', $classes) . '"';
	} else {
		// LazyLoad設定
		if ($lazyload) {
			$results[] = 'class="lazyload"';
		}
	}

	// レスポンシブ対応
	$files = [];
	$files[] = get_template_directory_uri() . '/assets/img/' . $filename . '.' . $ext . ' 1x';
	if ($lazyload) {
		$results[] = 'data-src="' . implode(', ', $files) . '"';
	} else {
		$results[] = 'src="' . implode(', ', $files) . '"';
	}

	// imgタグ合成
	return '<' . implode(' ', $results) . '>';
}

function img_src_abs($filename, $ext = 'webp', $id = false, $class = false, $lazyload = true) : string{
	$results = ['img'];

	// id設定
	if (!empty($id)) {
		$results[] = 'id="' . $id . '"';
	}

	// class設定
	if (!empty($class)) {
		$classes = array_map('trim', explode(' ', $class));
		// LazyLoad設定
		if ($lazyload) {
			$classes[] = 'lazyload';
		}
		$classes = array_unique($classes);
		$results[] = 'class="' . implode(' ', $classes) . '"';
	} else {
		// LazyLoad設定
		if ($lazyload) {
			$results[] = 'class="lazyload"';
		}
	}

	// レスポンシブ対応
	$files = [];
	$files[] = $filename . '-320x320.' . $ext . ' 1x';
	if ($lazyload) {
		$results[] = 'data-src="' . implode(', ', $files) . '"';
	} else {
		$results[] = 'src="' . implode(', ', $files) . '"';
	}

	// imgタグ合成
	return '<' . implode(' ', $results) . '>';
}

function img_src_abs4x($filename, $ext = 'webp', $id = false, $class = false, $lazyload = true) : string{
	$results = ['img'];

	// id設定
	if (!empty($id)) {
		$results[] = 'id="' . $id . '"';
	}

	// class設定
	if (!empty($class)) {
		$classes = array_map('trim', explode(' ', $class));
		// LazyLoad設定
		if ($lazyload) {
			$classes[] = 'lazyload';
		}
		$classes = array_unique($classes);
		$results[] = 'class="' . implode(' ', $classes) . '"';
	} else {
		// LazyLoad設定
		if ($lazyload) {
			$results[] = 'class="lazyload"';
		}
	}

	// レスポンシブ対応
	$files = [];
	$files[] = $filename . '.' . $ext;
	if ($lazyload) {
		$results[] = 'data-src="' . implode(', ', $files) . '"';
	} else {
		$results[] = 'src="' . implode(', ', $files) . '"';
	}

	// imgタグ合成
	return '<' . implode(' ', $results) . '>';
}

?>