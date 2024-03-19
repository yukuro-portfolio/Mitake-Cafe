 <!-- =================================================== 
  archive-menu.php
  メニューページ カスタム投稿
================================================== -->

 <!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
 <?php get_template_part('/parts/head'); ?>

 <div class="container">

   <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
   <?php get_header(); ?>

   <div class="container__wrapper">

     <!-- ------------------------------------------------------------------------------- -->
     <div class="container__wrapper">
       <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
       <div class="visual-capture visual-capture--menu">
         <h1 class="visual-heading visual-heading--page">
           <span class="visual-heading__border"></span>
           <div class="visual-heading__inner">
             <span class="visual-heading__main">Menu</span>
             <span class="visual-heading__sub">メニュー</span>
           </div>
         </h1>
       </div>
       <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

       <!-- ⬇︎ ######################## パンくずリスト 読み込み ######################## ⬇︎ -->
       <?php breadcrumb(); ?>

       <section class="contents">
         <div class="menu">

           <!-- ===== タブメニュー Start ===== -->
           <ul id="menu" class="tab">
             <li class="tab__item js-tab-switch is-active" data-tab="is-sweets">
               <img class="tab__icon" src="<?php echo get_theme_file_uri('/assets/images/icon/ico_menu-sweets.svg'); ?>" alt="Sweets スイーツ">
               Sweets
             </li>
             <li class="tab__item js-tab-switch" data-tab="is-dish">
               <img class="tab__icon" src="<?php echo get_theme_file_uri('/assets/images/icon/ico_menu-dish.svg'); ?>" alt="Dish 料理">

               Dish
             </li>
             <li class="tab__item js-tab-switch" data-tab="is-drink">
               <img class="tab__icon" src="<?php echo get_theme_file_uri('/assets/images/icon/ico_menu-drink.svg'); ?>" alt="Drink 飲み物">
               Drink
             </li>
           </ul>
           <!-- ===== タブメニュー End ===== -->


           <!--タブを切り替えて表示するコンテンツ-->
           <div class="menu-contents">

             <!-- ⬇︎ ######################## Sweets スイーツ Start ######################## ⬇︎ -->
             <section class="tab__panel is-active  js-tab-cts" data-tab="is-sweets">

               <h2 class="contents-title">
                 <span class="contents-title__main">Sweets</span>
                 <span class="contents-title__sub">スイーツ</span>
               </h2>

               <div class="desc">
                 <p class="desc__text">
                   季節ごとに変化する四季折々の旬のフルーツと食材を使用し、その時期ならではの味わいや風味を楽しむことができます。<br>
                   コーヒーと一緒にゆっくりとご堪能ください。<br>
                   （コーヒーとスイーツを一緒にご注文で、¥50 割引いたします。）
                 </p>
               </div>

               <!-- ========== 春限定メニュー Start ========== -->
               <section class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   春 Spring
                   <span class="title-label__sub">3月 ~ 5月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list menu-list--mb">
                   <?php
                   $terms = get_terms('sweets');
                    $args = array(
                      'post_type' => 'custom-post',
                      'order' => 'DESC',
                      'taxonomy' => 'category',
                      
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                       <!-- ##### 桜のタルトケーキ ここから ##### -->
                       <li class="menu-card">
                         <figure class="menu-card__capture">
                          <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                          <?php endif;?>
                           <!-- <img class="menu-card__img" src="/images/Menu_img/img_sakura-cake.jpg" alt="桜のタルトケーキ"> -->
                         </figure>

                         <div class="menu-card__info">
                           <div class="menu-card__name-price">
                             <p class="menu-card__name"><?php the_title(); ?></p>
                             <p class="menu-card__price">&yen; 700</p>
                           </div>

                           <p class="menu-card__desc">
                             桜を練り込んだクッキータルトと生クリームが特徴です。<br>
                             お花見散策のついでにいかがですか。
                           </p>
                         </div>
                       </li>
                       <!-- ##### 桜のタルトケーキ ここまで ##### -->

                       <!-- ##### 桜餅（お茶付き） ここから ##### -->
                       <li class="menu-card">
                         <figure class="menu-card__capture">
                           <img class="menu-card__img" src="/images/Menu_img/img_sakuramochi.jpg" alt="桜餅（お茶付き）">
                         </figure>

                         <div class="menu-card__info">
                           <div class="menu-card__name-price">
                             <p class="menu-card__name">桜餅（お茶付き）</p>
                             <p class="menu-card__price">&yen; 600</p>
                           </div>

                           <p class="menu-card__desc">
                             地元の桜をもち米、こし餡、包み葉でふんだんに使用した逸品です。<br>
                             春の訪れを感じる和菓子です。
                           </p>
                         </div>
                       </li>
                       <!-- ##### 桜餅（お茶付き） ここまで ##### -->

                   <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                 </ul>
                 <!-- ========== 春限定メニュー End ========== -->
               </section>

               <!-- ====================================== -->

               <!-- ========== 夏限定メニュー Start ========== -->
               <section class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   夏 Summer
                   <span class="title-label__sub">6月 ~ 8月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">
                   <!-- ##### フルーツソースがけかき氷 ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_shaved-ice.jpg" alt="フルーツソースがけかき氷">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">フルーツソースがけかき氷</p>
                         <p class="menu-card__price">&yen; 700</p>
                       </div>

                       <p class="menu-card__desc">
                         フルーツの果実を残した酸味と甘みが調和した夏にピッタリのひんやりかき氷です。<br>
                         マンゴー / いちご / 抹茶のソースを選択いただけます。
                       </p>
                     </div>
                   </li>
                   <!-- ##### フルーツソースがけかき氷 ここまで ##### -->

                   <!-- ##### マンゴーのシフォンケーキ ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_mango-cake.jpg" alt="マンゴーのシフォンケーキ">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">マンゴーのシフォンケーキ</p>
                         <p class="menu-card__price">&yen; 700</p>
                       </div>

                       <p class="menu-card__desc">
                         宮崎県産のマンゴーを生地、生クリームなどにふんだんに使用しました。<br>
                         マンゴーの酸味と甘みがアイスコーヒーのお供に合います。
                       </p>
                     </div>
                   </li>
                   <!-- ##### マンゴーのシフォンケーキ ここまで ##### -->
                 </ul>
               </section>
               <!-- ========== 夏限定メニュー End ========== -->

               <!-- ====================================== -->

               <!-- ========== 秋限定メニュー Start ========== -->
               <section class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   秋 Autumn
                   <span class="title-label__sub">9月 ~ 11月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">
                   <!-- ##### かぼちゃのチーズケーキ ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_pumpkin-cake.jpg" alt="かぼちゃのチーズケーキ">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">かぼちゃのチーズケーキ</p>
                         <p class="menu-card__price">&yen; 700</p>
                       </div>

                       <p class="menu-card__desc">
                         地元で採れた新鮮なかぼちゃを使用した、かぼちゃの風味が漂う深い味わいが特徴のチーズケーキです。
                       </p>
                     </div>
                   </li>
                   <!-- ##### かぼちゃのチーズケーキ ここまで ##### -->

                   <!-- ##### モンブラン ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_mont-blanc.jpg" alt="モンブラン">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">モンブラン</p>
                         <p class="menu-card__price">&yen; 700</p>
                       </div>

                       <p class="menu-card__desc">
                         奥多摩の山中で採れた栗を使用したまろやかな味わいをご堪能ください。
                       </p>
                     </div>
                   </li>
                   <!-- ##### モンブラン ここまで ##### -->

                   <!-- ##### スイートポテト ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_sweet-potato.jpg" alt="スイートポテト">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">スイートポテト</p>
                         <p class="menu-card__price">&yen; 600</p>
                       </div>

                       <p class="menu-card__desc">
                         当店の菜園で収穫したさつまいもを使い、風味を残した甘すぎず香りが豊かなスイートポテトです。
                       </p>
                     </div>
                   </li>
                   <!-- ##### スイートポテト ここまで ##### -->
                 </ul>
               </section>
               <!-- ========== 秋限定メニュー End ========== -->

               <!-- ====================================== -->

               <!-- ========== 冬限定メニュー Start ========== -->
               <section class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   冬 Winter
                   <span class="title-label__sub">12月 ~ 2月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">
                   <!-- ##### アップルパイ ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_apple-pie.jpg" alt="アップルパイ">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">アップルパイ</p>
                         <p class="menu-card__price">&yen; 600</p>
                       </div>

                       <p class="menu-card__desc">
                         青森県産のりんごを使用し、シナモンをかけた香りの良い風味のあるアップルパイです。
                       </p>
                     </div>
                   </li>
                   <!-- ##### アップルパイ ここまで ##### -->

                   <!-- ##### ぜんざい ここから ##### -->
                   <li class="menu-card">
                     <figure class="menu-card__capture">
                       <img class="menu-card__img" src="/images/Menu_img/img_oshiruko.jpg" alt="ぜんざい">
                     </figure>

                     <div class="menu-card__info">
                       <div class="menu-card__name-price">
                         <p class="menu-card__name">ぜんざい</p>
                         <p class="menu-card__price">&yen; 700</p>
                       </div>

                       <p class="menu-card__desc">
                         自家製の小豆を使ったあんこにつきたてのお餅を入れました。<br>
                         冬の冷えた体にピッタリです。
                       </p>
                     </div>
                   </li>
                   <!-- ##### ぜんざい ここまで ##### -->
                 </ul>
                 <!-- ========== 冬限定メニュー End ========== -->
               </section>
             </section>
             <!-- ⬆︎ ######################## Sweets スイーツ End ######################## ⬆︎ -->

             <!-- ------------------------------------------------------------------------------- -->

             <!-- ⬇︎ ######################## Dish 料理 Start ######################## ⬇︎ -->
             <section class="tab__panel js-tab-cts" data-tab="is-dish">

               <h2 class="contents-title">
                 <span class="contents-title__main">Dish</span>
                 <span class="contents-title__sub">お料理</span>
               </h2>

               <div class="desc">
                 <p class="desc__text">
                   青梅、奥多摩周辺で採れた新鮮な野菜などを使用したシェフ歴10年の料理人が作るボリューム満点の料理をゆっくりとご堪能ください。
                 </p>
               </div>

               <ul class="menu-list">

                 <!-- ##### オムライス ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_omelette-rice.jpg" alt="オムライス（デミグラスソース / ケチャップ）">
                   </figure>

                   <div class="menu-card__info">
                     <div class="menu-card__name-price">
                       <p class="menu-card__name">オムライス（デミグラスソース / ケチャップ）</p>
                       <p class="menu-card__price">&yen; 1,200</p>
                     </div>

                     <p class="menu-card__desc">
                       地元の卵を使ったふわふわで半熟のオムライスです。<br>
                       子供から大人まで栄養たっぷりのオムライスをご堪能ください。
                     </p>
                   </div>
                 </li>
                 <!-- ##### オムライス ここまで ##### -->

                 <!-- ##### 洋風ハンバーグ ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_hamburger.jpg" alt="洋風ハンバーグ">
                   </figure>

                   <div class="menu-card__info">
                     <div class="menu-card__name-price">
                       <p class="menu-card__name">洋風ハンバーグ（デミグラスソース）</p>
                       <p class="menu-card__price">&yen; 1,500</p>
                     </div>

                     <p class="menu-card__desc">
                       焼きたてジューシーで肉の風味を堪能できる逸品です。<br>
                       登山やレジャー後のエネルギー補給にいかがでしょうか。
                     </p>
                   </div>
                 </li>
                 <!-- ##### 洋風ハンバーグ ここまで ##### -->

                 <!-- ##### ミートソースパスタ ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_meat-spource-spaghetti.jpg" alt="ミートソースパスタ">
                   </figure>

                   <div class="menu-card__info">
                     <div class="menu-card__name-price">
                       <p class="menu-card__name">ミートソースパスタ</p>
                       <p class="menu-card__price">&yen; 1,100</p>
                     </div>

                     <p class="menu-card__desc">
                       地元の野菜を使ったトマトソースとハーブ。<br>
                       肉の旨みとトマトの酸味が絶妙に調和した当店だけの味をご体験ください。
                     </p>
                   </div>
                 </li>
                 <!-- ##### ミートソースパスタ ここまで ##### -->

                 <!-- ##### ダムカツカレー ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_dam-carry.jpg" alt="ダムカツカレー">
                   </figure>

                   <div class="menu-card__info">
                     <div class="menu-card__name-price">
                       <p class="menu-card__name">ダムカツカレー</p>
                       <p class="menu-card__price">&yen; 1,300</p>
                     </div>

                     <p class="menu-card__desc">
                       小河内ダムにちなみ、カツでダムを表現。<br>
                       スパイスから作り上げてじっくり煮込んだボリューム満点のカレーです。
                     </p>
                   </div>
                 </li>
                 <!-- ##### ダムカツカレー ここまで ##### -->

                 <!-- ##### お子様ランチ ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_childs-lunch.jpg" alt="お子様ランチ">
                   </figure>

                   <div class="menu-card__info">
                     <div class="menu-card__name-price">
                       <p class="menu-card__name">お子様ランチ</p>
                       <p class="menu-card__price">&yen; 1,300</p>
                     </div>

                     <p class="menu-card__desc">
                       小学生以下のお子様向けのボリューム満点洋食プレートです。
                     </p>
                   </div>
                 </li>
                 <!-- ##### お子様ランチ ここまで ##### -->

               </ul>

             </section>
             <!-- ⬆︎ ######################## Dish 料理 End ######################## ⬆︎ -->

             <!-- ------------------------------------------------------------------------------- -->

             <!-- ⬇︎ ######################## Drink 飲み物 Start ######################## ⬇︎ -->
             <section class="tab__panel js-tab-cts" data-tab="is-drink">

               <h2 class="contents-title">
                 <span class="contents-title__main">Drink</span>
                 <span class="contents-title__sub">飲み物</span>
               </h2>
               <div class="desc">
                 <p class="desc__text">
                   当店のコーヒーは主にコロンビア産の豆を焙煎しています。<br>
                   コロンビアのコーヒー豆は高品質で風味豊かな味わいが特徴とされており、独特な酸味と甘みがあり、世界中で高い評価を受けています。
                 </p>
               </div>

               <!-- ========== Coffee & Latte Start ========== -->

               <!-- ===== タイトル見出し共通パーツ Start ===== -->
               <h3 class="title-label">
                 Coffee & Latte
               </h3>
               <!-- ===== タイトル見出し共通パーツ End ===== -->
               <ul class="menu-list menu-list--mb">
                 <!-- ##### ブレンドコーヒー ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_coffee.jpg" alt="ブレンドコーヒー">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">ブレンドコーヒー</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 500</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Ice</p>
                       <p class="menu-card__price">&yen; 500</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### ブレンドコーヒー ここまで ##### -->

                 <!-- ##### 抹茶 ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_cafelate.jpg" alt="カフェラテ">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">カフェラテ</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 600</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Ice</p>
                       <p class="menu-card__price">&yen; 600</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### カフェラテ ここまで ##### -->

                 <!-- ##### 抹茶ラテ ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_macchalate.jpg" alt="抹茶ラテ">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">抹茶ラテ</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 650</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Ice</p>
                       <p class="menu-card__price">&yen; 650</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### 抹茶ラテ ここまで ##### -->
               </ul>

               <!-- ========== Coffee & Latte End ========== -->

               <!-- ========== Other Start ========== -->

               <!-- ===== タイトル見出し共通パーツ Start ===== -->
               <h3 class="title-label">
                 Other
               </h3>
               <!-- ===== タイトル見出し共通パーツ End ===== -->
               <ul class="menu-list menu-list--mb">
                 <!-- ##### 紅茶（ミルク・シュガー付き） ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_tea.jpg" alt="紅茶（ミルク・シュガー付き）">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">紅茶（ミルク・シュガー付き）</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 600</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Ice</p>
                       <p class="menu-card__price">&yen; 600</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### 紅茶（ミルク・シュガー付き） ここまで ##### -->

                 <!-- ##### 抹茶 ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_macha.jpg" alt="抹茶">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">抹茶</p>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 500</p>
                     </div>
                   </div>
                 </li>
                 <!-- ##### 抹茶 ここまで ##### -->

                 <!-- ##### ソフトドリンク ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_juice.jpg" alt="ソフトドリンク">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">ソフトドリンク</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">コーラ</p>
                       <p class="menu-card__price">&yen; 400</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">メロンソーダ</p>
                       <p class="menu-card__price">&yen; 400</p>
                     </div>
                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">オレンジジュース</p>
                       <p class="menu-card__price">&yen; 400</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### ソフトドリンク ここまで ##### -->

                 <!-- ##### 甘酒（11月 ~ 2月限定） ここから ##### -->
                 <li class="menu-card">
                   <figure class="menu-card__capture">
                     <img class="menu-card__img" src="/images/Menu_img/img_amazake.jpg" alt="甘酒（11月 ~ 2月限定）">
                   </figure>

                   <div class="menu-card__info">
                     <p class="menu-card__name">甘酒（11月 ~ 2月限定）</p>

                     <div class="menu-card__drink-price">
                       <p class="menu-card__name menu-card__name--drink">Hot</p>
                       <p class="menu-card__price">&yen; 500</p>
                     </div>

                   </div>
                 </li>
                 <!-- ##### 甘酒（11月 ~ 2月限定） ここまで ##### -->
               </ul>

               <!-- ========== Other End ========== -->
             </section>
             <!-- ⬆︎ ######################## Drink 飲み物 End ######################## ⬆︎ -->
           </div>
         </div>
         <!-- ===== タブメニュー End ===== -->
       </section>
     </div>


     <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
     <?php get_footer(); ?>