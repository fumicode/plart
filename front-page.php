<!DOCTYPE html><html><head><title>title</title><meta name="viewport" content="width=device-width, initial-scale=1">
<title>PLART STORY | LIFE IS ART！ アートがライフスタイルになるウェブマガジン</title>
<meta name="keywords" content="PLART,LIFE IS ART,プラート,ART,アート,LIFE" />
<link rel='dns-prefetch' href='//oss.maxcdn.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; フィード" href="http://www.plart-story.jp/feed/" />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; コメントフィード" href="http://www.plart-story.jp/comments/feed/" />
<meta name="description" content="LIFE IS ART！ アートがライフスタイルになるウェブマガジン" /><?php wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:700", array(), time() ); ?><?php wp_enqueue_style('style', get_stylesheet_uri(), array(), time() ); ?><?php wp_enqueue_script('jquery'); ?><?php wp_head(); ?><link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/></head><body><div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=1810486322562458";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="page"><div class="page__header"><div class="page__globalNav"><div class="globalNavBox"><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="globalNavBox__plartLogo"><a href="/" class="n"><div class="globalNavBox__titleBox"><p class="globalNavBox__siteDesc">アートがライフスタイルになるウェブマガジン</p><h1 class="globalNavBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h1></div></a><?php if(is_category()){; ?><?php $cat_id=get_query_var('cat'); ?><?php $cat=get_category($cat_id); ?><?php $cat_slug = $cat->category_nicename; ?><?php $cat_name = $cat->name; ?><?php }; ?><div class="categoryBox <?= $cat ? '--'.$cat_slug : '' ?>"><table class="categoryBox__table"><tr><td rowspan="3" class="categoryBox__art">ART</td><td rowspan="3" class="categoryBox__cross">✕</td><td class="categoryBox__catName --people"><a href="/category/people">PEOPLE</a></td><td class="categoryBox__catContent">ヒト、アーティスト</td></tr><tr><td class="categoryBox__catName --place"><a href="/category/place">PLACE</a></td><td class="categoryBox__catContent"> 場、空間、</td></tr><tr><td class="categoryBox__catName --thing"><a href="/category/thing">THING</a></td><td class="categoryBox__catContent">モノ、コト</td></tr></table></div><div class="globalNav"><ul><li class="globalNav__item"><a href="/about">ABOUT</a></li><li class="globalNav__item"><a href="/heyart">HEY!ART</a></li><li class="globalNav__item"><a href="/partners">PARTNERS</a></li></ul></div></div></div><div class="page__topSlider"><div class="topSliderBox"><!--まずは、どのタームなのかを調べる--><!--固定ページをとってきて、それのカスタムフィールドをみる。--><?php $topic_setting_page = wc_get_page_by_slug("topic_setting");
$page_id = $topic_setting_page->ID;

//これが、カテゴリの名前
$term_name = get_post_meta($page_id, "topic_setting",true);

$args = array(
  'post_type' => 'post',
  'order' => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'article_type',
      'field' => 'slug',
      'terms' => $term_name,
    ),
  ),

);

$the_query = new WP_Query( $args );


//そのカテゴリに属してるやつを全部表示する
?><?php if($the_query->have_posts()):  ?><div id="topSlider" data-slick="{"slidesToShow":6, "slidesToScroll": 6}" class="topSlider"><?php while($the_query->have_posts()): $the_query->the_post(); ?><div class="topSlider__slide"><a href="<?php the_permalink()?>" class="n topSlider__link"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail("slider", array('class'=>'topSlider__image')); ?><?php else: ?><img src="<?= get_stylesheet_directory_uri();?>/public/image/thumb4x3.png" width="1200" height="540" class="topSlider__image"><?php endif; ?></a></div><?php endwhile; ?><!--これは下に書いてあるので大丈夫-->


</div><div class="topSliderBox__number"><a href="" class="plartStoryNumber"><p class="plartStoryNumber__title--plart"> <span>P</span><span style="font-size:1px"> </span><span>L</span><span style="font-size:1px"> </span><span>A</span><span style="font-size:1px"> </span><span>R</span><span style="font-size:1px"> </span><span>T</span></p><p class="plartStoryNumber__title--story"> <span>S</span><span style="font-size:1px"> </span><span>T</span><span style="font-size:1px"> </span><span>O</span><span style="font-size:1px"> </span><span>R</span><span style="font-size:1px"> </span><span>Y</span></p><p class="plartStoryNumber__number"><?= get_the_date('n') ?>月15日号</p></a></div><div class="topSliderBox__featureBox"><div class="featureBox"><div class="featureBox__number"><?= get_the_date('n') ?>月15日号 特集</div><br><div class="featureBox__title"> <?php $term = get_term_by('slug', $term_name, 'article_type');
echo $term->name;
//echo $child_term->name

