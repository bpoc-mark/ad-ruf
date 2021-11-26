<?php get_header();

$imagedir = get_template_directory_uri();

?>
<div class="page__content office_gal">
    <div class="c-banner">
        <p class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">丸の内 株式会社ルーフ</p>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/office_gal/office_banner.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/office_gal/office_banner_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>オフィス風景</p>
                <p>Office Gallery</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span> 企 業 情 報 <span>></span> オ フ ィ ス 風 景</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <div class="section_1">

        <!-- //CONTENT 1 -->
        <div class="office_gal--items">
            <div class="l-wrap">
                <img class="office_gal__bg_1 pc" src="<?php echo $imagedir ?>/release/image/page/case/bg_1.png" alt="">
                <img class="office_gal__bg_1 sp" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2_sp.png" alt="">
                <div class="office_gal--contents">
                    <div class="office_gal--contents__col1">
                        <div class="office_gal--contents__col1--text">
                            <div class="office_gal--contents__col1--text ttl u-pt-0">
                                エントランス
                            </div>
                            <div class="office_gal--contents__col1--text ttl_sub">
                                ENTRANCE
                            </div>
                            <div class="office_gal--contents__col1--text desc">
                                訪れるお客様をもてなすのは、大らかでスタイリッシュな空間です。東京駅から直通でアクセスできる丸の内ビルディングの34Fまで上がると、そこに待ち受けるのは丸の内ルーフの開放感あふれるエントランス。東京駅周辺の景色を望むこともできるので、ちょっとした観光気分も味わうことができます。
                            </div>
                        </div>
                        <a class="c-buttonOG hide-tabsp" href="<?php echo get_permalink(get_page_by_path('access')) ?>">
                            <p class="txt">アクセス情報を見る</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                    </div>
                    <div class="office_gal--contents__col2">
                        <img src="<?php echo $imagedir ?>/release/image/page/office_gal/og_sect1_img1.png" alt="">
                        <div class="c-img_box top hide-solo">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">エント<br>
                                    ランス</p>
                            </div>
                        </div>
                    </div>
                    <a class="c-buttonCase hide-pc" href="<?php echo get_permalink(get_page_by_path('access')) ?>">
                        <p class="txt">アクセス情報を見る</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- //CONTENT 2 -->
        <div class="office_gal--items">
            <div class="l-wrap">
                <img class="office_gal__bg_2 pc" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2.png" alt="">
                <img class="office_gal__bg_2 sp" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2_sp.png" alt="">
                <div class="office_gal--contents">
                    <div class="office_gal--contents__col1">
                        <div class="office_gal--contents__col1--text">
                            <div class="office_gal--contents__col1--text ttl">
                                ミーティングルーム
                            </div>
                            <div class="office_gal--contents__col1--text ttl_sub">
                                Meeting room
                            </div>
                            <div class="office_gal--contents__col1--text desc">
                                <img class="office_gal__bg_2-1 sp" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2_sp-2-1.png" alt="">
                                心地いい空間へのこだわりはミーティングルームにも。快適性も機能性もどちらも備えた場所だからこそ、お打ち合わせやご商談の時間も常にリラックスいただけます。丸の内ルーフは、収益不動産のエキスパートとして、スタッフ一同磐石の体制でお客様の収益不動産の成功をサポートします。
                            </div>
                        </div>
                        <a class="c-buttonOG hide-tabsp" href="<?php echo get_permalink(get_page_by_path('case-study-main')) ?>">
                            <p class="txt">ルーフの事例を見る</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                    </div>
                    <div class="office_gal--contents__col2">
                        <img src="<?php echo $imagedir ?>/release/image/page/office_gal/og_sect1_img2.png" alt="">
                        <div class="c-img_box top">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">ミーティング<br>
                                    ルーム1</p>
                            </div>
                        </div>
                        <div class="c-img_box bottom">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">ミーティング<br>
                                    ルーム2</p>
                            </div>
                        </div>
                    </div>
                    <a class="c-buttonOG hide-pc" href="<?php echo get_permalink(get_page_by_path('case-study-main')) ?>">
                        <p class="txt">ルーフの事例を見る</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>

                </div>
            </div>
        </div>
        <!-- //CONTENT 3 -->
        <div class="office_gal--items">
            <div class="l-wrap">
                <img class="office_gal__bg_3" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content3.png" alt="">
                <div class="office_gal--contents">
                    <div class="office_gal--contents__col1">
                        <div class="office_gal--contents__col1--text">
                            <div class="office_gal--contents__col1--text ttl">
                                共用ラウンジ
                            </div>
                            <div class="office_gal--contents__col1--text ttl_sub">
                                Common space
                            </div>
                            <div class="office_gal--contents__col1--text desc">
                                共用ラウンジは、クリエイティブな発想が生まれそうな高いデザイン性が魅力。ゆっくりと寛げる憩いのスペースです。椅子やテーブル、雑貨やインテリア、植栽まで、一つひとつにこだわりセレクトしました。お茶やコーヒーを飲みながら、それぞれの時間をお楽しみください。
                            </div>
                        </div>
                        <a class="c-buttonOG hide-tabsp" href="<?php echo get_permalink(get_page_by_path('about')) ?>">
                            <p class="txt">ルーフについて</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                    </div>
                    <div class="office_gal--contents__col2">
                        <img src="<?php echo $imagedir ?>/release/image/page/office_gal/og_sect1_img3.png" alt="">
                        <div class="c-img_box top">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">共有<br>
                                    ラウンジ</p>
                            </div>
                        </div>
                        <div class="c-img_box bottom">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">共有<br>
                                    ラウンジ</p>
                            </div>
                        </div>
                    </div>
                    <a class="c-buttonOG hide-pc" href="<?php echo get_permalink(get_page_by_path('about')) ?>">
                        <p class="txt">ルーフについて</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- //CONTENT 4 -->
        <div class="office_gal--items">
            <div class="l-wrap">
                <img class="office_gal__bg_2 pc" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2.png" alt="">
                <img class="office_gal__bg_4 sp" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2_sp.png" alt="">
                <div class="office_gal--contents">
                    <div class="office_gal--contents__col1">
                        <div class="office_gal--contents__col1--text">
                            <div class="office_gal--contents__col1--text ttl">
                                事務所
                            </div>
                            <div class="office_gal--contents__col1--text ttl_sub">
                                Meeting room
                            </div>
                            <div class="office_gal--contents__col1--text desc">
                                丸の内ルーフでは、お客様の満足度はもちろん、スタッフの満足度も追及します。居心地のいい事務所からは、東京駅近郊の美しい景色が一望可能。不動産の専門知識はもちろん、目利きの確かさ、迅速な行動、先見性のある提案など、収益不動産のプロであるスタッフがきめ細やかにサポートします。
                            </div>
                        </div>
                        <a class="c-buttonOG hide-tabsp" href="<?php echo get_permalink(get_page_by_path('our-enterprises')) ?>">
                            <p class="txt">事業内容を見る</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                    </div>
                    <div class="office_gal--contents__col2">
                        <img src="<?php echo $imagedir ?>/release/image/page/office_gal/og_sect1_img4.png" alt="">
                        <div class="c-img_box top">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">事務所<br>
                                    入口</p>
                            </div>
                        </div>
                        <div class="c-img_box bottom">
                            <div class="c-img_box__txt">
                                <p class="c-img_box__ttl">事務所内<br>
                                    眺望</p>
                            </div>
                        </div>
                    </div>
                    <a class="c-buttonOG hide-pc" href="<?php echo get_permalink(get_page_by_path('our-enterprises')) ?>">
                        <p class="txt">事業内容を見る</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="section_3">
            <div class="l-wrap">
                <img class="office_gal__bg_4 pc" src="<?php echo $imagedir ?>/release/image/page/office_gal/bg_content2.png" alt="">
                <!-- <img class="bg_1 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3_bg1.png" alt=""> -->
                <img class="bg_2 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3_bg2.png" alt="">
                <img class="bg_3 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3_bg3.png" alt="">
                <img class="bg_4 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3_bg_1sp.png" alt="">
                <div class="c-case02__txt">
                    <p class="c-case02__txt__ttl">About Us</p>
                    <p class="c-case02__txt__sub">企業情報</p>
                    <p class="c-case02__txt__desc">株式会社ルーフが大切にしていることや業績・理念を<br>
                        ご紹介いたします。</p>
                </div>

                <div class="cards">
                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-1 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img1.png" alt="">
                            <img class="bg-1-s[ u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg1_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>代表メッセージ</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>The Message</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('message')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">代表メッセージ</p>
                            <p class="cards-card-desc-txt">株式会社ルーフが大切に<br class="u-d-n-sp">していることをご紹介いたします。</p>
                        </div>
                    </div>

                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-2 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img2.png" alt="">
                            <img class="bg-2 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg2_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>経営理念</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>Management
                                        Philosophy</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('management-philosophy')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">経営理念</p>
                            <p class="cards-card-desc-txt"> 株式会社ルーフの経営理念を<br class="u-d-n-sp">ご紹介いたします。</p>
                        </div>
                    </div>

                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-3 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img3.png" alt="">
                            <img class="bg-3 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg3_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>会社概要</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>Company
                                        Information</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('companyinformation')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">会社概要</p>
                            <p class="cards-card-desc-txt">株式会社ルーフの会社概要を<br class="u-d-n-sp">ご紹介いたします。</p>
                        </div>
                    </div>

                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-4 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img4.png" alt="">
                            <img class="bg-4 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg4_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>業績</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>The Results</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('result')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">業績</p>
                            <p class="cards-card-desc-txt">株式会社ルーフの<br class="u-d-n-sp">業績をご紹介いたします。</p>
                        </div>
                    </div>

                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-5 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img5.png" alt="">
                            <img class="bg-5 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg5_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>アクセス</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>Access</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('access ')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">アクセス</p>
                            <p class="cards-card-desc-txt">株式会社ルーフまでの<br class="u-d-n-sp">アクセスをご紹介いたします。</p>
                        </div>
                    </div>

                    <div class="cards-card">
                        <div class="cards-card-img">
                            <img class="bg-6 u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/sec3-img6.png" alt="">
                            <img class="bg-6 u-d-n-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/page/about/crdimg6_sp.png" alt="">
                            <div class="cards-card-img-txt">
                                <div class="cards-card-img-txt-ttl">
                                    <p>オフィス風景</p>
                                </div>
                                <div class="cards-card-img-txt-sub">
                                    <p>Office Gallery</p>
                                </div>
                            </div>
                            <div class="cards-card-img-lnk">
                                <a href="<?php echo get_permalink(get_page_by_path('オフィス風景')) ?>">VIEW MORE ></a>
                            </div>
                        </div>
                        <div class="cards-card-desc">
                            <p class="cards-card-desc-ttl">オフィス風景</p>
                            <p class="cards-card-desc-txt">株式会社ルーフの<br class="u-d-n-sp">オフィス風景をご紹介します。</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>