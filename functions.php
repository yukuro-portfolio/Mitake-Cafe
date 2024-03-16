<?php
/* ===================================================
function.php
テーマ処理用PHP
==================================================  */

/* --------------------------------------------------
 基本設定
-------------------------------------------------- */
function my_setup()
{
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(768, 400); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array(
    'search-form',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/* --------------------------------------------------
 CSS / JavaScriptの読み込み
-------------------------------------------------- */
function my_script_init()
{
  // wordpress内のJQueryを読み込まない
  wp_deregister_script('jquery');

  // jQueryの読み込み
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', "", "1.0.1", true);
  wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/javascript/common.js', array('jquery'), '1.0.1', true);
  wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/stylesheet/css/style.css', array(), '1.0.1');
  
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* --------------------------------------------------
 SVGファイル有効化
-------------------------------------------------- */
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
add_action('upload_mimes', 'add_file_types_to_uploads');

/* --------------------------------------------------
 カスタムヘッダーの有効化
-------------------------------------------------- */
add_theme_support( 'custom-header', array(
  'width'         => 1920, //動画の幅
  'height'        => 960, //動画の高さ
  'flex-width'    => true,
  'flex-height'   => true,
  'header-text'   => true,
  'video'         => true
) );