 <!-- =================================================== 
  page.php
  固定ページテンプレート
================================================== -->

 <!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
 <?php get_template_part('/parts/head'); ?>

 <div class="container">

   <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
   <?php get_header(); ?>

   <div class="container__wrapper">

         <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
 
           <div class="visual-capture visual-capture--page-404">
             <h1 class="visual-heading visual-heading--page">
               <span class="visual-heading__border"></span>
               <div class="visual-heading__inner">
                 <span class="visual-heading__main">404 Not Found</span>
                 <span class="visual-heading__sub">ページが見つかりませんでした</span>
               </div>
             </h1>
           </div>


         <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

         <!-- ------------------------------------------------------------------------------- -->

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
   </div>


   <!-- ------------------------------------------------------------------------------- -->

   <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
   <?php get_footer(); ?>