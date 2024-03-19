 <!-- =================================================== 
  category.php
  カテゴリ投稿一覧ページテンプレート
================================================== -->

 <!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
 <?php get_template_part('/parts/head'); ?>

 <div class="container">

   <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
   <?php get_header(); ?>

   <div class="container__wrapper">

     <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
     <div class="visual-capture visual-capture--article">
       <h1 class="visual-heading visual-heading--page">
         <span class="visual-heading__border"></span>
         <div class="visual-heading__inner">
           <span class="visual-heading__main"><?php single_cat_title(); ?></span>
           <span class="visual-heading__sub"></span>
         </div>
       </h1>
     </div>

     <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

     <!-- ------------------------------------------------------------------------------- -->

     <!-- ⬇︎ ######################## パンくずリスト 読み込み ######################## ⬇︎ -->
     <?php breadcrumb(); ?>

     <div class="contents contents--col">

       <!-- ⬇︎ ######################## ブログリスト Start ######################## ⬇︎ -->


       <!-- ===== ブログ/ニュース一覧 最大件数4件 Start ===== -->
       <div class="blog">
         <div class="blog__wrapper">

           <?php
            $cat_info = get_category(get_query_var('cat'));
            $args = [
              'post_type' => array('post'),
              'posts_per_page' => 6,
              'post_status' => 'publish',
              'orderby' => 'post_date',
              'post_status' => 'publish',  // 公開済みのみ
              'orderby' => 'date', //新着順
              'order' => 'DESC',    // 昇順
              'category_name' => $cat_info->slug,
              'paged' => $paged,
            ];
            $the_posts = new WP_Query($args);
            $paged = (get_query_var('each_exrpt_post')) ? get_query_var('paged') : 1;
            ?>
           <!-- ##### 記事件数表示 ##### -->
           <section class="blog-number">
             <h2 class="blog-number__label"><?php single_cat_title(); ?></h2>
             <div class="blog-number__box">
               <p class="blog-number__items">全 <span class="blog-number__items blog-number__items--value"><?php echo $wp_query->post_count; ?></span>件</p>
             </div>
           </section>

           <ul class="blog-list">

             <?php if ($the_posts->have_posts()) : ?>
               <?php paginate_links(); ?>
               <?php while ($the_posts->have_posts()) : $the_posts->the_post(); ?>

                 <!-- ##### ブログ/ニュース 投稿記事 Start ##### -->
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
                 <!-- ##### ブログ/ニュース 投稿記事 End ##### -->

               <?php endwhile;
                wp_reset_postdata(); ?>
               <!-- 記事のループ処理終了 -->

             <?php else : ?>
               <p>記事が見つかりませんでした。</p>
             <?php endif; ?>
           </ul>

         </div>
         <!-- ===== ブログ/ニュース一覧 最大件数4件 End ===== -->

         <!-- ===== ページネーション 読み込み ===== -->
         <?php get_template_part('parts/pagination') ?>

       </div>
       <!-- ⬆︎ ######################## ブログリスト End ######################## ⬆︎ -->

       <!-- ------------------------------------------------------------------------------- -->

       <!-- ⬇︎ ######################## サイドバー 読み込み ######################## ⬇︎ -->
       <?php get_sidebar(); ?>
     </div>

     <!-- ------------------------------------------------------------------------------- -->

     <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
     <?php get_footer(); ?>