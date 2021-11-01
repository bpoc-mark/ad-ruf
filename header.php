<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <!-- SLICK CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <div class="top-header">
                <div class="top-header-nav u-d-f u-jc-sb">
                    <div class="brnd-logo">
                        <a class="brnd-logo-link u-d-f u-jc-sb" href="">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">
                            <p>丸の内 株式会社ルーフ </p>
                        </a>
                    </div>

                    <div class="nav-links">
                        <div class="nav-links-ul">
                            <div class="nav-links-ul-pro">
                                <a class="nav-links-ul-pro-link" href="">会社概要　/ プライバシーポリシー</a>
                            </div>
                            <div class="nav-links-ul-02">
                                <div class="nav-links-ul-02-link">
                                    <a href="">TOP</a>
                                </div>
                                <div class="nav-links-ul-02-link dd">
                                    <a href="">事業内容</a>
                                </div>
                                <div class="nav-links-ul-02-link dd">
                                    <a href="">企業情報</a>
                                </div>
                                <div class="nav-links-ul-02-link dd">
                                    <a href="">バリューアップ事例</a>
                                </div>
                                <div class="nav-links-ul-02-link">
                                    <a href="">不動産コラム</a>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="nav-links-ul-close"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/sp_menu_close.svg" alt=""> CLOSE</a>
                        </div>
                        <div class="nav-links-mail">
                            <a class="nav-links-mail-link" href="">
                                <img class="mail" src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg" alt="">
                                <p>お問い合わせ・<br>
                                    ご相談</p>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="top-header-bnnr">
                    <div class=" top-header-bnnr-cnt u-d-f">
                        <div class="top-header-bnnr-hdr-01">
                            <div class="top-header-bnnr-hdr-cntnt01-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo2.svg" alt="">
                            </div>
                            <div class="top-header-bnnr-hdr-01-txt">
                                <p>丸の内株式会社ルーフ</p>
                            </div>
                        </div>
                        <div class="top-header-bnnr-hdr-02">
                            <div class="top-header-bnnr-hdr-02-txt">
                                <p class="top-header-bnnr-hdr-02-txt-1">
                                    選ばれし方々に選ばれ、
                                    <br>
                                    そして選ばれ続ける
                                </p>
                                <div class="top-header-bnnr-hdr-02-txt-sp">
                                    <div class="top-header-bnnr-hdr-02-txt-sp-cont">
                                        <p class="top-header-bnnr-hdr-02-txt-sp-cont-1">
                                            収益不動産の売買・管理・運用
                                        </p>
                                    </div>
                                    <div class="top-header-bnnr-hdr-02-txt-sp-cont">
                                        <p class="top-header-bnnr-hdr-02-txt-sp-cont-2">
                                            アセットマネジメント
                                        </p>
                                    </div>
                                </div>
                                <p class="top-header-bnnr-hdr-02-txt-2">
                                    Chosen by the chosen people, <br> and continues to be chosen
                                </p>
                            </div>

                            <div class="top-header-bnnr-hdr-02-spimg">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo2.svg" alt="">
                            </div>
                            <div class="top-header-bnnr-hdr-02-desc">
                                <div class="top-header-bnnr-hdr-02-desc-01">
                                    <p class="top-header-bnnr-hdr-02-desc-01-txt">収益不動産の売買・管理・運用</p>
                                </div>
                                <div class="top-header-bnnr-hdr-02-desc-02">
                                    <p class="top-header-bnnr-hdr-02-desc-02-txt">アセットマネジメント</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="top-header-bnnr-txt01">
                        <p class="top-header-bnnr-txt01-hon">
                            あなたの不動産
                        </p>
                    </div>
                    <div class="top-header-bnnr-txt02">
                        <p class="top-header-bnnr-txt02-ver">
                            収益を最大化。
                        </p>
                    </div>
                    <div class="fade">

                    </div>
                </div>
                
                
                <div class="bottom-clip">

                </div>
            </div>
        </div>

        <!-- <div class="nav-sp-wrppr" style="display: none;">  
            <div class="nav-sp">
                <div class="nav-sp-link">
                    <div class="nav-sp-link-logo">
                        <a href="">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">
                            <p>丸の内 株式会社ルーフ </p>
                        </a>
                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">TOP</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">事業内容</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">バリューアップ事例</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">不動産コラム</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">会社概要</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                    <div class="nav-sp-link-lists">
                        <div class="nav-sp-link-lists-ttl">
                            <a href="">プライバシーポリシー</a>
                            <a href="">></a>
                        </div>

                        <div class="nav-sp-link-lists-list">
                            <a href="">事業内容</a>
                            <p>+</p>
                        </div>

                    </div>
                </div>

                <div class="sp-close">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/close.png" alt="">
                    <p>CLOSE</p>
                </div>
            </div>
        </div> -->

        <div class="float-menu">
            <div class="brgr-mail">
                <a class="brgr-mail-burger">
                    <div class="brgr-mail-burger-menu">
                        <div class="menu-line1"></div>
                        <div class="menu-line2"></div>
                        <div class="menu-line3"></div>
                    </div>
                    <p class="brgr-mail-burger-txt">MENU</p>
                </a>
                <a class="brgr-mail-mail">
                    <img class="mail" src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg" alt="">
                    <p class="brgr-mail-mail-txt">お問い合わせ・ご相談</p>
                </a>
            </div>
        </div>
