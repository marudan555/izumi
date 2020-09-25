<?php

//管理画面の「Wordpressのご利用ありがとうございます。」の文言を削除します。
add_filter('admin_footer_text', '__return_empty_string');

function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';

    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );

/**
 * ショートコード
 */
function shortcode_templateurl() {
    return get_template_directory_uri();
}
add_shortcode("template_url", "shortcode_templateurl");

function shortcode_homeurl() {
    return home_url();
}
add_shortcode("home_url", "shortcode_homeurl");

function shortcode_layout_btn() {
    ob_start();
    get_template_part("./layout_btn");
    return ob_get_clean();
}
add_shortcode("btn-nav", "shortcode_layout_btn");

/**
 * ショートコード
 */

//投稿画面編集用css
add_editor_style('editor-style.css');

//絵文字削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}



// 表示オプションとヘルプ非表示
function my_admin_head(){
 echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
 echo '<style type="text/css">#screen-options-link-wrap{display:none;}</style>';
 }
add_action('admin_head', 'my_admin_head');


//左メニューバーの項目を削除
function remove_admin_menus() {
   global $menu;
   global $submenu;
	unset($menu[2]);  // ダッシュボード
	unset($menu[5]);  // ダッシュボード
	unset($menu[80]); // 設定
	unset($menu[60]); // テーマ
    unset($menu[65]); // プラグイン
    unset($menu[70]); // プロフィール
    unset($menu[75]); // ツール
	remove_menu_page('edit-comments.php'); // コメント
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');//投稿タグ

    // level8（編集者）以下のユーザの場合
    if (!current_user_can('level_8')) {
        // 「Contact Form 7」を非表示にする場合
        remove_menu_page('wpcf7');
	   unset($menu[75]);
    }
}
// add_action('admin_menu', 'remove_admin_menus');


//管理バーの項目を削除
function remove_bar_menus( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu( 'wp-logo' );      // ロゴ
    $wp_admin_bar->remove_menu( 'view-site' );    // サイト名 -> サイトを表示
    $wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 -> ダッシュボード (公開側)
    $wp_admin_bar->remove_menu( 'themes' );       // サイト名 -> テーマ (公開側)
    $wp_admin_bar->remove_menu( 'customize' );    // サイト名 -> カスタマイズ (公開側)
    $wp_admin_bar->remove_menu( 'comments' );     // コメント
    $wp_admin_bar->remove_menu( 'updates' );      // 更新
    $wp_admin_bar->remove_menu( 'new-content' );  // 新規
    $wp_admin_bar->remove_menu( 'edit-profile' ); // マイアカウント -> プロフィール編集
    $wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
}
// add_action('admin_bar_menu', 'remove_bar_menus', 201);

//記事一覧から消す
function custom_columns ($columns) {
    unset($columns['tags']); // タグ、カスタムフィールド
    unset($columns['comments']); // コメント
    return $columns;
}
add_filter('manage_posts_columns', 'custom_columns');

function my_admin_style() {
  echo '<style>
 #ed_toolbar{display:none !important;}
 .media-menu .media-menu-item:nth-child(2) , .media-menu .media-menu-item:nth-child(3) , .media-menu .media-menu-item:nth-child(4){display:none !important;}
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');

//

//サーチページ以外だったら終了
function custom_search($search, $wp_query) {

    if (!$wp_query->is_search) return;
    $search .= " AND post_type = 'offer'";//投稿記事のみ検索
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);

function wpcf7_validate_spam_message( $result, $tag ) {
	$value = str_replace(array(PHP_EOL,' '), '', esc_attr($_POST['text']));
	if (!empty($value)) {
	  if (preg_match('/^[!-~]+$/', $value)) {
		$result['valid'] = false;
		$result['reason'] = array('text' => '日本語を1文字以上入力してください');
	  }
	}
	return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );


/*
 * 投稿、クイック編集でのカテゴリー選択を1つに制限処理
 */
 function category_radio() {
 ?>
 <script>
  jQuery(function($) {
    $('.categorychecklist input[type=checkbox]').each(function() {
    $(this).replaceWith($(this).clone().attr('type', 'radio'));
  });
  $('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
});
</script>
 <?php
 }
 add_action( 'admin_head-post-new.php', 'category_radio' );
add_action( 'admin_head-post.php', 'category_radio' );

/*
 * 固定ページでGutenberg無効
 */
add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  return $use_block_editor;
}

?>
