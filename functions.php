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
add_action( 'admin_print_footer_scripts', 'limit_category_select' );
function limit_category_select() {
?>
<script type="text/javascript">
  jQuery(function($) {
    // 投稿画面のカテゴリー選択を制限
    var cat_checklist = $('.categorychecklist input[type=checkbox]');
    cat_checklist.click( function() {
        $(this).parents('.categorychecklist').find('input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
    });
    // クイック編集のカテゴリー選択を制限
    var quickedit_cat_checklist = $('.cat_construction input[type=checkbox]');
    quickedit_cat_checklist.click( function() {
        $(this).parents('.cat_construction').find('input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
    });
    $('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
  });
</script>
<?php
}

//フッターにスクリプト表示(contactform7 finishpage)
// function add_footer_script() {
//     if(is_page('contact')){
//         echo '<script type="text/javascript">
//         document.addEventListener( \'wpcf7mailsent\', function( event ) {
//             location = \'/cms/contact/finish/\';
//         }, false );
//       </script>';
// 	}
// }
// add_action( 'wp_print_footer_scripts', 'add_footer_script', 100 );
?>
