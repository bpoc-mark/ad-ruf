<?php get_header();

$imagedir = get_template_directory_uri();
?>
<div class="page__content contact-frm">
    <section class="sect_1">
        <div class="l-wrap">
            <div class="c-contact-box">
                <div class="p1">
                    <p class="txt">電話でのお問い合わせはこちら</p>
                </div>
                <div class="p2">
                    <p class="txt"><a href="#"><img src="<?= get_template_directory_uri(); ?>/release/image/contact/contact_icon.png" alt="Living Room">&nbsp;0120-173-602</a></p>
                </div>
                <div class="p3">
                    <p class="txt">TEL：03-3211-0123（代表）<br>
                        受付時間：9：00～18：00（土日祝除く）</p>
                </div>
            </div>

            <div class="contact-frm__bg-white">
                <div class="contact-frm__bg-txt">
                    <h2 class="contact-frm__bg-txt--ttl">メールフォームによるお問い合わせ</h2>
                </div>
                <p class="contact-frm__desc">下記フォームにお問い合わせ内容をご記入の上、確認ボタンをクリックして下さい。<br>
                    ※は必須項目となります。<br>
                    お問い合わせ状況やご質問内容によって、返信に多少のお時間を頂く場合がございます。あらかじめご了承ください。</p>

                <form action="/action_page.php">
                    <div class="contact-frm__req">
                        <p class="contact-frm__req--txt">※ は必須項目です</p>
                    </div>

                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">お名前※</label>
                        </div>
                        <div>
                            <label class="label-txt" for="lname">姓</label>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)山田">
                        </div>
                        <div>
                            <label class="label-txt" for="lname">名</label>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)花子">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">フリガナ※</label>
                        </div>
                        <div>
                            <label class="label-txt" for="lname">セイ</label>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                        </div>
                        <div>
                            <label class="label-txt" for="lname">メイ</label>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)ハナコ">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">フリガナ※</label>
                        </div>
                        <div>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">フリガナ※</label>
                        </div>
                        <div>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div class="bg-h">
                            <label for="fname">メールアドレス※</label>
                        </div>
                        <div>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">お名前※</label>
                        </div>
                        <div>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)山田">
                            </small>
                            <span>-</span>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)花子">
                            </small>
                            <span>-</span>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)花子">
                            </small>
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">お名前※</label>
                        </div>
                        <div>
                            <small><label for="fname">フリガナ※</label></small>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)山田">
                            </small>
                            <span>-</span>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)花子">
                            </small>
                            <span></span>
                            <small>
                                <p>住所入力</p>
                            </small>
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div class="bg-h">
                            <label for="fname">メールアドレス※</label>
                        </div>
                        <div>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <select id="cars" name="cars">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </small>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                            <small>
                                <label for="fname">フリガナ※</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)ヤマダ">
                            </small>
                        </div>
                    </div>




                    <!-- <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?> -->
                </form>






            </div>





            <div class="c-pageTop">
                <a href="#">
                    <p class="txt">PAGE TOP</p>
                </a>
            </div>

        </div>
    </section>
</div>
<?php get_footer(); ?>