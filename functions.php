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

    // Googleフォントの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap', array(), null);

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
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/* --------------------------------------------------
 カスタムヘッダーの有効化
-------------------------------------------------- */
add_theme_support('custom-header', array(
    'width'         => 1920, //動画の幅
    'height'        => 960, //動画の高さ
    'flex-width'    => true,
    'flex-height'   => true,
    'header-text'   => true,
    'video'         => true
));

/* メニューからロゴを出力できるように指定 */
add_action('after_setup_theme', function () {
    add_theme_support('custom-logo');
});

/* --------------------------------------------------
 ナビゲーション
-------------------------------------------------- */
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => ('ヘッダーメニュー'),
            'footer-menu' => ('フッターメニュー'),
            'sns-menu' => ('SNSメニュー'),
        )
    );
}
add_action('init', 'register_my_menus');

/* グローバルメニューのliのid,classを削除 */
add_filter('nav_menu_item_id', 'wp_navtag_remove', 100, 1); //liのidを強制的に削除
add_filter('page_css_class', 'wp_navtag_remove', 100, 1);
function wp_navtag_remove($var)
{
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

function change_title_separator($sep){
	$sep = '|';
	return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

/* --------------------------------------------------
 headタグ内の不要な記述を削除
-------------------------------------------------- */
/* WordPressのバージョン出力を排除する */
remove_action('wp_head', 'wp_generator');

/* JS, CSS要素のバージョン出力を排除する */
function remove_cssjs_ver2($src)
{
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver2', 9999);
add_filter('script_loader_src', 'remove_cssjs_ver2', 9999);

/* テキストエディタの絵文字に対応する為の各種出力を排除する */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* wlwmanifestの出力を排除する */
remove_action('wp_head', 'wlwmanifest_link');

/* 外部ブログツールからの投稿を行う為の出力を排除する */
remove_action('wp_head', 'rsd_link');

/* 短縮URLの出力を排除する */
remove_action('wp_head', 'wp_shortlink_wp_head');

/* DNS Prefetchingの出力を排除する */
remove_action('wp_head', 'wp_resource_hints', 2);

/* RSSフィードの出力を排除する */
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

/* ブロックエディタ（Gutenberg）用CSSの出力を排除する */
function remove_editor_style()
{
    wp_dequeue_style('wp-block-library');
}



/* --------------------------------------------------
 アーカイブページを有効にする
-------------------------------------------------- */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'archive';
        $args['label'] = '投稿';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* --------------------------------------------------
 サイドバーウィジェット
-------------------------------------------------- */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーウィジェット',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
}

/* --------------------------------------------------
 ブログ記事サムネイルサイズ 352 * 210
-------------------------------------------------- */
function twpp_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_image_size('small-thumb', 352, 210, true);
}
add_action('after_setup_theme', 'twpp_setup_theme');

/* --------------------------------------------------
 カスタム投稿 メニュー
-------------------------------------------------- */
function add_custom_post()
{
    register_post_type(
        'menu',
        array(
            'label' => 'Menu',
            'labels' => array(
                'menu_name' => '料理メニュー'
            ),
            'public' => true,
            'query_var' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'menu'),
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'price',
                'excerpt',
            )
        )
    );
    
    register_taxonomy(
        'menu-cat',
        'menu',
        array(
          'label' => '料理カテゴリー',
          'hierarchical' => true,
          'public' => true,
          'show_in_rest' => true,
        )
      );

    register_taxonomy(
        'menu-price',
        'menu',
        array(
          'label' => '値段',
          'hierarchical' => false,
          'public' => true,
          'show_in_rest' => true,
        )
      );
}
add_action('init', 'add_custom_post');


/*	カスタム投稿のパーマリンク設定
-----------------------------------------------------*/
//カスタム投稿タイプのパーマリンクを投稿IDに変更する。
add_filter('post_type_link', 'generateCustomPostLink', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules');

function generateCustomPostLink($link, $post){
 if($post->post_type === 'ownersblog'){
 //投稿IDに書き換えたパーマリンク文字列を返す
  return home_url('/ownersblog/'.$post->ID);
 } else {
  return $link;
 }
}

//投稿IDに書き換えたパーマリンクに対応したクエリルールを追加
function addRewriteRules($rules){
 $new_rule = array(
  'ownersblog/([0-9]+)/?$' => 'index.php?post_type=ownersblog&p=$matches[1]'
 );
 //ルール配列に結合
 return $new_rule + $rules;
}
