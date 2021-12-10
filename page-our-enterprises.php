<?php get_header();

$imagedir = get_template_directory_uri();

?>
<div class="page__content oe">
    <div class="c-banner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">株式会社ルーフ</a>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-banner.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-banner-sp.png" alt="">
            <div class="c-banner--ttl">
                <p>事業内容</p>
                <p>Our Enterprises</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span> 事業内容 </p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <div class="oe__section_1">
        <!-- //CLIP -->
        <!-- <div class="clip-top"></div> -->
        <div class="l-wrap">
            <img class="oe__bg_1 u-d-n-sp" src="<?php echo $imagedir ?>/release/image/page/privacy-policy/pp_bg_1.png" alt="">
            <img class="oe__bg_1 u-d-n-pc" src="<?php echo $imagedir ?>/release/image/background/bg_7.png" alt="">
            <p class="oe__ttl">OUR ENTERPRISES</p>
            <h1 class="oe__title">ルーフの<br class="u-d-n-pc">4つの事業紹介</h1>
            <p class="oe__sub">私たち丸の内ルーフは<br class="u-d-n-pc">コンサルティング会社ではありません。<br>
                自社で収益不動産を所有する<br class="u-d-n-pc">「プロのオーナー」として、<br class="u-d-n-pc">オーナー様と同じ目線でサービスを提供します。</p>
        </div>
        <div class="oe-main-content">
            <div class="l-wrap">
                <img class="oe__bg_2" src="<?php echo $imagedir ?>/release/image/background/rect_big.png" alt="">
                <img class="oe__bg_3 u-d-n-sp" src="<?php echo $imagedir ?>/release/image/background/bg_14.png" alt="">
                <div class="row">
                    <div class="col heading">
                        <p class="heading01">収益不動産の売買</p>
                        <p class="heading02">Real Estate Purchase</p>
                        <p class="heading03">ルーフは、あなたの大切な一棟マンションやアパートなどの収<br class="u-d-n-sp">益不動産を最大限に評価して買取いたします。</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-img1.png" alt="">
                        <!-- <div class="col--box">
                            <img src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-img1.png" alt="">
                            <p class="top-text01">
                                <span>R</span>eal Estate
                            </p>
                            <p class="top-text02">
                                <span>P</span>urchase
                            </p>
                            <p class="num">01</p>
                            <div class="info">
                                <p class="info-ttl">価値を見極める</p>
                                <p class="info-sub">RUFの収益不動産の売買</p>
                            </div>
                        </div> -->

                        <div class="u-d-f u-f-jcc u-pt-30 oe__btns">
                            <a href="<?php echo get_permalink(get_page_by_path('realestatepurchase')) ?>" class="c-buttonCase oe--btn">
                                <p class="txt">詳細を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a>

                            <!-- <a href="#" class="c-buttonCase oe--btn">
                                <p class="txt">実績を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a> -->
                        </div>

                    </div>

                    <div class="col heading">
                        <p class="heading01">収益不動産の管理</p>
                        <p class="heading02">Real Estate Management</p>
                        <p class="heading03 ls007">ルーフは、豊富なバリューアップの経験を<br class="br-sp">武器に最適な不動産管理<br class="u-d-n-sp">を行い、<br class="br-sp">お預かりした大切な収益不動産の価値を高めます。</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-img2.png" alt="">
                        <div class="u-d-f u-f-jcc u-pt-30 oe__btns">
                            <a href="<?php echo get_permalink(get_page_by_path('realestatemanagement')) ?>" class="c-buttonCase oe--btn">
                                <p class="txt">詳細を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a>

                            <!-- <a href="#" class="c-buttonCase oe--btn">
                                <p class="txt">実績を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a> -->
                        </div>

                    </div>

                    <div class="col heading">
                        <p class="heading01">収益不動産の運用</p>
                        <p class="heading02">Real Estate Operation</p>
                        <p class="heading03 ls007">ルーフは、自社で収益不動産を保有する<br class="br-sp">「プロのオーナー」とし<br class="u-d-n-sp">て、<br class="br-sp">首都圏を中心に多数の物件を運用しています。</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-img3.png" alt="">
                        <div class="u-d-f u-f-jcc u-pt-30 oe__btns">
                            <a href="<?php echo get_permalink(get_page_by_path('realestateoperation')) ?>" class="c-buttonCase oe--btn">
                                <p class="txt">詳細を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a>

                            <!-- <a href="#" class="c-buttonCase oe--btn">
                                <p class="txt">実績を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a> -->
                        </div>

                    </div>

                    <div class="col heading">
                        <p class="heading01">アセットマネジメント</p>
                        <p class="heading02">Asset Management</p>
                        <p class="heading03 ls007">収益不動産に関する豊富なノウハウを活かし、<br class="br-sp">お客様の不動産<br class="u-d-n-sp">投資戦略の最適化と<br class="br-sp">資産価値の最大化を目指します。</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/ourenterprises/oe-img4.png" alt="">
                        <div class="u-d-f u-f-jcc u-pt-30 oe__btns">
                            <a href="<?php echo get_permalink(get_page_by_path('assetmanagement')) ?>" class="c-buttonCase oe--btn">
                                <p class="txt">詳細を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a>

                            <!-- <a href="#" class="c-buttonCase oe--btn">
                                <p class="txt">実績を見る</p>
                                <img src="<?= get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                            </a> -->
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>