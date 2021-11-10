<?php /* Template Name: Group Busines */ ?>

<?php get_header();

$imagedir = get_template_directory_uri();
?>

<div class="page__content group-business">
    <div class="c-banner">
        <p class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">丸の内 株式会社ルーフ</p>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/groupbusiness/groupbusiness_bnr.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/groupbusiness/groupbusiness_bnr_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>グ ル ー プ<br class="bnr_sp"> 事 業</p>
                <p>Group <br class="bnr_sp">Business</p>
            </div>
        </div>
        <div class="bread_crumps">
            <p class="txt">TOP <span>></span> 事 業 内 容 <span>＞</span> グ ル ー プ 事 業</p>
        </div>
    </div>
    <div class="top-clip"></div>
    <section class="sect_1">
        <div class="clip_cont">
            <div class="sect_1__center">
                <div class="l-wrap">
                    <p class="sect_1__eng_ttl">
                        Group Business
                    </p>
                    <p class="sect_1__header">
                        クルマが持つ新しい <br class="u-d-n-pc"> 世界観の創出 <br>
                        『CARGUY／カーガイ』
                    </p>
                    <div class="sect_1__inner">
                        <div class="sect_1__inner--left">
                            <p class="text">
                                ルーフは、収益不動産業務を主な事業としている一方で、モータースポーツ事業にも力を入れております。<br>
                                「CARGUY」とは、スーパーカーによる究極のエンターテイメント集団です。<br>
                                車を通して一人でも多くの人と出会い、車の持つ全く新しい世界観を創出することをテーマに2014年に活動を開始しました。<br>
                                ジャンルやスタイルに固執せず、過去にも囚われず、常に斬新なコンセプトを探究して、様々な世界観を創出してきました。<br>
                                車好き「CARGUY」の皆様と共に、新世界をクリエイトするために、常に全力で活動する努力を惜しみません。<br>
                                レースだけではなく、お客様との新しい関係も構築しつつさらなる飛躍を目指します。
                            </p>
                        </div>
                        <div class="sect_1__inner--right">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/groupbusiness/carguy_img.png" alt="">
                        </div>
                    </div>
                    <div class="sect_1__btn--wrap">
                        <a href="#" class="btn icon_left">ルーフのメイン事業内容を見る</a>
                        <a href="#" class="btn icon_right">公式サイトへ</a>
                    </div>
                    <img class="rect-one" src="<?php echo get_template_directory_uri(); ?>/release/image/page/groupbusiness/rect_one.png" alt="">
                </div>
            </div>
        </div>
        <div class="sect_1__box-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/groupbusiness/rect_small.png" alt="">
        </div>
        <div class="sect_1__box-big">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/groupbusiness/rect_big.png" alt="">
        </div>
    </section>
</div>
<?php get_footer(); ?>