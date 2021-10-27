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
                        <img class="logo" src="<?php echo get_template_directory_uri();?>/release/image/header/logo.svg" alt="">
                        <p>丸の内 株式会社ルーフ </p>
                    </a>
                </div>

                <div class="nav-links">
                    <div class="nav-links-ul">
                        <div class="nav-links-ul-pro">
                            <a class="nav-links-ul-pro-link" href="">会社概要　/  プライバシーポリシー</a>
                        </div>
                        <div class="nav-links-ul-02">
                            <div class="nav-links-ul-02-link">
                                <a href="">TOP</a>
                            </div>
                            <div class="nav-links-ul-02-link">
                                <a href="">事業内容</a>
                            </div>
                            <div class="nav-links-ul-02-link">
                                <a href="">企業情報</a>
                            </div>
                            <div class="nav-links-ul-02-link">
                                <a href="">バリューアップ事例</a>
                            </div>
                            <div class="nav-links-ul-02-link">
                                <a href="">不動産コラム</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-links-mail">
                        <a class="nav-links-mail-link" href="">
                            <img class="mail" src="<?php echo get_template_directory_uri();?>/release/image/header/mail.svg" alt="">
                            <p>お問い合わせ・<br>
                            ご相談</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="top-header-bnnr">
                <div class="top-header-bnnr-hdr u-d-f">
                    <div class="home-cols-col2-cntnt01">
                        <div class="home-cols-col2-cntnt01-img">
                            <img src="<?php echo get_template_directory_uri();?>/release/image/header/logo2.svg" alt="">
                        </div>
                        <div class="home-cols-col2-cntnt01-txt">
                            <p>丸の内株式会社ルーフ</p>
                        </div>
                    </div>  
                    <div class="home-cols-col2-cntnt02">
                        <div class="home-cols-col2-cntnt02-hdr">
                            <p>
                                選ばれし方々に選ばれ、
                                <br>
                                そして選ばれ続ける
                            </p>
                            <p>
                                Chosen by the chosen people,and continues to be chosen
                            </p>
                        </div>
                        <div class="home-cols-col2-cntnt02-cont">
                            <p class="home-cols-col2-cntnt02-cont-01">収益不動産の売買・管理・運用</p>
                            <p class="home-cols-col2-cntnt02-cont-02">アセットマネジメント</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
