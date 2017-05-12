<!DOCTYPE html><html><head><title><?php echo htmlspecialchars(title, ENT_QUOTES, 'UTF-8'); ?></title><?php wp_enqueue_style('style', get_stylesheet_uri(), array(), time() ); ?><?php wp_head(); ?></head><body><div class="page"><div class="page__header"><div class="page__globalNav"><div class="globalNavBox"><img src="/images/plart_logo.png" class="globalNavBox__plartLogo"><header class="globalNavBox__titleBox"><p class="globalNavBox__siteDesc">アートがライフスタイルになるウェブマガジン</p><h1 class="globalNavBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h1></header><div class="categoryBox"><table class="categoryBox__table"><tr><td rowspan="3" class="categoryBox__art">ART</td><td rowspan="3" class="categoryBox__cross">✕</td><td class="categoryBox__catName"><a href="/category/people">PEOPLE</a></td><td class="categoryBox__catContent">人、アーティスト</td></tr><tr><td class="categoryBox__catName"><a href="/category/place">PLACE</a></td><td class="categoryBox__catContent"> 場、空間、</td></tr><tr><td class="categoryBox__catName"><a href="/category/thing">THING</a></td><td class="categoryBox__catContent">モノ、コト</td></tr></table></div><div class="globalNav"><ul><li class="globalNav__item"><a href="">ABOUT</a></li><li class="globalNav__item"><a href="">HEY!ART</a></li><li class="globalNav__item"><a href="">PARTNERS</a></li></ul></div></div></div><div class="page__topSlider"><div class="topSliderBox"><div class="topSlider"><p>slide</p><p>slide</p><p>slide</p><p>slide</p></div><div class="topSliderBox__number"><a href="" class="plartStoryNumber"><p class="plartStoryNumber__title--plart">PLART</p><p class="plartStoryNumber__title--story"> STORY</p><p class="plartStoryNumber__number">3月15日号</p></a></div><div class="topSliderBox__featureBox"><div class="featureBox"><div class="featureBox__number">3月15日号 特集</div><br><div class="featureBox__title">女性の感性</div></div></div><div class="topSliderBox__seriesBox"><div class="seriesBox">SERIES <span class="seriesBox__siteTitles"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span>連載</span></div></div></div></div></div><div class="page__content"><div class="page__main"><div class="mainBoxContainer"><div class="mainBox"><?php $args = array( 'post_type' => 'post' ); ?><?php $the_query = new WP_Query( $args ); ?><?php while (  ) :       -   the_title(); ?><?php endwhile; ?><?php wp_reset_postdata(); ?><h2 class="mainBox__title">WHAT'S NEW oraora</h2><div class="contentsLayout--1big2small"><?php if($the_query->have_posts()) : $the_query->the_post(); ?><div class="contentsLayout--1big2small--big"><div class="sliderBox"><div class="sliderBox__slide"><div class="articleBox--big"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--genre">✕ <?php $category = get_the_category()[0]; ?><?=$category->cat_name?> </div></div><div class="articleBox__number"><?= get_the_date('n')?>月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail--big"><div class="articleBox__title"><?= $the_query->the_title() ?></div></div></div></div></div><?php endif; ?><div class="contentsLayout--1big2small--small"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。長いタイトルだとどうなるのかチェックしています。</div></div><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div></div><div class="contentsLayout--3cols"><ul class="contentsLayout__3items"><?php  ; ?><li class="contentsLayout__item"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li><li class="contentsLayout__item"><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></li></ul></div><?php wp_reset_postdata(); ?><a href="#" class="blackButton">VIEW MORE </a></div><div class="mainBox"><h2 class="mainBox__title">BACK NUMBRE</h2><div class="contentsLayout--1big2small"><div class="contentsLayout--1big2small--big"><div class="sliderBox"><div class="sliderBox__slide"><div class="articleBox--big"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail--big"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div></div></div><div class="contentsLayout--1big2small--small"><div class="articleBox--smalltop"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div><div class="articleBox"><header class="articleBox__header"><div class="articleBox__category"><div class="articleBox__category--ART">ART</div><div class="articleBox__category--cross">✕</div><div class="articleBox__category--genre">PEOPLE</div></div><div class="articleBox__number">3月15日号</div></header><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox__thumbnail"><div class="articleBox__title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div></div><a href="#" class="moreViewButton">MORE VIEW</a></div><div class="mainBox"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="banner--1"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="banner--1"></div><div class="mainBox"><h2 class="mainBox__title">PICK UP</h2><div class="sliderBox"><div class="slide"><div class="slider--pickup"></div></div></div></div><div class="mainBox"><h2 class="mainBox__title">INSTAGRAM</h2><div class="instagramBox"></div></div><div class="mainBox"><h2 class="mainBox__title">PARTNERS</h2><div class="partnersBox"><div class="partners--1"><img src="http://kingofwallpapers.com/demo/demo-002.jpg"></div><div class="partners--1"><img src="http://kingofwallpapers.com/demo/demo-002.jpg"></div><div class="partners--1"><img src="http://kingofwallpapers.com/demo/demo-002.jpg"></div><div class="partners--1"><img src="http://kingofwallpapers.com/demo/demo-002.jpg"></div></div></div></div></div><div class="page__sidebar"><div class="sidebarBoxContainer"><div class="sidebarBox"></div><div class="sidebarBox"></div><div class="sidebarBox">searchbar</div><div class="sidebarBox"><h2 class="sidebarBox__title">RANKING</h2><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">1</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">2</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">3</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">4</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">5</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">6</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">7</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">8</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">9</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div><div class="articleBox--ranking"><img src="http://kingofwallpapers.com/demo/demo-002.jpg" class="articleBox--ranking--thumbnail"><div class="articleBox--ranking--right"><div class="articleBox--ranking--rank">10</div><div class="articleBox--ranking--title">長いタイトルだとどうなるのかチェックしています。最大で3行になるように色々調整する必要がある。</div></div></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">PRESS RELEASE</h2><div class="pressRelease__slider"><div class="slider"><p>slider</p><p>slider</p></div></div></div><div class="sidebarBox"><h2 class="sidebarBox__title">FACEBOOK</h2><p>facebook</p></div><div class="sidebarBox"><h2 class="sidebarBox__title">TWITTER</h2><p>twitter</p></div></div></div></div><div class="page__footer"><div class="footerBox"><h2 class="footerBox__siteTitle"><span class="siteTitle"> <span class="siteTitle__plart">PLART</span><span class="siteTitle__story">STORY</span></span></h2><img src="#" class="footerBox__icon"><p class="footerBox__menu"><a href="#">プレスリリースに関するお問い合わせ </a>| <a href="#">広告掲載＆パートナー様について </a>| <a href="#">問い合わせ </a></p><p class="footerBox__menu"><a href="#">利用規約・PRIVACY POLICY </a>| <a href="#">運営メンバー＆PHILOSOPHY </a>| <a href="#">ABOUT US 運営情報 </a></p><p class="footerBox__menu"><a href="#">PLARTからのプレスリリース </a></p></div></div><?php wp_footer(); ?></div></body></html>