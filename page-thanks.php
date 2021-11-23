<?php get_header();

$imagedir = get_template_directory_uri();
?>
<div class="page__content contact-thks contact-frm">
    <div class="c-banner">
        <p class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">丸の内 株式会社ルーフ</p>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>完了画面</p>
                <p>Contact Us</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span>お 問 い 合 わ せ・ご 相 談<span>＞</span>確 認 画 面<span>＞</span>完 了 画 面</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <section class="sect_1">
        <div class="l-wrap">
            <div class="contact-thks__inner">
                <img class="contact-thks__inner--bg-line" src="<?php echo $imagedir ?>/release/image/page/contact/bg_line.png" alt="">
                <p class="contact-thks__inner--txt">この度はお問い合わせ<br class="br-sp">いただきまして<br>
                    ありがとうございました。</p>
                <p class="contact-thks__inner--desc">メールの場合ご連絡が遅れる場合がございます。<br>
                    お急ぎの方はお電話<br>
                    （0120-173-602）にてお問合せください。<br>
                    受付時間：9:00-18:00(土日祝覗く)</p>
            </div>
            <div class="c-contact-box">
                <div class="p1">
                    <p class="txt">電話でのお問い合わせはこちら</p>
                </div>
                <div class="p2">
                    <p class="txt"><a href="#"><img src="<?= get_template_directory_uri(); ?>/release/image/page/contact/contact_icon.png" alt="Living Room">&nbsp;0120-173-602</a></p>
                </div>
                <div class="p3">
                    <p class="txt">TEL：03-3211-0123（代表）<br>
                        受付時間：9：00～18：00（土日祝除く）</p>
                </div>
            </div>
            <a class="c-buttonCase" href="#">
                <p class="txt">TOPに戻る</p>
                <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
            </a>

            <div class="c-pageTop">
                <a href="#">
                    <p class="txt">PAGE TOP</p>
                </a>
            </div>

        </div>
    </section>
</div>
<?php get_footer(); ?>