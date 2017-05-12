<?php

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




