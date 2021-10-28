<?php get_header();

$imagedir = get_template_directory_uri();
?>
<div class="page__content contact">
    <section class="sect_1">
        <div class="l-wrap">
            <div class="contact__inner">
                <p class="contact__inner--txt">この度はお問い合わせいただきまして<br>
                    ありがとうございました。</p>
                <p class="contact__inner--desc">メールの場合ご連絡が遅れる場合がございます。<br>
                    お急ぎの方はお電話<br>
                    （0120-173-602）にてお問合せください。<br>
                    受付時間：9:00-18:00(土日祝覗く)</p>
            </div>
            <div class="contact__box">
                <div class="contact__box--p1">
                    <p class="contact_box txt">電話でのお問い合わせはこちら</p>
                </div>
                <div class="contact__box--p2">
                    <p class="contact_box txt"><a href="#"><img src="<?= get_template_directory_uri(); ?>/release/image/contact/contact_icon.png" alt="Living Room">&nbsp;0120-173-602</a></p>
                </div>
                <div class="contact__box--p3">
                    <p class="contact_box txt">TEL：03-3211-0123（代表）<br>
                        受付時間：9：00～18：00（土日祝除く）</p>
                </div>
            </div>
            <div class="c-buttonCase">
                <p class="txt">TOPに戻る</p>
                <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
            </div>

            <div class="c-pageTop">
                <a href="#"><p class="txt">PAGE TOP</p></a>
            </div>

        </div>
    </section>
</div>
<?php get_footer(); ?>