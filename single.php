<!DOCTYPE html><html><head><title>title</title><meta name="viewport" content="width=device-width, initial-scale=1">
<title>PLART STORY | LIFE IS ART！ アートがライフスタイルになるウェブマガジン</title>
<meta name="keywords" content="PLART,LIFE IS ART,プラート,ART,アート,LIFE" />
<link rel='dns-prefetch' href='//oss.maxcdn.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; フィード" href="http://www.plart-story.jp/feed/" />
<link rel="alternate" type="application/rss+xml" title="PLART STORY &raquo; コメントフィード" href="http://www.plart-story.jp/comments/feed/" />
<meta name="description" content="LIFE IS ART！ アートがライフスタイルになるウェブマガジン" /><?php wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:700", array(), time() ); ?><?php wp_enqueue_style('style', get_stylesheet_uri(), array(), time() ); ?><?php wp_head(); ?></head><body><div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=1810486322562458";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="page"><div class="page__header"><div class="page__globalNav"><div class="globalNavBox"><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="globalNavBox__plartLogo"><a href="/" class="n"><div class="globalNavBox__titleBox"><p class="globalNavBox__siteDesc">アートがライフスタイルになるウェブマガジン</p><h1 class="globalNavBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h1></div></a><?php if(is_category()){; ?><?php $cat_id=get_query_var('cat'); ?><?php $cat=get_category($cat_id); ?><?php $cat_slug = $cat->category_nicename; ?><?php $cat_name = $cat->name; ?><?php }; ?><div class="categoryBox <?= $cat ? '--'.$cat_slug : '' ?>"><table class="categoryBox__table"><tr><td rowspan="3" class="categoryBox__art">ART</td><td rowspan="3" class="categoryBox__cross">✕</td><td class="categoryBox__catName --people"><a href="/category/people">PEOPLE</a></td><td class="categoryBox__catContent">ヒト、アーティスト</td></tr><tr><td class="categoryBox__catName --place"><a href="/category/place">PLACE</a></td><td class="categoryBox__catContent"> 場、空間、</td></tr><tr><td class="categoryBox__catName --thing"><a href="/category/thing">THING</a></td><td class="categoryBox__catContent">モノ、コト</td></tr></table></div><div class="globalNav"><ul><li class="globalNav__item"><a href="">ABOUT</a></li><li class="globalNav__item"><a href="">HEY!ART</a></li><li class="globalNav__item"><a href="">PARTNERS</a></li></ul></div></div></div></div><div class="page__content"><div class="page__main"><div class="mainBoxContainer"><div class="mainBox--article"><?php while( have_posts() ) : the_post(); ?><article class="singleArticle"><div class="breadCrumb"><ul class="breadCrumb__list"><li class="breadCrumb__item"><a href="/" class="breadCrumb__link">top</a></li><li class="breadCrumb__item--arrow">> </li><li class="breadCrumb__item"> <?php $cat = get_the_category()[0]; ?><a href="/category/<?= $cat->slug?>" class="breadCrumb__link">ART ✕ <?= $cat->name ?></a></li><li class="breadCrumb__item--arrow">></li><li class="breadCrumb__item"><a href="<? the_permalink() ?>" class="breadCrumb__link"><?= mb_strimwidth(get_the_title(), 0, 20,"...") ?></a></li></ul></div><div class="singleArticle__header"><div class="singleArticle__titleBox"><h1 class="singleArticle__title"> <?php the_title(); ?></h1></div><div class="singleArticle__right"><span class="singleArticle__writer">PLART編集部 </span><span class="singleArticle__number"><?= get_the_date('Y')?>.<?= get_the_date('n')?>.15</span></div><div class="singleArticle__shareLinks"><div class="shareLinks"><h5 class="shareLinks_title">SHARE</h5><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a></div></div></div><div class="singleArticle__thumbnailBox"><div class="articleThumbnailBox"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleThumbnailBox__image"><div class="articleThumbnailBox__badge"><div class="numberBadge"><div class="numberBadge__title">TOPICS</div><div class="numberBadge__number"><div href="" class="plartStoryNumber"><p class="plartStoryNumber__title--plart">PLART</p><p class="plartStoryNumber__title--story"> STORY</p><p class="plartStoryNumber__number"><?= get_the_date('n')?>月15日号</p></div></div></div></div></div></div><div class="singleArticle__content"><?php the_content(); ?></div><hr class="noBorder bigMargin"><footer class="singleArticle__footer"><div class="shareLinks"><h5 class="shareLinks_title">SHARE</h5><br><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a><a href="#" class="shareLinks_item"><img src="https://lh3.googleusercontent.com/32GbAQWrubLZX4mVPClpLN0fRbAd3ru5BefccDAj7nKD8vz-_NzJ1ph_4WMYNefp3A=w300" class="shareIcon"></a></div><hr class="noBorder bigMargin"><div class="keywordTags"><h5 class="keywordTags__title">KEYWORD</h5><ul class="keywordTags__list"><!-- タグを表示--><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">アール・ブリュット</a></li><li class="keywordTags__item"><a href="" class="keywordTags__link">杉本 志乃</a></li></ul></div></footer></article><?php endwhile; ?><!--rewind 的なのいるっけ？--></div><div class="mainBox"><h2 class="mainBox__title">RELATED ARTICLES<span class="mainBox__subTitle">関連記事</span></h2><div class="contentsLayout--3cols"><ul class="contentsLayout__3items"><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li></ul></div></div><div class="mainBox"><h2 class="mainBox__title">WHAT'S NEW</h2><div class="contentsLayout--3cols"><ul class="contentsLayout__3items"><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li></ul></div></div><div class="mainBox"><img src="#" class="plartFactory__link"><a href="#" class="blackButton">PAGE TOP</a></div></div></div><div class="page__sidebar"><div class="sidebarBoxContainer"><div class="sidebarBox --nopadding"><a src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-1.jpg" class="sidebarBanner__image"></a></div><div class="sidebarBox --nopadding"><a src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="sidebarBanner"><img src="<?= get_stylesheet_directory_uri()?>/public/image/banner-2.png" class="sidebarBanner__image"></a></div><div class="sidebarBox"> <!--searchbar--><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">RANKING</h2><?php $args = array( 
  'post_type' => 'post',
  'posts_per_page' => 10, //5件表示
);

