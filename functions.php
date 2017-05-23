<?php

////////////////////////////////// wp_pagenaviのクラス名変更//////////////////////////////////////

add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class_page' );
function custom_wp_pagenavi_class_page($class_name) {
	return 'pager';
}


////////////////////////////////// OGP　//////////////////////////////////////
function ogp_prefix() {
  if (!is_admin()) {
    $ogp_ns = 'og: http://ogp.me/ns#';
    $fb_ns  = 'fb: http://ogp.me/ns/fb#';

    if (!is_singular()) {
      $type_ns = 'website: http://ogp.me/ns/website#';
    } else {
      $type_ns = 'article: http://ogp.me/ns/article#';
    }
    printf('prefix="%1$s %2$s %3$s"', $ogp_ns, $fb_ns, $type_ns);
  }
}

function ogp_meta() {
  if (!is_admin()) {

    global $post;
    $format = '<meta property="%1$s" content="%2$s">';
    $type = 'website';
    $url = esc_url(home_url('/'));
    $site_name = esc_attr(get_option('blogname'));
    $title = $site_name;
    $image = 'http://www.plart-story.jp/wp-content/themes/plart/public/image/PLART_ogp.png';
    $description = esc_attr(get_option('blogdescription'));
    $app_id = '1810486322562458';

    if (is_singular()) {
      $type = 'article';
      $url = esc_url(get_permalink($post->ID));
      $title = esc_attr($post->post_title);
      $description  = strip_tags($post->post_excerpt ? $post->post_excerpt : $post->post_content);
      $description  = mb_substr($description, 0, 50) . '...';
      if (function_exists('has_post_thumbnail') AND has_post_thumbnail($post->ID)) {
        $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        $image = esc_url($attachment[0]);
      } elseif (preg_match('/<img\s[^>]*src=["\']?([^>"\']+)/i', $post->post_content, $match)) {
        $image = esc_url($match[1]);
      }
      $publisher = 'https://www.facebook.com/plartjp';
      printf($format, 'article:publisher', $publisher);
    }

    $args = array(
      'og:type'  => $type,
      'og:url'   => $url,
      'og:title' => $title,
      'og:image' => $image,
      'og:site_name' => $site_name,
      'og:description' => $description,
      'fb:app_id'      => $app_id,
      'twitter:site' => "@plartjp",
      'twitter:card' => "summary_large_image",
      'twitter:title' => $title,
      'twitter:description' => $description,
      'twitter:image:src' => $image
    );
    foreach ($args as $key => $value) {
      printf($format, $key, $value);
    }
  }
}
add_action('wp_head', 'ogp_meta');

////////////////////////////////// カスタムタクソノミー　//////////////////////////////////////

function set_article_type(){

  register_taxonomy(
    'article_type', //タクソノミ名
    'post', //タクソノミを使う投稿タイプ名
    array(
      'rewrite' => array('slug' => 'article_type'), //投稿タイプのスラッグ
      'label' => '投稿の種類', //ラベル名
      'labels' => array(
        'menu_name' => '投稿の種類' //管理画面のメニュー名
      ),
      'public' => true, //公開状態
      'hierarchical' => true, //カテゴリのように扱う場合はtrue
      'has_archive' => true,
      'query_var' => true,
      'show_admin_column' => true, //投稿タイプのテーブルにタクソノミーのカラムを生成
    )
  );

}

add_action('init', 'set_article_type');

//////////////
//


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'book',
    array( 'labels' => array(
        'name' => __( 'Artbooks' ),
        'singular_name' => __( 'Artbook' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail')
    )
  );
}



////////////////////////////////// スラッグからページをゲットする関数 //////////////////////////////////////

/**
 *  * Get a page object by slug.
 *   * https://codex.wordpress.org/Template_Tags/get_posts
 *    */
function wc_get_page_by_slug( $slug = '' ) {
  $pages = get_posts(
    array(
      'post_type' => 'page',
      'name' => $slug,
      'posts_per_page' => 1
    )
  );

  return isset( $pages[0] ) ? $pages[0] : false;
}


/////////////////////////////クエリ書き換え//////////////////////////

function query_at_archive( $query ) {
  // ダッシュボードまたは管理パネルが表示されている、もしくはメインクエリではない場合は処理を中断
  if ( is_admin() || ! $query->is_main_query() ) return;
  if ( $query->is_archive() && isset($_GET['post_type'])) {
      $num = $_GET['post_type'];
      $tax_query = array(
          array(
              'taxonomy' => 'article_type',
              'field' => 'slug',
              'terms' => array( $num ),
          )
      );

      $query->set( 'tax_query', $tax_query );
      //$query->set( 'category_name', 'place' );
      return;
  }
}
add_action( 'pre_get_posts', 'query_at_archive' );


