<!DOCTYPE html><html><head><title>title</title><meta name="viewport" content="width=device-width, initial-scale=1">
<title>PLART STORY | LIFE IS ART！ アートがライフスタイルになるウェブマガジン</title>
<meta name="keywords" content="PLART,LIFE IS ART,プラート,ART,アート,LIFE" />
<link rel='dns-prefetch' href='//oss.maxcdn.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; フィード" href="http://www.plart-story.jp/feed/" />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; コメントフィード" href="http://www.plart-story.jp/comments/feed/" />
<meta name="description" content="LIFE IS ART！ アートがライフスタイルになるウェブマガジン" />
<meta property="og:site_name" content="PLART STORY" />
<meta property="og:url" content="http://www.plart-story.jp/" />
<meta property="og:title" content="PLART STORY | LIFE IS ART！ アートがライフスタイルになるウェブマガジン" />
<meta property="og:description" content="LIFE IS ART！ アートがライフスタイルになるウェブマガジン" />
<meta property="fb:app_id" content="1810486322562458" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?= get_stylesheet_directory_uri()?>/public/image/PLART_ogp.png" />
<!-- [ / VK All in one Expansion Unit OGP ] -->
<!-- [ VK All in one Expansion Unit twitter card ] -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="LIFE IS ART！ アートがライフスタイルになるウェブマガジン">
<meta name="twitter:title" content="PLART STORY | LIFE IS ART！ アートがライフスタイルになるウェブマガジン">
<meta name="twitter:url" content="http://www.plart-story.jp">
<meta name="twitter:image" content="<?= get_stylesheet_directory_uri()?>/public/image/PLART_ogp.png">
<meta name="twitter:domain" content="www.plart-story.jp">
<meta name="twitter:site" content="@plartjp"><?php wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Montserrat", array(), time() ); ?><?php wp_enqueue_style('style', get_stylesheet_uri(), array(), time() ); ?><?php wp_enqueue_script('jquery'); ?><?php wp_head(); ?></head><body><div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=1810486322562458";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-87349986-1', 'www.plart-story.jp');ga('send', 'pageview');</script><div class="page"><div class="page__header"><div class="page__globalNav"><div class="globalNavBox"><div class="globalNavBox__spButton"><button id="spMenuButton" class="spMenuButton"><img src="<?= get_stylesheet_directory_uri()?>/public/image/menuicon.png"></button></div><a href="/"><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="globalNavBox__plartLogo"></a><a href="/" class="n"><div class="globalNavBox__titleBox"><p class="globalNavBox__siteDesc"></p><h1 class="globalNavBox__siteTitle"><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo2.png" alt="アートがライフスタイルになるウェブマガジン PLART"></h1></div></a><?php if(is_category()){; ?><?php $cat_id=get_query_var('cat'); ?><?php $cat=get_category($cat_id); ?><?php $cat_slug = $cat->category_nicename; ?><?php $cat_name = $cat->name; ?><?php }; ?><div class="categoryBox <?= $cat ? '--'.$cat_slug : '' ?>"><table class="categoryBox__table"><tr><td rowspan="3" class="categoryBox__art">ART</td><td rowspan="3" class="categoryBox__cross">✕</td><td class="categoryBox__catName --people"><a href="/category/people">PEOPLE</a></td><td class="categoryBox__catContent">ヒト、アーティスト</td></tr><tr><td class="categoryBox__catName --place"><a href="/category/place">PLACE</a></td><td class="categoryBox__catContent"> 場、空間</td></tr><tr><td class="categoryBox__catName --thing"><a href="/category/thing">THING</a></td><td class="categoryBox__catContent">モノ、コト</td></tr></table></div><div class="globalNav"><nav><?php wp_nav_menu( array(
  'theme_location'=>'mainmenu', 
  'container'     =>'', 
  'menu_class'    =>'',
  'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));?></nav></div></div></div></div><div class="page__content"><div class="page__main"><div class="mainBoxContainer"><div class="mainBox--article"><div class="breadCrumb"><ul class="breadCrumb__list"><li class="breadCrumb__item"> <a href="/" class="breadCrumb__link">TOP</a></li><li class="breadCrumb__item--arrow">> </li><li class="breadCrumb__item"> <a href="./" class="breadCrumb__link">記事一覧 </a></li></ul></div><hr class="noBorder"><div class="contentsLayout--3cols"><ul class="contentsLayout__3items"><?php $post_index = 0; ?><?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?><?php $top_columns = wp_is_mobile() ? 2 :3; ?><?php while ( have_posts() ) : the_post(); ?><?php $post_index ++; ?><li class="contentsLayout__item"><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox --<?= $post_index <= $top_columns ? 'smalltop' : '' ?>"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number <?= $is_cover ?'--unvisible':''?>"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"> <?php if(wp_is_mobile()): ?><?php echo mb_strimwidth(get_the_title(), 0, 50, "..."); ?><?php else: ?><?php the_title(); ?><?php endif; ?></div></div></a></li><?php endwhile; ?></ul></div><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }; ?></div></div></div><div class="page__sidebar"><div class="sidebarBoxContainer"><div class="sidebarBox --nopadding"><a href="/article_type/heyart/" class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-1.jpg" class="sidebarBanner__image"></a></div><div class="sidebarBox --nopadding"><a class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-2.jpg" class="sidebarBanner__image"></a></div><?php if(!wp_is_mobile()): ?><div class="sidebarBox"> <!--searchbar--><?php get_search_form(); ?><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div><?php endif; ?><div class="sidebarBox"><h2 class="sidebarBox__title">RANKING</h2><?php if (function_exists('sga_ranking_get_date')): ?><?php $ranking_data = sga_ranking_get_date(); ?><?php if ( !empty( $ranking_data ) ): ?><?php $sidebar_index = 1; ?><?php foreach ( $ranking_data as $post_id ): ?><a href="<?= the_permalink($post_id) ?>"><div class="articleBox--ranking"><?php if(has_post_thumbnail($post_id)): ?><?php echo get_the_post_thumbnail($post_id, "square", array('class'=>'articleBox--ranking--thumbnail')); ?><?php else: ?><img src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="articleBox--ranking--thumbnail"><?php endif; ?><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank"> <?php echo $sidebar_index ++; ?></div><div class="articleBox--ranking--title"><?php echo get_the_title($post_id); ?></div></div></div></a><?php endforeach; ?><?php endif; ?><?php endif; ?></div><div class="sidebarBox"><h2 class="sidebarBox__title">PRESS RELEASE</h2><div class="pressReleaseBox"><?php $args = array(
  'post_type' => 'post',
  'tax_query' => array(
    array(
      'taxonomy' => 'article_type',
      'field' => 'slug',
      'terms' => 'press-release',
    ),
  ),
);
?><?php $the_query = new WP_Query( $args ); ?><?php while($the_query->have_posts()): $the_query->the_post(); ?><a href="<?=the_permalink()?>" class="pressReleaseBox__item"><div class="pressReleaseBox__title"><?php echo get_the_date("Y.n.d"); ?></div><div class="pressReleaseBox__content"><?php the_title(); ?></div></a><?php endwhile; ?><?php wp_reset_postdata(); ?></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">FACEBOOK</h2><div class="fb-page" data-href="https://www.facebook.com/plartjp" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/plartjp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/plartjp">PLART（プラート）</a></blockquote></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">TWITTER
<a class="twitter-timeline" data-height="600" data-dnt="true" href="https://twitter.com/plartjp">Tweets by plartjp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></h2></div></div></div></div><div class="page__footer"><div class="footerBox"><h2 class="footerBox__siteTitle"><span class="siteTitle"> <img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo3.png" alt="アートがライフスタイルになるウェブマガジン PLART"></span></h2><a href="/"><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="footerBox__icon"></a><nav><?php wp_nav_menu( array(
  'theme_location'=>'footer_menu_1', 
  'container'     =>'', 
  'menu_class'    =>'footerBox__menu'));
  