?></div></div></div><div class="topSliderBox__seriesBox"><div class="seriesBox">SERIES <span class="seriesBox__siteTitles"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span>連載</span></div></div><!--スライダーのをここでちょっと遅れてリセットする。--><!--何月ごうとか、カテゴリー名を表示するためにまだポストを使うから。--><?php wp_reset_postdata(); ?><?php else: ?><hr class="bigMargin"><p><?=$term_name?> の特集は存在しません。以下のことを確認してください</p><ul><li>特集カテゴリ名が、特集の子カテゴリとして存在していること </li><li>設定の特集スラッグと実際の特集スラッグが一致していること</li><li>その特集の記事が存在していること</li></ul><?php endif; ?></div></div></div><div class="page__content"><div class="page__main"><div class="mainBoxContainer"><div class="mainBox"><h2 class="mainBox__title">WHAT'S NEW </h2><div class="contentsLayout--1big2small"><div class="contentsLayout--1big2small--big"><div id="sliderBox" class="sliderBox"><?php $args = array( 
  'post_type' => 'post',
  'posts_per_page' => 5, //5件表示
);

$the_query = new WP_Query( $args )
?><?php while($the_query->have_posts()) : $the_query->the_post(); ?><div class="sliderBox__slide"><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox --big"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(true):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(true):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?> --big "> <div class="coverBadge --big"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a></div><?php endwhile; ?><?php $the_query->rewind_posts(); ?></div></div><div class="contentsLayout--1big2small--small"><?php if($the_query->have_posts()) : $the_query->the_post(); ?><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox --smalltop"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a><?php endif; ?><?php if($the_query->have_posts()) : $the_query->the_post(); ?><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a><?php endif; ?></div></div><div class="contentsLayout--3cols"><ul class="contentsLayout__3items"><?php for($i = 0; $i < 3; $i++): ?><?php if($the_query->have_posts()) : $the_query->the_post(); ?><li class="contentsLayout__item"><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a></li><?php endif; ?><?php endfor; ?></ul></div><?php wp_reset_postdata(); ?><a href="/articles" class="blackButton">VIEW MORE </a></div><div class="mainBox"><h2 class="mainBox__title">BACK NUMBER</h2><?php $args = array( 
  'post_type' => 'post',
  'category_name' => 'cover',
  'posts_per_page' => 3, 
  'offset' => 1
);
$the_query = new WP_Query( $args );
?><div class="contentsLayout--1big2small"><?php if($the_query->have_posts()) : $the_query->the_post(); ?><div class="contentsLayout--1big2small--big"><div class="sliderBox"><div class="sliderBox__slide"><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox --big"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(true):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(true):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?> --big "> <div class="coverBadge --big"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a></div></div></div><?php endif; ?><div class="contentsLayout--1big2small--small"><?php if($the_query->have_posts()) : $the_query->the_post(); ?><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox --smalltop"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a><?php endif; ?><?php if($the_query->have_posts()) : $the_query->the_post(); ?><?php $category = get_the_category()[0]; ?><?php $is_cover = strcmp($category->slug,"cover") == 0; ?><a href="<?php the_permalink()?>" class="n"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category <?= $is_cover ?'--unvisible':''?>"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre"><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><div class="articleBox__thumbnailBox"> <?php if(has_post_thumbnail()): ?><?php if(false):  ?><?php the_post_thumbnail("square", array('class'=>'articleBox__thumbnail')); ?><?php else: ?><?php the_post_thumbnail("thumbnail4x3", array('class'=>'articleBox__thumbnail')); ?><?php endif; ?><?php else: ?><?php if(false):  ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb3x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="articleBox__thumbnail articleBox__thumbnail"><?php endif; ?><?php endif; ?><div class="articleBox__coverBadge <?= $is_cover ? '--visible':'' ?>  "> <div class="coverBadge"><div class="coverBadge__text"><?= get_the_date('n')?>月15日号</div></div></div></div><div class="articleBox__title"><?= the_title() ?></div></div></a><?php endif; ?></div></div><a href="/category/cover" class="blackButton">VIEW MORE </a></div><div class="mainBox"><a href="/article_type/artinlife" class="n"><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/PLART_banner_1200_540_170513.jpg"></a><a href="/article_type/bussinessandart" class="n"><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/PLART_banner_1200_540_170513.jpg"></a></div><div class="mainBox"><h2 class="mainBox__title">PICK UP ART BOOK</h2><div id="bookSlider" class="bookSlider"><?php $args = array( 
  'post_type' => 'book'

);

