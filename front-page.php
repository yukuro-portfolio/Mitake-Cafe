 <!-- =================================================== 
  index.php
  トップページ
================================================== -->
 <!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
 <?php get_template_part('/parts/head'); ?>

 <div class="container">

   <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
   <?php get_header(); ?>

   <div class="container__wrapper">

     <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
     <div class="top-mv">

       <!-- ##### カスタムヘッダーの読み込む ##### -->
       <?php the_custom_header_markup(); ?>

       <section class="heading">
         <h1 class="heading__logo" data-aos="fade-in">
           <img class="heading__logo-img" src="<?php echo get_theme_file_uri('/assets/images/icon/ico_cafemitake-logo_white.svg'); ?>" alt="Cafe Mitake">
         </h1>
         <p class="heading__catch">
           <span class="heading__top eachTextAnime">御岳の自然美で、</span>
           <span class="heading__bottom eachTextAnime">心地よいカフェ空間を</span>
         </p>
       </section>
     </div>
     <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

     <!-- ------------------------------------------------------------------------------- -->

     <!-- ⬇︎ ######################## 季節限定メニュー Start ######################## ⬇︎ -->
     <section class="season-menu">
       <div class="season-menu__inner">
         <h2 class="title-label">
           季節のスイーツメニュー - 秋
         </h2>

         <div class="season-menu__list">
           <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
           <?php echo do_shortcode('[fdm-menu id=2190]'); ?>
         </div>

         <div class="text-link">
           <a class="text-link__link-text" href="<?php echo home_url(); ?>/menu/?active-tab=is-sweets#autumn">Autumn-Sweets Menu</a>
         </div>
       </div>
     </section>
     <!-- ⬆︎ ######################## Aboutコンテンツ End ######################## ⬆︎ -->

     <!-- ------------------------------------------------------------------------------- -->

     <main class="main">
       <!-- ⬇︎ ######################## Aboutコンテンツ Start ######################## ⬇︎ -->
       <section id="about" class="top-contents">
         <div class="top-visual top-visual--about" data-aos="fade-in">
           <!-- ===== セクション見出し共通パーツ Start ===== -->
           <h2 class="visual-heading">
             <span class="visual-heading__border"></span>
             <div class="visual-heading__inner">
               <span class="visual-heading__main">About</span>
               <span class="visual-heading__sub">当店について</span>
             </div>
           </h2>
           <!-- ===== セクション見出し共通パーツ End ===== -->
         </div>

         <div class="top-info" data-aos="fade-in">
           <div class="top-info__inner">
             <div class="top-info__col">
               <div class="about__capture">
                 <img class="about__img" src="<?php echo get_theme_file_uri('/assets//images/img/img_about-descimg.png'); ?>" alt="御岳の四季と調和した至福のカフェ">
               </div>

               <div class="desc fade-in">
                 <p class="desc__text desc__text--large">御岳の四季と調和した至福のカフェ</p>
                 <p class="desc__text">多摩川が生み出した景勝地「御岳渓谷」にあるカフェ</p>
                 <p class="desc__text">
                   季節限定のスイーツ<br>
                   地元の食材を使ったこだわりの料理<br>
                   コロンビア産の豆を焙煎したコーヒー
                 </p>
                 <p class="desc__text">テラス席で四季を感じながら至福のひとときをお過ごしください。</p>
               </div>
             </div>
           </div>
         </div>
       </section>
       <!-- ⬆︎ ######################## Aboutコンテンツ End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## Menuコンテンツ Start ######################## ⬇︎ -->
       <section class="top-contents">
         <div class="top-visual top-visual--menu" data-aos="fade-in">
           <!-- ===== セクション見出し共通パーツ Start ===== -->
           <h2 class="visual-heading visual-heading--center">
             <span class="visual-heading__border"></span>
             <div class="visual-heading__inner">
               <span class="visual-heading__main">Menu</span>
               <span class="visual-heading__sub">メニュー</span>
             </div>
           </h2>
           <!-- ===== セクション見出し共通パーツ End ===== -->
         </div>

         <div class="top-info">
           <div class="top-info__inner">
             <div class="top-menu">
               <!-- ===== Sweetsコンテンツ Start ===== -->
               <div class="top-menu__box">

                 <section class="top-menu__col">
                   <h3 class="contents-title">
                     <span class="contents-title__main">Sweets</span>
                     <span class="contents-title__sub">スイーツ</span>
                   </h3>

                   <figure class="top-menu__figure" data-aos="fade-left">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets//images/img/img_menu-sweets_01.jpg'); ?>" alt="メニュー スイーツ">
                   </figure>
                 </section>

                 <div class="top-menu__col top-menu__col--overlap">
                   <figure class="top-menu__figure top-menu__figure--overlap" data-aos="fade-right">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets//images/img/img_menu-sweets_02.jpg'); ?>" alt="メニューのりんごパイ">
                   </figure>
                   <div class="desc fade-in js-fade-in-left">
                     <p class="desc__text">
                       四季折々の限定スイーツでおもてなしいたします。<br>
                       季節に合わせたフルーツを使ったケーキや和菓子などをご堪能ください。
                     </p>
                     <div class="text-link">
                       <a class="text-link__link-text" href="<?php echo home_url(); ?>/menu/?active-tab=is-sweets#menu">Sweets Menu</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- ===== Sweetsコンテンツ End ===== -->

               <!-- ===== Dishコンテンツ Start ===== -->
               <div class="top-menu__box">

                 <section class="top-menu__col">
                   <h3 class="contents-title">
                     <span class="contents-title__main">Dish</span>
                     <span class="contents-title__sub">お料理</span>
                   </h3>

                   <figure class="top-menu__figure" data-aos="fade-left">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_menu-dish_01.jpg'); ?>" alt="メニュー 料理">
                   </figure>
                 </section>

                 <div class="top-menu__col">
                   <figure class="top-menu__figure top-menu__figure--overlap" data-aos="fade-right">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_menu-dish_01.jpg'); ?>" alt="メニューの洋風ハンバーグ">
                   </figure>

                   <div class="desc fade-in js-fade-in-left">
                     <p class="desc__text">
                       シェフ歴10年の料理人がつくる地元の新鮮な食材を使用した、こだわりの料理を提供します。
                     </p>
                     <div class="text-link">
                       <a class="text-link__link-text" href="<?php echo home_url(); ?>/menu/?active-tab=is-dish#menu">Dish Menu</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- ===== Dishコンテンツ End ===== -->

               <!-- ===== Drinkコンテンツ Start ===== -->
               <div class="top-menu__box">

                 <section class="top-menu__col">
                   <h3 class="contents-title">
                     <span class="contents-title__main">Drink</span>
                     <span class="contents-title__sub">お飲み物</span>
                   </h3>

                   <figure class="top-menu__figure" data-aos="fade-left">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_menu-drink_01.jpg'); ?>" alt="メニュー 飲み物">
                   </figure>

                 </section>

                 <div class="top-menu__col">
                   <figure class="top-menu__figure top-menu__figure--overlap" data-aos="fade-right">
                     <img class="top-menu__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_menu-drink_02.jpg'); ?>" alt="メニューのブレンドコーヒー">
                   </figure>
                   <div class="desc">
                     <p class="desc__text">
                       当店のコーヒーはコロンビア産の豆を挽いております。<br>
                       フルーティーで酸味があり、甘い香りが特徴のコーヒーでゆっくりとおくつろぎください。
                     </p>
                     <div class="text-link">
                       <a class="text-link__link-text" href="<?php echo home_url(); ?>/menu/?active-tab=is-drink#menu">Drink Menu</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- ===== Drinkコンテンツ End ===== -->

               <!-- ⬇︎ //////// ボタン End //////// ⬇︎ -->
               <div class="primary-btn" data-aos="fade">
                 <a class="primary-btn__link" href="/menu.html">
                   Menu more
                 </a>
               </div>
               <!-- ⬆︎ //////// ボタン End //////// ⬆︎ -->
             </div>
           </div>
         </div>
       </section>
       <!-- ⬆︎ ######################## Menuコンテンツ End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## Mitakeコンテンツ Start ######################## ⬇︎ -->
       <section class="top-contents">
         <div class="top-visual top-visual--mitake" data-aos="fade-in">
           <!-- ===== セクション見出し共通パーツ Start ===== -->
           <h2 class="visual-heading">
             <span class="visual-heading__border"></span>
             <div class="visual-heading__inner">
               <span class="visual-heading__main">Mitake</span>
               <span class="visual-heading__sub">御岳</span>
             </div>
           </h2>
           <!-- ===== セクション見出し共通パーツ End ===== -->
         </div>

         <div class="top-info">
           <div class="top-info__inner">
             <div class="mitake">
               <!-- ===== 御岳渓谷 Start ===== -->
               <section class="mitake__box">
                 <h3 class="contents-title">
                   <span class="contents-title__main">Mitake Valley</span>
                   <span class="contents-title__sub">御岳渓谷</span>
                 </h3>

                 <div class="mitake__wrapper">
                   <figure class="mitake__figure" data-aos="fade-right">
                     <img class="mitake__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_mitake-keikoku.jpg'); ?>" alt="御岳渓谷">
                   </figure>
                   <div class="desc fade-in js-fade-in-left">
                     <p class="desc__text">
                       御岳渓谷周辺には、自然豊かでハイキングやトレッキングを楽しめる遊歩道が整備されています。<br>
                       美しい景色を眺めながらの散策は、日頃の疲れを癒すリフレッシュなひとときとなるでしょう。
                     </p>
                   </div>
                 </div>
               </section>
               <!-- ===== 御岳渓谷 End ===== -->

               <!-- ===== 御岳山 Start ===== -->
               <section class="mitake__box">
                 <h3 class="contents-title">
                   <span class="contents-title__main">Mt.Mitake</span>
                   <span class="contents-title__sub">御岳山</span>
                 </h3>
                 <div class="mitake__wrapper mitake__wrapper--row-reverse">
                   <div class="desc fade-in js-fade-in-left">
                     <p class="desc__text">
                       紀元前からの歴史をもち山岳信仰の対象とされてきた御岳山<br>
                       標高929mの頂上には「武蔵御嶽神社」が建立されており、その先には「七代の滝」「ロックガーデン」「綾広の滝」などの自然が作り出した神秘的なスポットが多く存在しています。
                     </p>
                   </div>
                   <figure class="mitake__figure" data-aos="fade-left">
                     <img class="mitake__img" src="<?php echo get_theme_file_uri('/assets/images/img/img_mitake-mt.mitake.jpg'); ?>" alt="御岳渓谷">
                   </figure>
                 </div>
               </section>
               <!-- ===== 御岳山 End ===== -->
             </div>

             <!-- ⬇︎ //////// ボタン End //////// ⬇︎ -->
             <div class="primary-btn" data-aos="fade">
               <a class="primary-btn__link" href="<?php echo home_url(); ?>/mitake/">
                 Mitake more
               </a>
             </div>
             <!-- ⬆︎ //////// ボタン End //////// ⬆︎ -->
           </div>
         </div>
       </section>

       <!-- ⬆︎ ######################## Mitakeコンテンツ End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## Informationコンテンツ Start ######################## ⬇︎ -->
       <section class="top-contents">
         <div class="top-visual top-visual--blog" data-aos="fade-in">
           <!-- ===== セクション見出し共通パーツ Start ===== -->
           <h2 class="visual-heading visual-heading--center">
             <span class="visual-heading__border"></span>
             <div class="visual-heading__inner">
               <span class="visual-heading__main">information</span>
               <span class="visual-heading__sub">お知らせ</span>
             </div>
           </h2>
           <!-- ===== セクション見出し共通パーツ End ===== -->
         </div>

         <section class="top-info">
           <h3 class="contents-title">
             <span class="contents-title__main">Blog</span>
             <span class="contents-title__sub">ブログ</span>
           </h3>

           <div class="top-info__inner">

             <section class="top-blog">
               <!-- ===== ブログ/ニュース一覧 最大件数5件 Start ===== -->
               <div class="top-blog__wrapper" data-aos="fade">

                 <?php
                  $query_result = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 5,
                  ));
                  ?>
                 <?php if ($query_result->have_posts()) : ?>
                  
                   <ul class="blog-list blog-list--slide js-slide">
                     <?php while ($query_result->have_posts()) : $query_result->the_post(); ?>
                       <!-- ##### ブログ/ニュース 投稿記事01 Start ##### -->
                       <li class="blog-card">
                         <!-- ##### ブログ/ニュース 投稿時間 / カテゴリー ##### -->
                         <div class="blog-card__info">
                           <time class="blog-card__time" datetime="<?php the_time('Y.n.j'); ?>">
                             <span class="blog-card__time-year"><?php the_time('Y'); ?></span>
                             <span class="blog-card__time-date"><?php the_time('m | d'); ?></span>
                           </time>
                           <div class="blog-card__category">
                             <?php the_category(''); ?>
                           </div>
                         </div>

                         <!-- ##### ブログ/ニュース サムネイル ##### -->
                         <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                           <?php if (has_post_thumbnail()) : ?>
                             <?php the_post_thumbnail('small-thumb'); ?>

                           <?php elseif (in_category('news')) : ?>
                             <img class="article__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img/img_news-thumb.jpg" alt="<?php the_title(); ?>">

                           <?php else : ?>
                             <img class="blog-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img/img_blog-thumb01.jpg" alt="<?php the_title(); ?>">
                           <?php endif; ?>
                         </a>

                         <!-- ##### ブログ/ニュース 記事タイトルー ##### -->
                         <a href="<?php the_permalink(); ?>" class="blog-card__title">
                           <h3 class="blog-card__title-text">
                             <?php the_title(); ?>
                           </h3>
                         </a>
                       </li>
                       <!-- ##### ブログ/ニュース 投稿記事01 End ##### -->
                     <?php endwhile; ?>
                   </ul>
                 <?php else : ?>
                   <?php // 条件に一致する記事が無かった場合 
                    ?>
                   <p>現在掲載中のお知らせはありません。</p>
                 <?php endif; ?>
               </div>
               <!-- ===== ブログ/ニュース一覧 最大件数5件 End ===== -->
             </section>

             <!-- ⬇︎ //////// ボタン End //////// ⬇︎ -->
             <div class="primary-btn">
               <a class="primary-btn__link" href="<?php echo home_url(); ?>/blog/">
                 Blog more
               </a>
             </div>
             <!-- ⬆︎ //////// ボタン End //////// ⬆︎ -->
           </div>
         </section>

         <section class="top-info top-info--pad-top">
           <h3 class="contents-title">
             <span class="contents-title__main">Instagram</span>
             <span class="contents-title__sub">インスタグラム</span>
           </h3>

           <div class="top-info__inner">
             <section class="instagram">
               <!-- ===== インスタグラム埋め込み アカウント情報 Start ===== -->
               <div class="instagram__label">
                 <div class="instagram__icon">
                   <img class="instagram__icon-img" src="<?php echo get_theme_file_uri('/assets/images/icon/ico_instagram_white.svg'); ?>" alt="インスタグラム">
                 </div>

                 <div class="instagram__info">
                   <p class="instagram__account-name">Cafe_Mitake</p>
                   <p class="instagram__account-desc">プロフィールの概要がはいります。</p>
                 </div>
               </div>

               <!-- ===== インスタグラム埋め込み アカウント情報 Start ===== -->
               <ul class="instagram-list">
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item01.jpg'); ?>" alt="コーヒーにミルクを注ぐ">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item02.jpg'); ?>" alt="コーヒー豆">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item03.jpg'); ?>" alt="桜">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item04.jpg'); ?>" alt="タルトケーキ">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item02.jpg'); ?>" alt="コーヒーにミルクを注ぐ">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item01.jpg'); ?>" alt="コーヒー豆">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item04.jpg'); ?>" alt="桜">
                   </figure>
                 </li>
                 <li class="instagram-list__item">
                   <figure class="instagram-list__figure">
                     <img class="instagram-list__img" src="<?php echo get_theme_file_uri('/assets/images/instagram/instagram_item03.jpg'); ?>" alt="タルトケーキ">
                   </figure>
                 </li>
               </ul>
               <!-- ===== インスタグラム埋め込み 最大件数8件 End ===== -->

               <div class="instagram-button">
                 <button type="button" class="instagram-button__more">Load More…</button>
                 <button type="button" class="instagram-button__follow">
                   <span class="instagram-button__icon">
                     <img src="<?php echo get_theme_file_uri('/assets/images/icon/ico_instagram_white.svg'); ?>" alt="インスタグラム">
                   </span>
                   Follow on Instagram
                 </button>
               </div>
             </section>
           </div>
         </section>

       </section>
       <!-- ⬆︎ ######################## Informationコンテンツ End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## Accessコンテンツ Start ######################## ⬇︎ -->
       <section id="access" class="top-contents top-contents--block">
         <!-- ===== セクション見出し共通パーツ Start ===== -->
         <h2 class="section-heading" data-aos="fade-right">
           <span class="section-heading__main">Access</span>
           <span class="section-heading__sub">アクセス</span>
         </h2>
         <!-- ===== セクション見出し共通パーツ End ===== -->

         <div class="top-info top-info--block">
           <div class="top-info__inner access">
             <section class="access__info" data-aos="fade">
               <h3 class="access__shopname">
                 Cafe Mitake
               </h3>

               <div class="desc fade-in js-fade-in-left">
                 <p class="desc__text">
                   〒198-0000 東京都青梅市御岳本町0000-00
                 </p>

                 <p class="desc__text">
                   <span class="desc__text  desc__text--bold">【営業時間】</span><br>
                   平日：10:00 ~ 18:00（水・木 定休日）<br>
                   土日・祝日：9:00 ~ 17:00
                 </p>
               </div>

               <div class="access__traffic">
                 <div class="access__traffic__box">
                   <p class="access__traffic-label">
                     電車でお越しの場合
                   </p>

                   <div class="desc-card">

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">JR中央本線</p>
                       <p class="desc-card__text">新宿駅</p>
                     </div>

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">JR中央本線</p>
                       <p class="desc-card__text">立川駅 又は 青梅駅 乗り換え</p>
                     </div>

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">JR青梅線</p>
                       <p class="desc-card__text">御嶽駅 下車 徒歩5分</p>
                     </div>

                   </div>
                 </div>

                 <div class="access__traffic__box">
                   <p class="access__traffic-label">
                     車でお越しの場合
                   </p>

                   <div class="desc-card">

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">圏央道</p>
                       <p class="desc-card__text">青梅IC</p>
                     </div>

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">国道411号</p>
                       <p class="desc-card__text">約40分</p>
                     </div>

                     <div class="desc-card__item">
                       <p class="desc-card__text desc-card__text--f-small">Cafe Mitake</p>
                       <p class="desc-card__text">到着 駐車場完備</p>
                     </div>

                   </div>
                 </div>
               </div>
             </section>

             <section class="access__map" data-aos="fade-right">
               <h3 class="contents-title">
                 <span class="contents-title__main">GoogleMap</span>
               </h3>
               <iframe class="access__googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d414200.42467643064!2d138.57295989990234!3d35.80138620111087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60193abe0293e1c1%3A0xa1be4990cfac0715!2z5b6h5ba96aeF!5e0!3m2!1sja!2sjp!4v1688607319602!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </section>
           </div>
         </div>
       </section>
       <!-- ⬆︎ ######################## Accessコンテンツ End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## Contactコンテンツ Start ######################## ⬇︎ -->
       <section id="contact" class="top-contents top-contents--block">
         <!-- ===== セクション見出し共通パーツ Start ===== -->
         <h2 class="section-heading" data-aos="fade-right">
           <span class="section-heading__main">Contact</span>
           <span class="section-heading__sub">お問い合わせ</span>
         </h2>
         <!-- ===== セクション見出し共通パーツ End ===== -->

         <div class="top-info top-info--block">
           <div class="top-contents__inner">
             <div class="contact" data-aos="fade">

               <div class="desc fade-in js-fade-in-left">
                 <p class="desc__text desc__text--bold">
                   TEL. 000-0000-0000
                 </p>

                 <p class="desc__text">
                   お電話でのお問い合わせも受け付けております。<br>
                   時間帯によっては電話をお取りすることができませんので、ご了承ください。
                 </p>
               </div>

               <!-- ===== 入力フォームパーツ Start ===== -->
               <div class="contact__form">
               <?php echo do_shortcode('[contact-form-7 id="1f10d60" title="CafeMitakeお問い合わせフォーム"]'); ?>
               </div>
               <!-- ===== 入力フォームパーツ End ===== -->
             </div>
           </div>
         </div>
       </section>
       <!-- ⬆︎ ######################## Contactコンテンツ End ######################## ⬆︎ -->
     </main>
   </div>
 </div>

 <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
 <?php get_footer(); ?>