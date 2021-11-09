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
                <div class="top-header-nav">
                    <div class="brnd-logo">
                        <a class="brnd-logo-link u-d-f" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">
                            <p>丸の内 株式会社ルーフ</p>
                        </a>
                    </div>

                    <div class="nav-links">
                        <div class="nav-links-ul">
                            <ul class="nav-links-ul-01">
                                <li class="nav-links-ul-01-link submenu-clk">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">会社概要</a>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <a href="<?php echo get_permalink(get_page_by_path('access')) ?>">プライバシーポリシー</a>
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
                            <ul class="nav-links-ul-02">
                                <li class="nav-links-ul-02-link submenu-clk">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt=""> -->
                                    <a href="<?php echo esc_url(home_url('/')); ?>">TOP
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <a>事業内容</a>
                                    <ul class="nav-links-ul-02-link-submenu">
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
                                    <img class="u-d-n-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <p class="plus u-d-n-pc">+</p>
                                    <a>企業情報</a>
                                    <ul class="nav-links-ul-02-link-submenu">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <a>バリューアップ事例</a>
                                    <ul class="nav-links-ul-02-link-submenu">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/menu_link_icon.svg" alt="">
                                    <a href="">不動産コラム</a>
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
                            <a class="nav-links-mail-link" href="">
                                <img class="mail" src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg" alt="">
                                <p>お問い合わせ・<br class="u-d-n-sp">
                                    ご相談</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top-header-close">
                    <a>
                        <div class="close-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/close-btn.png"alt="">
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
                <a class="brgr-mail-mail">
                    <img class="mail" src="<?php echo get_template_directory_uri(); ?>/release/image/header/mail.svg" alt="">
                    <p class="brgr-mail-mail-txt">お問い合わせ・<br class="u-d-n-pc">ご相談</p>
                </a>
            </div>
        </div>
