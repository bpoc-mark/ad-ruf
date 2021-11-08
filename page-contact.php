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
                            <label for="fname">貴社名※</label>
                        </div>
                        <div>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)株式会社ルーフ">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">部署・役職名</label>
                        </div>
                        <div>
                            <input type="text" id="lname" name="lname" value="" placeholder="ex)営業部">
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div class="bg-h">
                            <label for="fname">メールアドレス※</label>
                        </div>
                        <div>
                            <small>
                                <label for="fname">アドレス</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)yamada@xxxxxxx.net">
                            </small>
                            <small>
                                <label for="fname">確 認 用</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)yamada@xxxxxxx.net">
                            </small>
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">電話番号※</label>
                        </div>
                        <div>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)0120">
                            </small>
                            <span>-</span>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)173">
                            </small>
                            <span>-</span>
                            <small>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)602">
                            </small>
                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">ご住所※</label>
                        </div>
                        <div>
                            <small>
                                <label for="fname">郵便番号</label>
                                <small>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)100">
                                    <span>-</span>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)100">
                                    <a href="">
                                        <p>住所入力</p>
                                    </a>
                                </small>
                            </small>
                            <a href="" class="sp-button">
                                <p>住所入力</p>
                            </a>
                            <small>
                                <label for="">都道府県</label>
                                <select name="" id="">
                                    <option value="選択してください">選択してください</option>
                                </select>
                            </small>
                            <small>
                                <label for="">市区郡</label>
                                <input type="text" placeholder="ex)千代田区">
                            </small>
                            <small>
                                <label for="">町村番地</label>
                                <input type="text" placeholder="ex)丸の内2-4-1">
                            </small>
                            <small>
                                <label for="">ビル名</label>
                                <input type="text" placeholder="ex)丸の内ビルディング34F">
                            </small>

                        </div>
                    </div>
                    <div class="contact-frm__inner-row">
                        <div class="bg-h">
                            <label for="fname">お問い合わせ種別※</label>
                        </div>
                        <div>
                            <small>
                                <select id="cars" name="cars" aria-placeholder="選択してください">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </small>
                        </div>
                        <!-- <div>
                            <small>
                                <label for="郵便番号"></label>
                                <small>
                                    <input type="text" placeholder="ex)100">
                                </small>
                                <span>-</span>
                                <span>
                                    <input type="text" placeholder="ex)6334">
                                </span>
                                <small>
                                    <p>住所入力</p>
                                </small>
                            </small>
                            <small>
                                <label for="fname">都道府県</label>
                                <select id="cars" name="cars" aria-placeholder="選択してください">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </small>
                            <small>
                                <label for="fname">市区郡</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)千代田区">
                            </small>
                            <small>
                                <label for="fname">町村番地</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)丸の内2-4-1">
                            </small>
                            <small>
                                <label for="fname">ビル名</label>
                                <input type="text" id="lname" name="lname" value="" placeholder="ex)丸の内ビルディング34F">
                            </small>
                        </div> -->
                    </div>
                    <div class="contact-frm__inner-row">
                        <div>
                            <label for="fname">お問い合わせ内容※</label>
                        </div>
                        <div>
                            <textarea name="" id="" cols="30" rows="10" placeholder="ex)こちらにお書きください"></textarea>
                        </div>
                    </div>
                    <!-- <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?> -->

                    <div class="contact-frm__privacy">
                        <p>「<a href="">プライバシーポリシー</a>」をご確認いただき、同意のうえお問い合わせください。</p>
                        <div class="contact-frm__privacy--agrmt">
                            <input type="checkbox"><a href="">プライバシーポリシーに同意する</a>
                        </div>
                    </div>

                    <a href="" class="c-button">
                        <input type="submit" value="内容を確認する">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/" alt="">
                    </a>
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