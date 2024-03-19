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

     <?php if (have_posts()) : ?>

       <?php while (have_posts()) : the_post(); ?>

         <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
         <?php if (has_post_thumbnail()) : /* アイキャッチが登録されていたら */ ?>
           <div class="visual-capture">
             <?php the_post_thumbnail(); ?>
             <h1 class="visual-heading visual-heading--page">
               <span class="visual-heading__border"></span>
               <div class="visual-heading__inner">
                 <span class="visual-heading__main"><?php the_title(); ?></span>
                 <span class="visual-heading__sub"><?php the_subtitle(); ?></span>
               </div>
             </h1>
           </div>
         <?php else : /* アイキャッチ未登録 */ ?>
           <div class="contents-top">
             <h2 class="section-heading" data-aos="fade-right">
               <span class="section-heading__main"><?php the_title(); ?></span>
               <span class="section-heading__sub"><?php the_subtitle(); ?></span>
             </h2>
           </div>
         <?php endif; ?>


         <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

         <!-- ------------------------------------------------------------------------------- -->

         <!-- ⬇︎ ######################## パンくずリスト 読み込み ######################## ⬇︎ -->
         <?php breadcrumb(); ?>

         <div class="contents">

           <!-- ⬇︎ ######################## ページ内容 Start ######################## ⬇︎ -->
           <?php the_content(); ?>
           <!-- ⬆︎ ######################## ページ内容 End ######################## ⬆︎ -->

         </div>

       <?php endwhile; ?>

     <?php else : ?>
       <div>記事が存在していないです。</div>
     <?php endif; ?>
   </div>


   <!-- ------------------------------------------------------------------------------- -->

   <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
   <?php get_footer(); ?>