$the_query = new WP_Query( $args );
?><?php while($the_query->have_posts()): $the_query->the_post(); ?><a class="n bookSlider__link"><div class="bookSlider__item"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail("square", array('class'=>'bookSlider__image')); ?><?php else: ?><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/thumb4x3.png" class="bookSlider__image"><?php endif; ?></div></a><?php endwhile; ?><?php wp_reset_postdata(); ?></div></div><div class="mainBox"><h2 class="mainBox__title">INSTAGRAM</h2><?php if ( is_active_sidebar( 'home-content-foot-widget-area' ) ) : ?><?php dynamic_sidebar( 'home-content-foot-widget-area' ); ?><?php endif; ?></div><div class="mainBox"><h2 class="mainBox__title">PARTNERS</h2><div class="partnersBox"><!--.partners--1--><img src="<?= get_stylesheet_directory_uri(); ?>/public/image/partner.jpg"></div></div></div></div><div class="page__sidebar"><div class="sidebarBoxContainer"><div class="sidebarBox --nopadding"><a src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-1.jpg" class="sidebarBanner__image"></a></div><div class="sidebarBox --nopadding"><a src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-2.png" class="sidebarBanner__image"></a></div><div class="sidebarBox"> <!--searchbar--><?php get_search_form(); ?><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">RANKING</h2><?php if (function_exists('sga_ranking_get_date')) {
  $ranking_data = sga_ranking_get_date();
  if ( !empty( $ranking_data ) ) {
      echo '<ol>';
      foreach ( $ranking_data as $post_id ) {
          echo '<li><a href="' . esc_attr(get_permalink($post_id)) . '">' . esc_html(get_the_title($post_id)) . '</a></li>';
      }
      echo '</ol>';
  }
}
$args = array( 
  'post_type' => 'post',
  'posts_per_page' => 10, //5件表示
);
$the_query = new WP_Query( $args );?><?php $sidebar_index = 1; ?><?php while($the_query->have_posts()) : $the_query->the_post(); ?><div class="articleBox--ranking"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail("square", array('class'=>'articleBox--ranking--thumbnail')); ?><?php else: ?><img src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="articleBox--ranking--thumbnail"><?php endif; ?><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank"> <?php echo $sidebar_index ++; ?></div><div class="articleBox--ranking--title"><?php the_title(); ?></div></div></div><?php endwhile; ?><?php $the_query->rewind_posts(); ?></div><div class="sidebarBox"><h2 class="sidebarBox__title">PRESS RELEASE</h2><div class="pressRelease__slider"><div class="slider"><p>slider</p><p>slider</p></div></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">FACEBOOK</h2><div class="fb-page" data-href="https://www.facebook.com/plartjp" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/plartjp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/plartjp">PLART（プラート）</a></blockquote></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">TWITTER
<a class="twitter-timeline" data-height="600" data-dnt="true" href="https://twitter.com/plartjp">Tweets by plartjp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></h2></div></div></div></div><div class="page__footer"><div class="footerBox"><h2 class="footerBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h2><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="footerBox__icon"><p class="footerBox__menu"><a href="#">プレスリリースに関するお問い合わせ </a>| <a href="#">広告掲載＆パートナー様について </a>| <a href="#">問い合わせ </a></p><p class="footerBox__menu"><a href="#">利用規約・PRIVACY POLICY </a>| <a href="#">運営メンバー＆PHILOSOPHY </a>| <a href="#">ABOUT US 運営情報 </a></p><p class="footerBox__menu"><a href="#">PLARTからのプレスリリース </a></p><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div></div><?php wp_footer(); ?></div><!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" //crossorigin="anonymous"></script>--><script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script><script>//特集スライダー
jQuery("#topSlider").slick({
  autoplay:true,
  autoplaySpeed:4000 //4秒

});

//what's new のスライダー 
jQuery("#sliderBox").slick({
  autoplay:true,
  autoplaySpeed:4000 //4秒
});

//what's new のスライダー 
jQuery("#bookSlider").slick({
  autoplay:true,
  autoplaySpeed:4000, //4秒
  slidesToShow:4,
  slidesToScroll:1,
});
</script></body></html>