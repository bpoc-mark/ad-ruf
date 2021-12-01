<?php get_header();

$imagedir = get_template_directory_uri();
?>
<div class="page__content contact-confrm">
    <div class="c-banner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">丸の内 株式会社ルーフ</a>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/contact/contact_bg_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>確認画面</p>
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
            <div class="contact-confrm__bg-white">
                <div class="form">
                    <div class="contact-confrm__req">
                        <p class="contact-confrm__req--txt">※ は必須項目です</p>
                    </div>

                    <form action="">
                        <!-- Row 1 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">お名前※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <label for="">姓</label>
                                    <input type="text" id="fname" name="fname" value="" placeholder="ex)山田">
                                </div>
                                <div>
                                    <label for="">名</label>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)花子">
                                </div>
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">フリガナ※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <label for="">セイ</label>
                                    <input type="text" id="fname" name="fname" value="" placeholder="ex)ヤマダ">
                                </div>
                                <div>
                                    <label for="">メイ</label>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)ハナコ">
                                </div>
                            </div>
                        </div>
                        <!-- Row 3 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">貴社名※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)株式会社ルーフ">
                                </div>
                            </div>
                        </div>
                        <!-- Row 4 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">部署・役職名</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)営業部">
                                </div>
                            </div>
                        </div>
                        <!-- Row 5 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">メールアドレス※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <label for="">アドレス</label>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)yamada@xxxxxxx.net">
                                </div>
                                <div>
                                    <label for="">確 認 用</label>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)yamada@xxxxxxx.net">
                                </div>
                            </div>
                        </div>
                        <!-- Row 6 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">電話番号※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)0120">
                                </div>
                                <span>-</span>
                                <div>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)173">
                                </div>
                                <span>-</span>
                                <div>
                                    <input type="text" id="lname" name="lname" value="" placeholder="ex)602">
                                </div>
                            </div>
                        </div>
                        <!-- Row 7 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">ご住所※</label>
                            </div>
                            <div class="col-2">
                                <!-- Row 1 -->
                                <div class="row-1">
                                    <div>
                                        <label for="">郵便番号</label>
                                    </div>
                                    <div>
                                        <input type="text" id="lname" name="lname" value="" placeholder="ex)100">
                                    </div>
                                    <span>-</span>
                                    <div>
                                        <input type="text" id="lname" name="lname" value="" placeholder="ex)6334">
                                    </div>
                                    <span class="hidden">-</span>
                                </div>
                                <!-- Row 2 -->
                                <div class="row-2">
                                    <div>
                                        <label for="">都道府県</label>
                                    </div>
                                    <div>
                                        <select id="cars" name="carlist" form="carform">
                                            <option value="volvo">選択してください</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row 3 -->
                                <div class="row-3">
                                    <div>
                                        <label for="">市区郡</label>
                                    </div>
                                    <div>
                                        <input type="text" id="lname" name="lname" value="" placeholder="ex)千代田区">
                                    </div>
                                </div>
                                <!-- Row 4 -->
                                <div class="row-4">
                                    <div>
                                        <label for="">町村番地</label>
                                    </div>
                                    <div>
                                        <input type="text" id="lname" name="lname" value="" placeholder="ex)丸の内2-4-1">
                                    </div>
                                </div>
                                <!-- Row 5 -->
                                <div class="row-5">
                                    <div>
                                        <label for="">ビル名</label>
                                    </div>
                                    <div>
                                        <input type="text" id="lname" name="lname" value="" placeholder="ex)丸の内ビルディング34F">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 8 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">お問い合わせ種別※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <select id="cars" name="carlist" form="carform">
                                        <option value="volvo">選択してください</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Row 9 -->
                        <div class="contact-confrm__flex">
                            <div class="col-1">
                                <label for="fname">お問い合わせ種別※</label>
                            </div>
                            <div class="col-2">
                                <div>
                                    <textarea name="" id="" cols="30" rows="5" placeholder="ex)こちらにお書きください"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="btm-txt">
                            <div class="btns-flex">
                                <div class="btn-confirm">
                                    <a class="c-buttonCase-left btn white" href="">
                                        <p class="txt">内容を編集する</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact/arrow_left.svg" alt="">
                                    </a>
                                </div>

                                <div class="btn-confirm">
                                    <a class="c-buttonCase btn" href="">
                                        <p class="txt">送信する</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact/btn_arrow_white.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="c-pageTop">
                <a href="#">
                    <p class="txt">PAGE TOP</p>
                </a>
            </div>
    </section>
</div>

<?php get_footer(); ?>