<?php


////////////////////////////////// wp_pagenaviのクラス名変更//////////////////////////////////////

add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class_page' );
function custom_wp_pagenavi_class_page($class_name) {
	return 'pager';
}

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
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  return $html;
}


