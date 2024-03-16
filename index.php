<!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
<?php get_template_part('/parts/head'); ?>

<div class="container">

  <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
  <?php get_header(); ?>

  <div class="container__wrapper">

    <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
    <div class="visual-capture visual-capture--blog">
      <h1 class="visual-heading visual-heading--page">
        <span class="visual-heading__border"></span>
        <div class="visual-heading__inner">
          <span class="visual-heading__main">Blog</span>
          <span class="visual-heading__sub">ブログ</span>
        </div>
      </h1>
    </div>

    <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

    <!-- ------------------------------------------------------------------------------- -->

    <!-- ⬇︎ ######################## パンくずリスト Start ######################## ⬇︎ -->
    <nav class="pkz">
      <ol class="pkz__list">
        <li class="pkz__item">
          <a class="pkz__link" href="index.html">
            Home
          </a>
        </li>
        <li class="pkz__item">
          Blog
        </li>
      </ol>
    </nav>
    <!-- ⬆︎ ######################## パンくずリスト End ######################## ⬆︎ -->


    <div class="contents contents--col">

      <!-- ⬇︎ ######################## ブログリスト Start ######################## ⬇︎ -->

      <!-- ===== ブログ/ニュース一覧 最大件数4件 Start ===== -->
      <div class="blog">
        <div class="blog__wrapper">

          <!-- ##### 記事件数表示 ##### -->
          <div class="blog-number">
            <p class="blog-number__label">ALL</p>
            <div class="blog-number__box">
              <p class="blog-number__items">全 <span class="blog-number__items blog-number__items--value">5</span>件</p>
              <p class="blog__number__display">1 ~ 4 件を表示しています。</p>
            </div>
          </div>

          <ul class="blog-list">

          <?php query_posts('posts_per_page=4'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <!-- ##### ブログ/ニュース 投稿記事 Start ##### -->
                <li class="blog-card">
                  <!-- ##### ブログ/ニュース 投稿時間 / カテゴリー ##### -->
                  <div class="blog-card__info">
                    <time class="blog-card__time" datetime="<?php the_time('Y.n.j'); ?>">
                      <span class="blog-card__time-year"><?php the_time('Y'); ?></span>
                      <span class="blog-card__time-date"><?php the_time('m | d'); ?></span>
                    </time>
                    <div class="blog-card__category">
                      <a class="blog-card__category-link" href="#">Blog</a>
                    </div>
                  </div>

                  <!-- ##### ブログ/ニュース サムネイル ##### -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <img class="blog-card__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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
            else : ?>
              <p>まだ記事がありません</p>
            <?php endif ?>
            <?php wp_reset_postdata(); ?>
            <!-- 記事のループ処理終了 -->

          </ul>
        </div>
        <!-- ===== ブログ/ニュース一覧 最大件数4件 End ===== -->

        <!-- ===== ページネーション Start ===== -->
        <div class="pagination">
          <ul class="pagination__list">
            <li class="pagination__item pagination__item--prev">Prev</li>
            <li class="pagination__item pagination__item--active">1</li>
            <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
            <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
            <li class="pagination__item pagination__item--next"><a class="pagination__link" href="#">Next</a></li>
          </ul>
        </div>
        <!-- ===== ページネーション End ===== -->

      </div>
      <!-- ⬆︎ ######################## ブログリスト End ######################## ⬆︎ -->

      <aside class="blog-aside">
        <!-- ##### カテゴリー ##### -->
        <section class="blog-aside__box">
          <h3 class="blog-aside__title">カテゴリー</h3>
          <ul class="blog-aside__menu">
            <li class="blog-aside__menu-item">
              <a class="blog-aside__menu-link" href="">Blog</a>
            </li>
            <li class="blog-aside__menu-item">
              <a class="blog-aside__menu-link" href="">News</a>
            </li>
          </ul>
        </section>

        <!-- ##### アーカイブ ##### -->
        <section class="blog-aside__box">
          <h3 class="blog-aside__title">アーカイブ</h3>
          <ul class="blog-aside__menu">
            <li class="blog-aside__menu-item">
              <details class="blog-aside__details is-datails">
                <summary class="blog-aside__summary is-summary">
                  2023年
                </summary>
                <ul class="blog-aside__archive-menu">
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 12月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 11月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 10月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 09月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 08月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 07月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 06月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 05月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 04月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 03月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 02月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2023年 01月</a>
                  </li>
                </ul>
              </details>
            </li>

            <li class="blog-aside__menu-item">
              <details class="blog-aside__details">
                <summary class="blog-aside__summary">
                  2022年
                </summary>
                <ul class="blog-aside__archive-menu">
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 12月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 11月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 10月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 09月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 08月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 07月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 06月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 05月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 04月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 03月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 02月</a>
                  </li>
                  <li class="blog-aside__archive-item">
                    <a class="blog-aside__archive-link" href="">2022年 01月</a>
                  </li>
                </ul>
              </details>
            </li>
          </ul>
        </section>

        <!-- ##### タグ ##### -->
        <section class="blog-aside__box">
          <h3 class="blog-aside__title">タグ</h3>
          <ul class="tag-list">
            <li class="tag-list__item">
              <a class="tag-list__link" href="">コーヒー</a>
            </li>
            <li class="tag-list__item">
              <a class="tag-list__link" href="">料理</a>
            </li>
            <li class="tag-list__item">
              <a class="tag-list__link" href="">御岳</a>
            </li>
          </ul>
        </section>
      </aside>
    </div>

    <!-- ------------------------------------------------------------------------------- -->


    <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
    <?php get_footer(); ?>