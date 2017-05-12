<?php

// wp_pagenaviのクラス名変更
add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class_page' );
function custom_wp_pagenavi_class_page($class_name) {
	return 'pager';
}

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





