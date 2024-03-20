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
       <div class="breadcrumb">
         <div class="breadcrumb__list">
           <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
         </div>
       </div>

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
               <section id="spring" class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   春 Spring
                   <span class="title-label__sub">3月 ~ 5月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->
                 <ul class="menu-list menu-list--mb">

                   <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                   <?php echo do_shortcode('[fdm-menu id=2173]'); ?>

                 </ul>
                 <!-- ========== 春限定メニュー End ========== -->

               </section>

               <!-- ====================================== -->

               <!-- ========== 夏限定メニュー Start ========== -->
               <section id="summer" class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   夏 Summer
                   <span class="title-label__sub">6月 ~ 8月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">
                   <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                   <?php echo do_shortcode('[fdm-menu id=2176]'); ?>
                 </ul>
               </section>
               <!-- ========== 夏限定メニュー End ========== -->

               <!-- ====================================== -->

               <!-- ========== 秋限定メニュー Start ========== -->
               <section id="autumn" class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   秋 Autumn
                   <span class="title-label__sub">9月 ~ 11月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">

                   <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                   <?php echo do_shortcode('[fdm-menu id=2190]'); ?>

                 </ul>
               </section>
               <!-- ========== 秋限定メニュー End ========== -->

               <!-- ====================================== -->

               <!-- ========== 冬限定メニュー Start ========== -->
               <section id="winter" class="menu-contents__box">
                 <!-- ===== タイトル見出し共通パーツ Start ===== -->
                 <h3 class="title-label">
                   冬 Winter
                   <span class="title-label__sub">12月 ~ 2月限定</span>
                 </h3>
                 <!-- ===== タイトル見出し共通パーツ End ===== -->

                 <ul class="menu-list  menu-list--mb">

                   <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                   <?php echo do_shortcode('[fdm-menu id=2196]'); ?>

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

                 <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                 <?php echo do_shortcode('[fdm-menu id=2200]'); ?>

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
               <div class="desc desc--col">
                 <figure class="desc__figure">
                   <img class="desc__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img/img_coffee-beans.jpg" alt="コーヒー豆">
                 </figure>
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

                 <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                 <?php echo do_shortcode('[fdm-menu id=2224]'); ?>

               </ul>

               <!-- ========== Coffee & Latte End ========== -->

               <!-- ========== Other Start ========== -->

               <!-- ===== タイトル見出し共通パーツ Start ===== -->
               <h3 class="title-label">
                 Other
               </h3>
               <!-- ===== タイトル見出し共通パーツ End ===== -->
               <ul class="menu-list menu-list--mb">

                 <!-- ##### プラグイン「Restaurant Menu and Food Ordering」埋め込み ##### -->
                 <?php echo do_shortcode('[fdm-menu id=2226]'); ?>

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