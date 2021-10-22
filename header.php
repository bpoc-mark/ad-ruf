<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">
    
    <?php wp_head();?>	
</head>
<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
       <div class="home">  
            <div class="home-nav">

                <div class="home-nav-col1">

                    <div class="home-nav-col1-brand-logo">
                         <a href="">
                             <img src="<?php echo get_template_directory_uri();?>/release/image/header/logo.svg" alt="">
                             <p>丸の内 株式会社ルーフ </p>
                         </a>
                    </div>

                    <div class="home-nav-col1-links">
                        <div class="home-nav-col1-links-ul">
                            <div class="home-nav-col1-links-ul-cmpny-pro">
                                <a href="">会社概要　/  プライバシーポリシー</a>
                            </div>
                            <div class="home-nav-col1-links-ul-dd">

                                 <div class="home-nav-col1-links-ul-dd-menu">
                                     <a href="">TOP</a>
                                 </div>
                                 <div class="home-nav-col1-links-ul-dd-menu">
                                     <a href="">事業内容</a>
                                 </div>
                                 <div class="home-nav-col1-links-ul-dd-menu">
                                     <a href="">企業情報</a>
                                 </div>
                                 <div class="home-nav-col1-links-ul-dd-menu">
                                     <a href="">バリューアップ事例</a>
                                 </div>
                                 <div class="home-nav-col1-links-ul-dd-menu">
                                     <a href="">不動産コラム</a>
                                 </div>
                            </div>
                        </div>
                        <div class="home-nav-col1-links-mail">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/header/mail.svg" alt="">
                                <p>お問い合わせ・<br>
                                ご相談</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home-nav-col2">

                </div>
            </div>
            <div class="home-banner">

            </div>

       </div>
    </div>
    