wp_nav_menu( array(
  'theme_location'=>'footer_menu_2', 
  'container'     =>'', 
  'menu_class'    =>'footerBox__menu'));

wp_nav_menu( array(
  'theme_location'=>'footer_menu_3', 
  'container'     =>'', 
  'menu_class'    =>'footerBox__menu'));
?></nav><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div></div><div id="spMenuBg" class="spMenuBg"></div><div id="spMenu" class="spMenu"><div id="spMenu__close">×</div><div class="spMenu__art">ART</div><div class="spMenu__cross">✕</div><div class="spMenu__categoryList"><div class="spMenu__categoryItem"><h2 class="n spMenu__categoryTitle"> <a href="/category/people" class="spMenu__categoryLink">PEOPLE</a></h2><div class="spMenu__categoryDesc">ヒト、アーティスト</div></div><div class="spMenu__categoryItem"><h2 class="n spMenu__categoryTitle"> <a href="/category/place" class="spMenu__categoryLink">PLACE</a></h2><div class="spMenu__categoryDesc">場、空間、</div></div><div class="spMenu__categoryItem"><h2 class="n spMenu__categoryTitle"> <a href="/category/thing" class="spMenu__categoryLink">THING</a></h2><div class="spMenu__categoryDesc">モノ、コト</div></div></div><div class="spMenu__nav"><div class="globalNav--sp"><nav><?php wp_nav_menu( array(
  'theme_location'=>'mainmenu', 
  'container'     =>'', 
  'menu_class'    =>'',
  'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
?></nav></div></div><footer class="spMenu__footer"><?php get_search_form(); ?><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="globalNavBox__plartLogo"></footer></div></div><?php wp_footer(); ?><script>jQuery(function(){
  var $spMenu = jQuery("#spMenu");
  var $spMenuButton= jQuery("#spMenuButton");
  var $spMenuBg = jQuery("#spMenuBg");
  var $spMenuClose = jQuery("#spMenu__close");

  $spMenuButton.click(function(){
    $spMenu.fadeIn();
    $spMenuBg.fadeIn(); 
    $spMenuClose.fadeIn();      
  });
  $spMenuBg.click(function(){
    $spMenu.fadeOut();
    $spMenuBg.fadeOut(); 
    $spMenuClose.fadeOut();         
  });
  $spMenuClose.click(function(){
    $spMenu.fadeOut();
    $spMenuBg.fadeOut(); 
    $spMenuClose.fadeOut();       
  });

});</script></body></html>