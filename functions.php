<?php

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


