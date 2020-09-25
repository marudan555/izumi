<footer class="area_footer">
    <div class="wrap-sp-navi">
        <p id="page-top"><a href="#head"></a></p>
    </div>
    <div class="area_pagetop">
        <a href="#head" class="btn_pagetop">PAGE TOP</a>
    </div>
    <div class="contarea sp_contarea">
        <div class="area_footerinfo">
            <div class="footer_cinfo">
                <p class="logo prg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="泉パークタウンサービス"></p>
                <a class="btn_contact prg" href="<?php echo home_url("/"); ?>contact/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_contact.svg" alt="メールでのお問い合わせ"></a>
                <address class="telnum">
                    <a href="tel:0120-48-7722"><img src="<?php echo get_template_directory_uri(); ?>/common/images/tel.svg" alt="0120-48-7722 営業時間 10:00～17:30"></a><br class="pc_only">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/fax.svg" alt="FAX:022-377-8605">
                </address>
                <p class="address"><img src="<?php echo get_template_directory_uri(); ?>/common/images/address.svg" alt="〒981-3203 宮城県仙台市泉区高森7丁目2番 ショッピングガーデン・キャラウェイ1F"></p>
            </div>
            <nav class="footer_navi">
                <ul class="navi_list">
                    <li><a href="<?php echo home_url("/"); ?>">トップページ</a></li>
					<li>
                        <a href="<?php echo home_url("/"); ?>business/">事業内容</a>
                        <ul class="subcategory">
							<li><a href="<?php echo home_url("/"); ?>estate/">不動産</a></li>
                            <li><a href="<?php echo home_url("/"); ?>renovation/">新築・リフォーム・リノベーション</a></li>
                            <li><a href="<?php echo home_url("/"); ?>garden/">お庭づくり・メンテンナンス</a></li>
							<li><a href="<?php echo home_url("/"); ?>facility/">施設・緑地のメンテナンス</a></li>
                            <li><a href="<?php echo home_url("/"); ?>construction/">施工例</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo home_url("/"); ?>company/">企業情報</a></li>

                </ul>
                <ul class="navi_list">
					<li><a href="<?php echo home_url("/"); ?>life/">泉パークタウンについて</a></li>
                    <li>
                        <a href="<?php echo home_url("/"); ?>adopt/">採用情報</a>
                        <ul class="subcategory">
                            <li><a href="<?php echo home_url("/"); ?>adopt/#sec_02">社員インタビュー</a></li>
                            <li><a href="<?php echo home_url("/"); ?>adopt/#sec_01">募集要項</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo home_url("/"); ?>news/">お知らせ</a></li>
                    <li><a href="<?php echo home_url("/"); ?>access/">アクセス</a></li>
					<li><a href="<?php echo home_url("/"); ?>contact/">お問い合わせ</a></li>
                    <li><a href="<?php echo home_url("/"); ?>privacy/">個人情報保護方針</a></li>
                </ul>
            </nav>
        </div>
        <div class="area_copy"><small>Copyright &copy; IZUMI PARKTOWN SERVICE LTD. <br class="sp_only">All rights reserved.</small></div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/set.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.matchHeight.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/slick.js"></script>
<?php if(is_page('47')): ?>
<script>
    $('.wrap-img').slick({
        dots: false,
        infinite: true,
        autoplaySpeed:2800,
        speed: 800,
        fade: true,
        autoplay:true,
        arrows:false,
    });
</script>
<?php endif; ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<?php if ( is_page('renovation') ): ?>
<script>
$(function() {
	$('.tab li').click(function() {
		var index = $('.tab li').index(this);
		$('.content li').css('display','none');
		$('.content li').eq(index).css('display','block');
		$('.tab li').removeClass('select');
		$(this).addClass('select');
	});
});
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
