<?php get_header();

$imagedir = get_template_directory_uri();
?>
<div class="page__content contact-frm">
    <div class="c-banner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">株式会社ルーフ</a>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>お問い合わせ・<br class="br-sp">ご相談</p>
                <p>Contact Us</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span> お 問 い 合 わ せ <span>＞</span>確 認 画 面</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <section class="sect_1">
        <div class="l-wrap">
            <div class="c-contact-box">
                <div class="p1">
                    <p class="txt">電話でのお問い合わせはこちら</p>
                </div>
                <div class="p2">
                    <p class="txt"><a><img src="<?= get_template_directory_uri(); ?>/release/image/page/contact/contact_icon.png" alt="Contact"><span>&nbsp;0120-173-602</span></a></p>
                </div>
                <div class="p3">
                    <p class="txt">TEL: 03-3211-0123（代表）<br>
                        受付時間: 9: 00～18: 00（土日祝除く）</p>
                </div>
            </div>

            <div class="contact-frm__bg-white">
                <div class="contact-frm__bg-txt">
                    <h2 class="contact-frm__bg-txt--ttl">メールフォームによるお問い合わせ</h2>
                </div>
                <p class="contact-frm__desc">下記フォームにお問い合わせ内容をご記入の上、<br class="u-d-n-pc">確認ボタンをクリックして下さい。<br>
                    ※は必須項目となります。<br>
                    お問い合わせ状況やご質問内容によって、<br class="u-d-n-pc">返信に多少のお時間を頂く場合がございます。<br class="u-d-n-pc">あらかじめご了承ください。</p>

                <div class="form">
                    <div class="contact-frm__req">
                        <p class="contact-frm__req--txt">※ は必須項目です</p>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>

                    <!-- 
                    <form action="">
                        <div class="btm-txt">
                            <p>「 <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')) ?>">プライバシーポリシー</a>」をご確認いただき、<br class="br-sp">同意のうえお問い合わせください。</p>

                            <div class="chck">
                                <input type="checkbox" id="" name="" value="">
                                <label for="">プライバシーポリシーに同意する</label>
                            </div>

                            <div class="btn-confirm">
                                <a class="c-buttonCase btn" href="">
                                    <p class="txt">内容を確認する</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact/btn_arrow_white.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </form> -->
                </div>

            </div>
            <div class="c-pageTop">
                <a href="#page-top">
                    <p class="txt">PAGE TOP</p>
                </a>
            </div>
    </section>
</div>



<?php get_footer(); ?>