////////////////////////////////// サムネイルの設定//////////////////////////////////////





add_theme_support( 'post-thumbnails' );

//デフォルトのサムネイルの大きさ
set_post_thumbnail_size( 400, 300, array('center','center'));

//正方形ででかく
add_image_size( 'square', 800, 800, true );

add_image_size( 'thumbnail4x3', 400, 300, true );

add_image_size( 'slider', 1200, 540, true );

//html のwidth やheightを削除する
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
  // width height を削除する
  $html = preg_replace('/(height)="\d*"\s/', '', $html);
  return $html;
}


///////////////////////////////投稿中の画像のwidth/height///////////////////////////

/**
 * 画像挿入時にwidthとheightを削除する
  */
function remove_width_attribute( $html ) {
  $html = preg_replace( '/(height)="\d*"\s/', "", $html );
  return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );



// 画像編集の際に勝手にwidth/heightが入るので削除
function my_tinymce_remove_width_attribute( $options ) {
  if ( $options['tinymce'] ) {
    wp_enqueue_script( 'tinymce_remove_width_attribute', get_template_directory_uri() . '/public/js/wp-admin-remove_width_attribute.js', array( 'jquery' ), '1.0.0', true);
  }
}

add_action( 'wp_enqueue_editor', 'my_tinymce_remove_width_attribute', 10, 1 );


function my_bootstrap_scripts() {
	wp_enqueue_script( 'bootstrap_scripts', get_template_directory_uri() . '/public/bootstrap/bootstrap.min.js', '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );


///////////////////////////////Home content foot widget area///////////////////////////

	register_sidebar( array(
		'name' => __( 'Home content foot', 'lightning' ),
		'id' => 'home-content-foot-widget-area',
		'before_widget' => '<section class="widget %2$s" id="%1$s">',
		'after_widget' => '</section>',
		'before_title' => '<h1 class="mainSection-title">',
		'after_title' => '</h1>',
	) );

///////////////////////////////Home content foot widget area///////////////////////////
	register_nav_menu('mainmenu', 'メインメニュー');
	register_nav_menu('footer_menu_1', 'footer_menu_1');
	register_nav_menu('footer_menu_2', 'footer_menu_2');
	register_nav_menu('footer_menu_3', 'footer_menu_3');


////////////////////////////////[gallery] shortcut customize///////////////////////////

remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'lightning_gallery_shortcode');

/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @staticvar int $instance
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 *     @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 *     @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 *     @type int          $id         Post ID.
 *     @type string|array $size       Size of the images to display. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 *     @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 *     @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 *     @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 *     @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
function lightning_gallery_shortcode( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	$atts = shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'size'       => 'full',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'gallery' );

	$id = intval( $atts['id'] );

	if ( ! empty( $atts['include'] ) ) {
		$_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( ! empty( $atts['exclude'] ) ) {
		$attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	} else {
		$attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
		}
		return $output;
	}

	$selector = "gallery{$instance}";

	$inds = "<ol class='carousel-indicators'>";
	$itms = "<div class='carousel-inner' role='listbox'>";
	$ctls = "<a class='left carousel-control' href='#$selector' role='button' data-slide='prev'><i class='icon-prev fa fa-angle-left'></i></a>
<a class='right carousel-control' href='#$selector' data-slide='next'><i class='icon-next fa fa-angle-right'></i></a>";

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
		$image = wp_get_attachment_image_src($id, $atts['size'], false);
		if (! $image) {
			continue;
		}

		$inds .= "<li data-target='#$selector' data-slide-to='$i'" . ($i == 0 ? "class='active'" : "") . "></li>\n";
		$itms .= "<div class='item" . ($i == 0 ? " active" : "") . "'><img src='$image[0]'>";
		if (trim($attachment->post_excerpt)) {
			$itms .= "<div class='carousel-caption'>" . wptexturize($attachment->post_excerpt) . "</div>";
		}
		$itms .= "</div>\n";

		$i++;
	}
	$itms .= "</div>";
	$inds .= "</ol>";

	$output = "<div id='$selector' class='gallery carousel slide carousel-fade' data-ride='carousel'>" . $inds . $itms . $ctls . "</div>\n";

	return $output;
}
