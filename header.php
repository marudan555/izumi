<html <?php language_attributes(); ?> class="no-js no-svg" id="head">
    <head>
        <?php include("parts/meta.php"); ?>
        <title></title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3999910-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-3999910-3');
        </script>
        <?php wp_head(); ?>
    </head>
    <body<?php if(is_page()): ?> class="<?php echo esc_attr($post->post_name); ?>" <?php elseif(is_single()) :?> id="single"<?php endif ;?> <?php body_class(); ?>>
        <header id="header">
        <div class="area_header contarea sp_contarea">
            <h1 class="header_logo"><a href="<?php echo home_url("/"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="泉パークタウンサービス" width="380"></a></h1>
            <button class="btn_menu sp_only" id="btn_menu_open" data-target="modalmenu"><span>MENU</span></button>
            <div class="area_header_nav" id="modalmenu">
                <div class="al_right">
                    <button class="btn_menu_close sp_only" id="btn_menu_close"><span>MENU</span></button>
                </div>
                <nav class="header_nav">
                    <ul class="nav1">
                        <li><a href="<?php echo home_url("/"); ?>business/">事業内容</a></li>
                        <li><a href="<?php echo home_url("/"); ?>company/">企業情報・健康経営の取組</a></li>
						<li><a href="<?php echo home_url("/"); ?>sdgs/">SDGsの取組</a></li>
                        <li><a href="<?php echo home_url("/"); ?>life/">泉パークタウンについて</a></li>
                        <li><a href="<?php echo home_url("/"); ?>access/">アクセス</a></li>
                        <li><a href="<?php echo home_url("/"); ?>contact/">お問合せ</a></li>
                    </ul>
                    <ul class="nav2">
                        <li class="realestate"><a href="<?php echo home_url("/"); ?>estate/">不動産</a></li>
                        <li class="build"><a href="<?php echo home_url("/"); ?>renovation/">新築・リフォーム・リノベーション</a></li>
                        <li class="garden"><a href="<?php echo home_url("/"); ?>garden/">お庭づくり・メンテナンス</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
