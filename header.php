<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"><!-- Edgeでのリンク定義回避 -->
    <title><?php bloginfo('title'); ?></title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/dmz1qnv.css">
    <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <main>
        <?php if (!is_single()) : ?>
        <div class="page__header" id="page-top">
            <div class="top-header">
                <div class="top-header-nav">
                    <div class="brnd-logo">
                        <a class="brnd-logo-link u-d-f" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="logo"
                                src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">
                            <p>株式会社ルーフ</p>
                        </a>
                    </div>

                    <div class="nav-links">
                        <div class="nav-links-ul">
                            <ul class="nav-links-ul-01">
                                <li class="nav-links-ul-01-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <a
                                        href="<?php echo get_permalink(get_page_by_path('companyinformation')) ?>">会社概要</a>
                                    <ul class="nav-links-ul-02-link-submenu u-d-n-pc">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 1</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 2</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 3</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="nav-links-ul-01-link submenu-clk">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <a
                                        href="<?php echo get_permalink(get_page_by_path('privacy-policy')) ?>">プライバシーポリシー</a>
                                    <!-- <ul class="nav-links-ul-02-link-submenu u-d-n-pc">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 1</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 2</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 3</a>
                                        </li>
                                    </ul> -->
                                </li>
                            </ul>
                            <ul class="nav-links-ul-02">
                                <li class="nav-links-ul-02-link">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt=""> -->
                                    <a href="<?php echo esc_url(home_url('/')); ?>">TOP
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                            alt="">
                                    </a>
                                    <ul class="nav-links-ul-02-link-submenu u-d-n-pc">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 1</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 2</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-links-ul-02-link submenu-clk">
                                    <img class="pc"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <p class="plus u-d-n-pc">+</p>
                                    <a href="<?php echo get_permalink(get_page_by_path('our-enterprises')) ?>">事業内容</a>
                                    <ul class="nav-links-ul-02-link-submenu">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('realestatepurchase')) ?>">収益不動産の売買</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('realestatepurchase2')) ?>">収益不動産の買取</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('saleofrealestate')) ?>">収益不動産の売却</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('realestatemanagement')) ?>">収益不動産の管理</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('realestateoperation')) ?>">収益不動産の運用</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('assetmanagement')) ?>">アセットマネジメント</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-links-ul-02-link submenu-clk">
                                    <img class="u-d-n-sp"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <p class="plus u-d-n-pc">+</p>
                                    <a href="<?php echo get_permalink(get_page_by_path('about')) ?>">企業情報</a>
                                    <ul class="nav-links-ul-02-link-submenu submenu2">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('message')) ?>">代表メッセージ</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('management-philosophy')) ?>">経営理念</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('companyinformation')) ?>">会社概要</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="<?php echo get_permalink(get_page_by_path('result')) ?>">業績</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="<?php echo get_permalink(get_page_by_path('access ')) ?>">アクセス</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('office-gallery')) ?>">オフィス風景</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="<?php echo get_permalink(get_page_by_path('interview')) ?>">代表について
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-links-ul-02-link submenu-clk">
                                    <img class="pc"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <p class="plus u-d-n-pc">+</p>
                                    <a
                                        href="<?php echo get_permalink(get_page_by_path('case-study-main')) ?>">バリューアップ事例</a>
                                    <ul class="nav-links-ul-02-link-submenu submenu3">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study1')) ?>">バリューアップ事例01</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study2')) ?>">バリューアップ事例02</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study3')) ?>">バリューアップ事例03</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study4')) ?>">バリューアップ事例04</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study5')) ?>">バリューアップ事例05</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study6')) ?>">バリューアップ事例06</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study7')) ?>">バリューアップ事例07</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a
                                                href="<?php echo get_permalink(get_page_by_path('case-study08')) ?>">バリューアップ事例08</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-links-ul-02-link submenu-clk">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg"
                                        alt="">
                                    <a href="<?php echo get_permalink(get_page_by_path('column')) ?>">RUF収益不動産コラム</a>
                                    <ul class="nav-links-ul-02-link-submenu u-d-n-pc">
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 1</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 2</a>
                                        </li>
                                        <li class="nav-links-ul-02-submenu-link">
                                            <a href="">Item 3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-links-mail">
                            <a class="nav-links-mail-link"
                                href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                                <img class="mail"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg"
                                    alt="">
                                <p>Contact</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top-header-close">
                    <a>
                        <div class="close-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/close-btn.png"
                                alt="">
                            <p>close</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

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
                <a class="brgr-mail-mail" href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                    <img class="mail" src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg"
                        alt="">
                    <p class="brgr-mail-mail-txt">お問い合わせ・<br class="u-d-n-pc">ご相談</p>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <main>