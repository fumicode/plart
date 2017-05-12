<?php

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