$the_query = new WP_Query( $args );
?><?php $sidebar_index = 1; ?><?php while($the_query->have_posts()) : $the_query->the_post(); ?><div class="articleBox--ranking"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail("square", array('class'=>'articleBox--ranking--thumbnail')); ?><?php else: ?><img src="<?= get_stylesheet_directory_uri()?>/public/image/thumb3x3.png" class="articleBox--ranking--thumbnail"><?php endif; ?><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank"> <?php echo $sidebar_index ++; ?></div><div class="articleBox--ranking--title"><?php the_title(); ?></div></div></div><?php endwhile; ?><?php $the_query->rewind_posts(); ?></div><div class="sidebarBox"><h2 class="sidebarBox__title">PRESS RELEASE</h2><div class="pressRelease__slider"><div class="slider"><p>slider</p><p>slider</p></div></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">FACEBOOK</h2><div class="fb-page" data-href="https://www.facebook.com/plartjp" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/plartjp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/plartjp">PLART（プラート）</a></blockquote></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">TWITTER
<a class="twitter-timeline" data-height="600" data-dnt="true" href="https://twitter.com/plartjp">Tweets by plartjp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></h2></div></div></div></div><div class="page__footer"><div class="footerBox"><h2 class="footerBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h2><img src="<?= get_stylesheet_directory_uri()?>/public/image/plart_logo.png" class="footerBox__icon"><p class="footerBox__menu"><a href="#">プレスリリースに関するお問い合わせ </a>| <a href="#">広告掲載＆パートナー様について </a>| <a href="#">問い合わせ </a></p><p class="footerBox__menu"><a href="#">利用規約・PRIVACY POLICY </a>| <a href="#">運営メンバー＆PHILOSOPHY </a>| <a href="#">ABOUT US 運営情報 </a></p><p class="footerBox__menu"><a href="#">PLARTからのプレスリリース </a></p><div class="snsLinks"> <p class="snsLinks--text">FOLLOW ME !</p><p class="snsLinks--icon"><a target="_blank" href="http://instagram.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/instagram-logo.svg" class="snsLinks--icon--instagram"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://twitter.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/twitter-logo-silhouette.svg" class="snsLinks--icon--twitter"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://facebook.com/plartjp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/facebook-app-logo.svg" class="snsLinks--icon--facebook"></a></p><p class="snsLinks--icon"><a target="_blank" href="http://jp.pinterest.com/plartart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/pinterest-logo.svg" class="snsLinks--icon--pinterest"></a></p></div></div></div><?php wp_footer(); ?></div></body></html>