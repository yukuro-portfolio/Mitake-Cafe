<!-- ⬇︎ ######################## head要素 読み込み ######################## ⬇︎ -->
<?php get_template_part('/parts/head'); ?>

<div class="container">

  <!-- ⬇︎ ######################## ヘッダー 読み込み ######################## ⬇︎ -->
  <?php get_header(); ?>

  <div class="container__wrapper">

    <!-- ⬇︎ ######################## ビジュアル画像 Start ######################## ⬇︎ -->
    <div class="visual-capture visual-capture--mitake">
      <h1 class="visual-heading visual-heading--page">
        <span class="visual-heading__border"></span>
        <div class="visual-heading__inner">
          <span class="visual-heading__main">Mitake</span>
          <span class="visual-heading__sub">御岳</span>
        </div>
      </h1>
    </div>

    <!-- ⬆︎ ######################## ビジュアル画像 End ######################## ⬆︎ -->

    <!-- ------------------------------------------------------------------------------- -->


    <div class="contents">

      <!-- ⬇︎ ######################## 御岳渓谷 Start ######################## ⬇︎ -->
      <section class="mitake-contents">
        <h2 class="contents-title">
          <span class="contents-title__main">Mitake Valley</span>
          <span class="contents-title__sub">御岳渓谷</span>
        </h2>
        <div class="desc" data-aos="fade">
          <p class="desc__text">
            御岳渓谷遊歩道はJR軍畑駅から始まり、御嶽駅と川井駅の間まで整備されている遊歩道です。<br>
            多摩川の清流をはじめ、大きな岩場や豊かな樹木、小橋などの風景を楽しむことができます。<br>
            道沿いには、玉堂美術館、澤乃井 小沢酒造があり、ハイキングのついでに立ち寄ることができるスポットも多くあります。<br>
            四季折々の御岳渓谷の景色をご堪能ください。
          </p>
        </div>

        <div class="tab__panel-gallery" data-aos="fade">
          <!-- ===== タブメニュー Start ===== -->
          <ul class="tab">
            <li class="tab__item js-tab-switch is-active" data-tab="is-spring">
              春 Spring
            </li>
            <li class="tab__item js-tab-switch" data-tab="is-summer">
              夏 Summer
            </li>
            <li class="tab__item js-tab-switch" data-tab="is-autumn">
              秋 Autumn
            </li>
            <li class="tab__item js-tab-switch" data-tab="is-winter">
              冬 Winter
            </li>
          </ul>
          <!-- ===== タブメニュー End ===== -->

          <!--タブを切り替えて表示するコンテンツ-->
          <div class="mitake-valley">

            <!-- ===== 春の御岳 Start ===== -->
            <figure class="mitake-valley__figure tab__panel js-tab-cts is-active" data-tab="is-spring">
              <img class="mitake-valley__img" src="/images/Mitake_img/img_mitake-spring.jpg" alt="春の御岳渓谷">
              <figcaption class="mitake-valley__caption">
                春は桜が沿道を彩ります
              </figcaption>
            </figure>
            <!-- ===== 春の御岳 End ===== -->

            <!-- ===== 夏の御岳 Start ===== -->
            <figure class="mitake-valley__figure tab__panel js-tab-cts" data-tab="is-summer">
              <img class="mitake-valley__img" src="/images/Mitake_img/img_mitake-summer.jpg" alt="夏の御岳渓谷">
              <figcaption class="mitake-valley__caption">
                夏は新縁とアウトドアで賑わいます
              </figcaption>
            </figure>
            <!-- ===== 夏の御岳 End ===== -->

            <!-- ===== 秋の御岳 Start ===== -->
            <figure class="mitake-valley__figure tab__panel js-tab-cts" data-tab="is-autumn">
              <img class="mitake-valley__img" src="/images/Mitake_img/img_mitake-autumn.jpg" alt="秋の御岳渓谷">
              <figcaption class="mitake-valley__caption">
                秋は美しい紅葉とライトアップが魅力です
              </figcaption>
            </figure>
            <!-- ===== 秋の御岳 End ===== -->

            <!-- ===== 冬の御岳 Start ===== -->
            <figure class="mitake-valley__figure tab__panel js-tab-cts" data-tab="is-winter">
              <img class="mitake-valley__img" src="/images/Mitake_img/img_mitake-winter.jpg" alt="冬の御岳渓谷">
              <figcaption class="mitake-valley__caption">
                冬は木の葉が散り、広々とした自然の空間が広がります
              </figcaption>
            </figure>
            <!-- ===== 冬の御岳 End ===== -->

          </div>
        </div>
      </section>
      <!-- ⬆︎ ######################## 御岳渓谷 End ######################## ⬆︎ -->

      <!-- ------------------------------------------------------------------------------- -->

      <!-- ⬇︎ ######################## 御岳山 Start ######################## ⬇︎ -->
      <section class="mitake-contents">
        <h2 class="contents-title">
          <span class="contents-title__main">Mt.Mitake</span>
          <span class="contents-title__sub">御岳山</span>
        </h2>

        <div class="desc" data-aos="fade">
          <p class="desc__text">
            御岳山は古くから霊峰として崇められた信仰の山です。<br>
            都心からのアクセスもよく、ケーブルカーを使えば日帰りで気軽に散策することができます。<br><br>
            御岳山全体がパワースポットとして知られ周辺には、ロックガーデンや七代の滝など多くの景勝地をはじめ、知恵の神様・櫛真智命(くしまちのみこと)を祀る「武蔵御嶽神社」があります。<br>
            おすすめのハイキングコースのご紹介です。
          </p>
        </div>

        <!-- ===== 御岳登山鉄道 ケーブルカー Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            御岳登山鉄道 ケーブルカー
          </h3>

          <div class="mitake-col">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_mitake-cablecar.jpg" alt="御岳登山鉄道 ケーブルカー">
            </figure>


            <div class="desc" data-aos="fade">
              <p class="desc__text desc__text--bold">バス経由でケーブルカーご利用の場合</p>
              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">西東京バス</p>
                  <p class="desc-card__text">御嶽駅バス停</p>
                  <p class="desc-card__text desc-card__text--f-small">大人片道：¥290</p>
                </div>

                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">御岳登山鉄道</p>
                  <p class="desc-card__text">ケーブルカー滝本駅</p>
                  <p class="desc-card__text desc-card__text--f-small">片道：¥600</p>
                </div>

                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">御岳登山鉄道</p>
                  <p class="desc-card__text">御岳山駅</p>
                  <p class="desc-card__text desc-card__text--f-small">往復：￥1,130</p>
                </div>
              </div>

              <div class="text-link">
                <a class="text-link__pdf" href="http://www.nisitokyobus.co.jp/wp/wp-content/uploads/2020/03/20200314_hiking_okutama.pdf" target="_blank">
                  バス時刻表はこちら
                </a>
              </div>

              <div class="text-link">
                <a class="text-link__external-link" href="https://www.mitaketozan.co.jp/timetable.html" target="_blank">
                  ケーブルカー時刻表はこちら
                </a>
              </div>

              <p class="desc__text">
                車でお越しの場合は、有料駐車場をご利用ください。<br>
                ケーブルカー滝本駅から乗車し、乗車時間約6分ほどで「御岳山駅」に到着します。
              </p>
            </div>
          </div>
        </section>

        <!-- ===== 御岳登山鉄道 ケーブルカー End ===== -->

        <!-- ===== 武蔵御嶽神社 Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            武蔵御嶽神社
          </h3>

          <div class="mitake-col mitake-col--row-reverse">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_mitake-shrine.jpg" alt="武蔵御嶽神社">
            </figure>

            <div class="desc" data-aos="fade">
              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">御岳登山鉄道</p>
                  <p class="desc-card__text">ケーブルカー御岳山駅</p>
                </div>

                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">徒歩 約25分</p>
                  <p class="desc-card__text">武蔵御嶽神社</p>
                </div>
              </div>

              <p class="desc__text">
                「御岳山駅」から徒歩約25分<br><br>
                古くから霊山として信仰されてきた御岳山の山頂929mにシンボルとして建立されている武蔵御嶽神社<br><br>
                宝物殿には、平安時代後期に遡る貴重な国宝の「赤糸威鎧 兜・大袖付」や鎌倉時代に作られた「円文螺鈿鏡鞍 一具」が奉納されており、国宝以外にも重要文化財の貴重な物品が展示されています。
              </p>
            </div>

          </div>
        </section>
        <!-- ===== 武蔵御嶽神社 End ===== -->

        <!-- ===== 長尾平 Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            長尾平
          </h3>

          <div class="mitake-col">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_nagaodaira.jpg" alt="長尾平">
            </figure>

            <div class="desc" data-aos="fade">
              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--single-text">武蔵御嶽神社</p>
                </div>
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">徒歩 約5分</p>
                  <p class="desc-card__text">長尾平</p>
                </div>
              </div>

              <p class="desc__text">
                武蔵御嶽神社から歩いて約5分で長尾平に到着します。<br><br>
                見晴らしがよく、広く開けた草原ですので、お弁当を食べながらゆっくりと休憩できます。<br>
                天気が良く空気が澄んでいるときには、遠く横浜まで遠望することができます。
              </p>
            </div>
          </div>
        </section>
        <!-- ===== 長尾平 End ===== -->

        <!-- ===== 七代の滝 Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            七代の滝
          </h3>

          <div class="mitake-col  mitake-col--row-reverse">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_nanadai-waterfall.jpg" alt="七代の滝">
            </figure>

            <div class="desc" data-aos="fade">
              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--single-text">長尾平</p>
                </div>
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">徒歩 約20分</p>
                  <p class="desc-card__text">七代の滝</p>
                </div>
              </div>

              <p class="desc__text">
                長尾平から徒歩 約20分 七代の滝に到着します。<br><br>
                大小7段（８段説あり）からなる合計落差50mの滝です。<br>
                滝の上には、天狗が鎮座する天狗岩があります。<br>
                夏場はマイナスイオンで涼しく、恋愛運上昇のパワースポットとして知られています。
              </p>
            </div>

          </div>
        </section>
        <!-- ===== 七代の滝 End ===== -->

        <!-- ===== ロックガーデン（岩石園） Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            ロックガーデン（岩石園）
          </h3>

          <div class="mitake-col">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_lockgarden.jpg" alt="ロックガーデン（岩石園）">
            </figure>

            <div class="desc" data-aos="fade">
              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--single-text">七代の滝</p>
                </div>
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">徒歩 約35分</p>
                  <p class="desc-card__text">ロックガーデン （岩石園）</p>
                </div>
              </div>

              <p class="desc__text">
                七代の滝から徒歩 約35分ロックガーデンに到着します。<br><br>
                苔むした大小さまざまな奇岩が重なった中を清流が流れているとても幻想的な世界です。<br>
                豊かな森林と清流で夏も涼しく、歩いて20分ほど進むと休憩所があります。
              </p>
            </div>

          </div>
        </section>
        <!-- ===== ロックガーデン（岩石園） End ===== -->

        <!-- ===== 綾広の滝 Start ===== -->
        <section class="mitake-contents__box" data-aos="fade">
          <h3 class="title-label">
            綾広の滝
          </h3>

          <div class="mitake-col  mitake-col--row-reverse">
            <figure class="mitake-col__figure">
              <img class="mitake-col__img" src="/images/Mitake_img/img_ayahiro-waterfall.jpg" alt="綾広の滝">
            </figure>

            <div class="desc" data-aos="fade">

              <div class="desc-card">
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--single-text">ロックガーデン （岩石園）</p>
                </div>
                <div class="desc-card__item">
                  <p class="desc-card__text desc-card__text--f-small">徒歩 約10分</p>
                  <p class="desc-card__text">綾広の滝</p>
                </div>
              </div>

              <p class="desc__text">
                ロックガーデンの休憩所から少し進むと到着します。<br><br>
                落差10mほど滝壺の深さが1.2mの滝で、武蔵御嶽神社の滝行にも現在も使用されており「修行みさぎの滝」とも呼ばれております。<br>
                鳥居と滝が融合した神秘的なスポットです。
              </p>

            </div>

          </div>
        </section>
        <!-- ===== 綾広の滝 End ===== -->

      </section>
      <!-- ⬆︎ ######################## 御岳山 End ######################## ⬆︎ -->
    </div>
  </div>


  <!-- ------------------------------------------------------------------------------- -->

 <!-- ⬇︎ ######################## フッター 読み込み ######################## ⬇︎ -->
 <?php get_footer(); ?>