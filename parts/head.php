 <!-- =================================================== 
  head.php
  head要素の定義
================================================== -->
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>

 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TOP | Cafe Mitake</title>
   <meta name="description" content="多摩川が生み出した景勝地「御岳渓谷」にあるカフェ。季節限定のスイーツ、地元の食材を使ったこだわりの料理、コロンビア産の豆を焙煎したコーヒーなどテラス席で四季を感じながら至福のひとときをお過ごしください。" />
   <meta name="robots" content="noindex,nofollow" /> <!--検索エンジンに掲載しない場合は記載-->

   <!-- ブラウザによる電話番号・メールの自動リンクを無効化 -->
   <!-- <meta name="format-detection" content="email=no,telephone=no,address=no" /> -->

   <!-- ##### ⬇︎ OGPタグ ⬇︎ ##### -->
   <meta property="og:url" content="ページのURL" />
   <meta property="og:title" content="ページのタイトル" />
   <meta property="og:type" content="ページのタイプ">
   <meta property="og:description" content="記事の抜粋" />
   <meta property="og:image" content="画像のURL" />
   <meta name="twitter:card" content="カード種類" />
   <meta name="twitter:site" content="@Twitterユーザー名" />
   <meta property="og:site_name" content="サイト名" />
   <meta property="og:locale" content="ja_JP" />
   <!-- ##### ⬆︎ OGPタグ ⬆︎ ##### -->

   <!-- ##### ⬇︎ サイトアイコン ⬇︎ ##### -->
   <link rel="icon" href="/images/icon/ico_favicon.svg" sizes="16x16" type="image/svg" />
   <!-- ##### ⬆︎ サイトアイコン ⬆︎ ##### -->

   <!-- ⬇︎ ===== slick.css slickカルーセル読み込み ===== ⬇︎ -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

   <!-- ⬇︎ ===== フェードインアニメーション AOSの読み込み ===== ⬇︎ -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 </head>
 <?php wp_head(); ?>

 <body>