<?php get_header();

$imagedir = get_template_directory_uri();

?>
<div class="page__content acc">
    <div class="acc__section_1">
        <!-- //CLIP -->
        <div class="clip-top"></div>
        <div class="l-wrap">
            <img class="bg_1" src="<?php echo $imagedir ?>/release/image/page/case/bg_1.png" alt="">
            <p class="acc__ttl">Access</p>
            <h1 class="acc__title">丸の内ルーフのアクセス情報</h1>
            <p class="acc__sub">東京都の丸の内に構える株式会社ルーフ。<br> 丸の内ルーフまでアクセス情報や最寄駅からの道順をご紹介いたします。</p>
        </div>

        <div class="acc__main-content">
            <div class="l-wrap">
                <div class="acc__main-content--row">

                    <div class="col col_left">
                        <div class="infos">
                            <div class="info">
                                <div class="info_left il01">
                                    <div>
                                        <p>住所</p>
                                    </div>

                                </div>

                                <div class="info_right ir01">
                                    <p>〒100-6334　東京都千代田区丸の内2-4-1<br>
                                        丸の内ビルディング34F 3401区<br>
                                        THE PREMIER FLOOR</p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left il02">
                                    <p>最寄り駅</p>
                                </div>

                                <div class="info_right ir02">
                                    <p>JR 東京駅…丸の内南口徒歩1分<br>
                                        【東京メトロ 丸の内線】<br>
                                        東京駅より直結<br>
                                        【東京メトロ 千代田線】<br>
                                        二重橋駅より直結</p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left il03">
                                    <p>営業時間</p>
                                </div>

                                <div class="info_right ir03">
                                    <p>受付時間9：00～18：00</p>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left il03">
                                    <p>定休日</p>
                                </div>

                                <div class="info_right ir03">
                                    <p>土日祝</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col_right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3240.8300197907433!2d139.7615817!3d35.6811872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf9e8d6b29b%3A0xed2d507ceb26bf31!2sMarunouchi%20Building%2C%2034f%2C%202-ch%C5%8Dme-4-1%20Marunouchi%2C%20Chiyoda%20City%2C%20Tokyo%20100-6390%2C%20Japan!5e0!3m2!1sja!2sph!4v1635498881295!5m2!1sja!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="section_3">
        <div class="l-wrap">
            <img class="bg_1" src="<?php echo $imagedir ?>/release/image/page/case/bg_3.png" alt="">
            <div class="c-case03__txt">
                <p class="c-case03__txt__ttl acc_ttl">Access</p>
                <p class="c-case03__txt__sub acc_sub">東京駅から丸の内ルーフまでのアクセス</p>
            </div>
            <img src="<?php echo $imagedir ?>/release/image/page/case/bg_2.png" alt="">


            <div class="l-wrap u-d-f u-d-f-jcc u-mt-60 pp--fd">
                <div class="c-buttonCase pp--btn">
                    <p class="txt">会社概要</p>
                    <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                </div>
                <div class="c-buttonCase pp--btn">
                    <p class="txt">丸の内RUFについて</p>
                    <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>