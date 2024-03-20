 <!-- =================================================== 
  single.php
  記事ページ テンプレート
================================================== -->

 <!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
 <?php get_template_part('/parts/head'); ?>

 <div class="container">

   <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
   <?php get_header(); ?>

   <div class="container__wrapper">

     <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
     <?php
      // カテゴリーのデータを取得
      $cat = get_the_category();
      $cat = $cat[0];
      ?>
     <div class="visual-capture visual-capture--article">
       <h1 class="visual-heading visual-heading--page">
         <span class="visual-heading__border"></span>
         <div class="visual-heading__inner">
           <span class="visual-heading__main"><?php echo $cat->cat_name; ?></span>
           <span class="visual-heading__sub"></span>
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

     <div class="contents contents--article">

       <!-- ⬇︎ ######################## 記事内容 Start ######################## ⬇︎ -->
       <div class="contents__wrapper">
         <article class="article">

           <?php while (have_posts()) : the_post(); ?>

             <!-- ===== 投稿日時 / タイトル Start ===== -->
             <div class="article__heading">
               <time class="article__time" datetime="<?php the_time('Y.n.j'); ?>">
                 <span class="article__time-year"><?php the_time('Y'); ?></span>
                 <span class="article__time-date"><?php the_time('m | d'); ?></span>
               </time>
               <h1 class="article__title-h1">
                 <?php the_title(); ?>
               </h1>
             </div>
             <!-- ===== 投稿日時 / タイトル Start ===== -->

             <!-- ===== 記事サムネ Start ===== -->

             <div class="article__thumb">
               <?php if (has_post_thumbnail()) : ?>
                 <?php the_post_thumbnail('small-thumb'); ?>

               <?php elseif (in_category('news')) : ?>
                 <img class="article__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img/img_news-thumb.jpg" alt="<?php the_title(); ?>">

               <?php else : ?>
                 <img class="blog-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img/img_blog-thumb01.jpg" alt="<?php the_title(); ?>">
               <?php endif; ?>
             </div>

             <!-- ===== 記事サムネ End ===== -->

             <!-- ===== 記事内容 Start ===== -->
             <div class="article-main">
               <?php the_content(); ?>
             </div>
             <!-- ===== 記事内容 End ===== -->

           <?php endwhile; ?>
         </article>
         <!-- ⬆︎ ######################## 記事内容 End ######################## ⬆︎ -->

         <!-- ------------------------------------------------------------------------------- -->

         <!-- ⬇︎ ######################## カテゴリー / タグ / SNSシェア Start ######################## ⬇︎ -->
         <div class="article-menu">
           <div class="tag">
             <?php the_tags('<ul class="tag-list"><li class="tag-list__item">', '</li><li  class="tag-list__item">', '</li></ul>'); ?>
           </div>

           <div class="article-menu__category">
             <?php the_category(); ?>
           </div>

           <!-- ##### snsシェアボタン読み込み ##### -->
           <?php get_template_part('parts/sns-share') ?>

         </div>
         <!-- ⬆︎ ######################## カテゴリー / タグ / SNSシェア End ######################## ⬆︎ -->

         <!-- ------------------------------------------------------------------------------- -->

         <!-- ⬇︎ ######################## 前後の記事 読み込み ######################## ⬇︎ -->
         <?php get_template_part('parts/prev-next') ?>

         <!-- ------------------------------------------------------------------------------- -->

         <!-- ⬇︎ ######################## 関連記事 最大表示数6件 Start ######################## ⬇︎ -->
         <div class="related-article">
           <h4 class="related-article__title">
             関連記事
           </h4>

           <ul class="related-article__box">

             <?php
              $tagkwds = array();
              if (has_tag()) {

                $tags = get_the_tags();
                foreach ($tags as $tag) {
                  $tagkwds[] = $tag->term_id;
                }
              }

              $args = array(
                'post-type' => 'post',
                'posts_per_page' => '2',
                'post_not_in' => array($post->ID),
                'tag__in' => $tagkwds,
                'orderby' => 'rand'
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

                 <!-- ===== 関連記事 Start ===== -->
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
                 <!-- ===== 関連記事 End ===== -->

             <?php endwhile;
              endif;
              wp_reset_postdata() ?>

           </ul>

         </div>
       </div>
       <!-- ⬆︎ ######################## 関連記事 最大表示数6件 End ######################## ⬆︎ -->
     </div>


     <!-- ------------------------------------------------------------------------------- -->

     <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
     <?php get_footer(); ?>