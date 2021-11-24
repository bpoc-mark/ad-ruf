<?php /* Template Name: Real Estate Purchase */ ?>

<?php get_header();
$imagedir = get_template_directory_uri();
?>
<div class="page__content real_estate_management">
    <div class="c-banner">
        <p class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">株式会社ルーフ</p>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/realestate/rem_bg_banner.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/realestate/rem_bg_banner-sp.png" alt="">
            <div class="c-banner--ttl">
                <p>収 益 不 動 産 <br class="br-sp">の 管 理</p>
                <p>Real Estate<br class="br-sp">Management</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span>事 業 内 容<span>＞</span>収 益 不 動 産 の 管 理</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <section class="sect_1">
        <div class="sect_1__center">
            <div class="l-wrap">
                <div class="sect_1__box-big-new">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-1_2.png" alt="">
                </div>
                <p class="sect_1__eng_ttl">
                    Real Estate Management
                </p>
                <p class="sect_1__headers">
                    <span class="ttl_small">ルーフは、面倒な保守管理や修繕工事、苦情処理改善まで</span> <br>
                    不動産経営に<br class="br-sp">関わること全てサポート
                </p>
                <p class="header_subtext">
                    ルーフは、豊富なバリューアップの経験を武器に<br class="br-sp">最適な不動産管理を行い、<br class="br-sp">
                    お預かりした大切な収益不動産の価値を高めます。</p>
                <div class="sect_1__box-big">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-2.png" alt="">
                </div>
            </div>
        </div>
        <div class="sect_1__box-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/groupbusiness/rect_small.png" alt="">
        </div>
    </section>
    <section class="sect_2">
        <div class="l-wrap">
            <div class="sect_2__inner-realestate">
                <div class="sect_2__box-big-new">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_2_box-1.png" alt="">
                </div>
                <div class="sect_2__box-big-new2">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_2_box-2.png" alt="">
                </div>
                <div class="sect_2__inner-realestate--left">
                    <p class="txt_ttl u-d-n-sp">
                        ルーフの<br>
                        収益不動産の管理とは</p>
                    <p class="text">
                        丸の内ルーフの収益不動産『管理』ではオーナー様のお手元に毎月いくら残こせるのかをしっかり追求しております。不動産の稼働率の安定化と管理コストの効率化を常に目指すことで、表面上の利回りだけではなく『実質利回り』に拘りながらお客様の大切な資産である収益不動産の価値を守ってまいります。
                    </p>
                    <div class="point">
                        <p class="point_ttl">
                            こんな方におすすめ
                        </p>
                        <p class="point_item">
                            ● <span>保守管理までまかせたい</span>
                        </p>
                        <p class="point_item">
                            ● <span>修繕工事もまかせたい</span>
                        </p>
                        <p class="point_item">
                            ● <span>リーシングもお願いしたい</span>
                        </p>
                    </div>
                </div>
                <div class="sect_2__inner-realestate--right">
                    <img class="pic" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-sec2.png" alt="">
                </div>
                <p class="txt_ttl u-d-n-pc">
                    ルーフの<br>
                    収益不動産の管理とは
                </p>

            </div>
        </div>
    </section>

    <!-- <section class="sect_3">
        <div class="l-wrap">
            <div class="sect_3__inner-realestate">
                <div class="sect_3__inner-realestate--left">
                    <p class="txt_ttl u-d-n-sp">
                        丸の内ルーフの<br>
                        収益不動産の買取とは
                    </p>
                    <p class="text">
                        買取では、土地・建物の状態はもちろん、収益不動産ならではのポイントをしっかり調査。お一人おひとりのご希望を伺いながら、市場のトレンドもしっかりと踏まえてお客様の収益不動産を最大限に評価します。
                    </p>
                    <div class="point">
                        <p class="point_ttl">
                            Point
                        </p>
                        <p class="point_item">
                            ● <span>スピーディーなお取引</span>
                        </p>
                        <p class="point_item">
                            ● <span>収益不動産を最大限評価</span>
                        </p>
                        <p class="point_item">
                            ● <span>首都圏エリアの動向の見極め</span>
                        </p>
                    </div>
                    <a class="c-buttonREP" href="#">
                        <p class="txt">収益不動産の売却について</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div>
                <div class="sect_3__inner-realestate--right">
                    <div style="position: relative;">
                        <img class="pic" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/real-estate_sect1_img1-nb.png" alt="">
                    </div>
                </div>
                <p class="txt_ttl u-d-n-pc">
                    丸の内ルーフの<br>
                    収益不動産の買取とは
                </p>

            </div>
        </div>
    </section> -->

    <section class="sect_4">
        <div class="l-wrap">
            <div class="sect_4__box-big-new">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_4_box-1.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_4_box-1-sp.png" alt="">
            </div>
            <div class="sect_4__box-big-new2">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_4_box-2.png" alt="">
            </div>
            <div class="sect_4__box-big-new3">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_4_box-3.png" alt="">
            </div>
            <div class="sect_4--top-realestate">
                <div class="sect_4__eng--ttl">
                    Real Estate Management
                </div>
                <div class="sect_4__header">
                    丸の内ルーフの収益不動産の管理 3つの特徴
                </div>
                <div class="sect_4__header--sub">
                    ルーフがお客様の収益不動産の管理に対して、<br>
                    迅速かつ誠実にサポートできる体制をご紹介。
                </div>
            </div>
            <div class="sect_4__inner-realestate">
                <div class="sect_4__inner-realestate--left">
                    <p class="txt_ttl u-d-n-sp">
                        高品質なプロパティマネジメント
                    </p>
                    <p class="text">
                        不動産価値の最大化と収益性向上のために何をすべきか。ルーフの強みは、豊富な経験とノウハウを活かした、オーナー様視点の高品質なプロパティマネジメントです。収益不動産でもっとも大切な「実質利回り」にこだわり、リーシング、保守管理、修繕工事など不動産経営に関わるすべての業務をワンストップで提供いたします。専門的な知識と技術で対応いたしますので、ルーフにお任せください。</span>
                    </p>
                    <div class="point">
                        <p class="point_ttl">
                            Point
                        </p>
                        <p class="point_item">
                            ● <span>豊富な経験とノウハウ</span>
                        </p>
                        <p class="point_item">
                            ● <span>高品質なプロパティマネジメント</span>
                        </p>
                        <p class="point_item">
                            ● <span>業務をワンストップで提供</span>
                        </p>
                    </div>
                </div>
                <div class="sect_4__inner-realestate--right">
                    <img class="pic" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-sec4.png" alt="">
                    <div class="c-img_box03">
                        <div class="c-img_box03__txt">
                            <p class="c-img_box03__ttl">Point</p>
                            <p class="c-img_box03__sub">1</p>
                        </div>
                    </div>
                </div>

                <p class="txt_ttl u-d-n-pc">
                    高品質なプロパティ<br class="br-sp">マネジメント
                </p>
                <a class="c-buttonREP" href="#">
                    <p class="txt">実績を見る</p>
                    <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                </a>

            </div>
        </div>
    </section>

    <section class="sect_5">
        <div class="l-wrap">
            <div class="sect_5__box-big-new">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_5_box-1.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_5_box-1-sp.png" alt="">
            </div>
            <div class="sect_5__box-big-new2">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_5_box-2.png.png" alt="">
            </div>
            <div class="sect_5__inner-realestate">
                <div class="sect_5__inner-realestate--left">
                    <p class="txt_ttl u-d-n-sp">
                        余計な管理コストを <br>
                        かけない
                    </p>
                    <p class="text">
                        ルーフは、必要以上に工事を行うなど、オーナー様の不利益になることは絶対にしません。建物の改修や美観維持にコストをかければ、資産価値を高め、入居促進につながります。しかし、経費をかけ過ぎれば、不動産経営は成立しません。リフォームは、見た目重視ではなく、機能重視。ランニングコストを下げ、資産価値を上げます。また、不動産を保有する重みを知っているからこそ、オーナー様には修繕費を包み隠さずお伝えいたします。
                    </p>
                    <div class="point">
                        <p class="point_ttl">
                            Point
                        </p>
                        <p class="point_item">
                            ● <span>必要以上な工事は一切なし</span>
                        </p>
                        <p class="point_item">
                            ● <span>ランニングコストを下げ、資産価値を上げる</span>
                        </p>
                        <p class="point_item">
                            ● <span>修繕費を包み隠さずお伝え</span>
                        </p>
                    </div>
                </div>
                <div class="sect_5__inner-realestate--right">
                    <img class="pic" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-sec5.png" alt="">
                    <div class="c-img_box03">
                        <div class="c-img_box03__txt">
                            <p class="c-img_box03__ttl">Point</p>
                            <p class="c-img_box03__sub">2</p>
                        </div>
                    </div>
                </div>
                <p class="txt_ttl u-d-n-pc br-point">
                    余計な管理コストを <br class="br-pc">
                    かけない
                </p>
            </div>
        </div>
    </section>

    <section class="sect_6">
        <div class="l-wrap">
            <div class="sect_6__box-big-new">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_6_box-1.png" alt="">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_6_box-1-sp.png" alt="">
            </div>
            <div class="sect_6__box-big-new2">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_6_box-2.png" alt="">
            </div>
            <div class="sect_6__box-big-new3">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_6_box-3.png" alt="">
            </div>
            <div class="sect_6__inner-realestate">
                <div class="sect_6__inner-realestate--left">
                    <p class="txt_ttl u-d-n-sp">
                        賃貸管理をトータルサポート
                    </p>
                    <p class="text">
                        丸の内ルーフは「仲介業者」ではありません。オーナー様や入居者様の「幸せ」をお手伝いすることを第一に考え、収益不動産を自社所有する「プロのオーナー」です。不動産買取後の「バリューアップ」はそのための手段であり私たちの強みです。費用対効果をしっかり見極めた上で、物件の問題点を解消し、資産価値を高めるための経験とノウハウがあります。
                    </p>
                    <div class="point">
                        <p class="point_ttl">
                            Point
                        </p>
                        <p class="point_item">
                            ● <span>費用対効果をしっかり見極める</span>
                        </p>
                        <p class="point_item">
                            ● <span>物件の問題点を解消</span>
                        </p>
                        <p class="point_item">
                            ● <span>資産価値を高める経験とノウハウ</span>
                        </p>
                    </div>

                </div>
                <div class="sect_6__inner-realestate--right">
                    <img class="pic" src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/rem-img-sec6.png" alt="">
                    <div class="c-img_box03">
                        <div class="c-img_box03__txt">
                            <p class="c-img_box03__ttl">Point</p>
                            <p class="c-img_box03__sub">3</p>
                        </div>
                    </div>
                </div>
                <p class="txt_ttl u-d-n-pc">
                    賃貸管理をトータルサポート
                </p>

                <a class="c-buttonREP red" href="#">
                    <p class="txt">お問い合わせ・ご相談</p>
                    <img src="<?php echo $imagedir ?>/release/image/page/groupbusiness/arrow_1.svg" alt="">
                </a>
            </div>
        </div>
    </section>

    <section class="sect_7">
        <div class="l-wrap">
            <div class="sect_7__box-big-new">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_7_box-1.png.png" alt="">
            </div>
            <div class="sect_7__box-big-new2">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_7_box-2.png.png" alt="">
            </div>
            <div class="sect_7--top-casestudy">
                <div class="sect_7__eng--ttl">
                    CASE STUDIES
                </div>
                <div class="sect_7__header">
                    バリューアップ事例
                </div>
                <div class="sect_7__header--sub">
                    20年で500棟の売買、2000戸、100テナントの管理・運用を行なってきた丸の内ルーフ。ここではその事例の一部をご紹介します。<br class="u-d-n-sp">
                    お客様の物件の稼働率および資産価値の向上のため、きめ細やかなアプローチを行なっています。
                </div>
            </div>
            <div class="sect_7-cntnt">
                <div class="sect_7-cntnt-box-big-newest2">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_7_box-2.png.png" alt="">
                </div>
                <div class="crd-wrppr">
                    <div class="c-cards09">
                        <div class="c-cards09-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/top-page/sec5_img1.png" alt="">
                            <div class="c-cards09-img-num">
                                <p>01</p>
                            </div>
                            <a class="c-cards09-img-view" href="#">
                                <p>VIEW <br>MORE</p>
                            </a>
                        </div>
                        <div class="c-cards09-desc">
                            <p class="c-cards09-desc-ttl">築30年の大規模 <br>リノベーション
                            </p>
                            <p class="c-cards09-desc-txt"> 室内フルリフォームで<br>快適空間。</p>
                        </div>
                    </div>

                    <div class="c-cards09">
                        <div class="c-cards09-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/top-page/sec5_img2.png" alt="">
                            <div class="c-cards09-img-num">
                                <p>02</p>
                            </div>
                            <a class="c-cards09-img-view" href="#">
                                <p>VIEW <br>MORE</p>
                            </a>
                        </div>
                        <div class="c-cards09-desc">
                            <p class="c-cards09-desc-ttl">エントランスの <br>バリューアップ
                            </p>
                            <p class="c-cards09-desc-txt">住宅地エリアで<br>目を引く存在に</p>
                        </div>
                    </div>

                    <div class="c-cards09">
                        <div class="c-cards09-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/top-page/sec5_img3.png" alt="">
                            <div class="c-cards09-img-num">
                                <p>03</p>
                            </div>
                            <a class="c-cards09-img-view" href="#">
                                <p>VIEW <br>MORE</p>
                            </a>
                        </div>
                        <div class="c-cards09-desc">
                            <p class="c-cards09-desc-ttl">境界部分にも <br>アプローチ
                            </p>
                            <p class="c-cards09-desc-txt"> 居住者の満足度向上も<br>叶えた事例</p>
                        </div>
                    </div>

                    <div class="c-cards09">
                        <div class="c-cards09-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/top-page/sec5_img4.png" alt="">
                            <div class="c-cards09-img-num">
                                <p>04</p>
                            </div>
                            <a class="c-cards09-img-view" href="#">
                                <p>VIEW <br>MORE</p>
                            </a>
                        </div>
                        <div class="c-cards09-desc">
                            <p class="c-cards09-desc-ttl">居室部分の<br>リノーベションが好評
                            </p>
                            <p class="c-cards09-desc-txt"> 空室率の大幅改善に<br>つながった成功例</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="c-buttonCase">
                    <p class="txt">その他の事例を見る</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/case/btn_arrow.svg" alt="">
                </a>
            </div>
            <!-- <div class="sect_7--inner-casestudy">
                <div class="c-card06">
                    <div class="c-card06__top">
                        <div class="c-card06_pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/card_img1.png" alt="">
                        </div>
                    </div>
                    <div class="c-card06__bottom">
                        <p class="card_ttl">
                            築30年の大規模<br>
                            リノベーション
                        </p>
                        <p class="desc">
                            室内フルリフォームで<br>
                            快適空間
                        </p>
                    </div>
                </div>

                <div class="c-card06">
                    <div class="c-card06__top">
                        <div class="c-card06_pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/card_img2.png" alt="">
                        </div>
                    </div>
                    <div class="c-card06__bottom">
                        <p class="card_ttl">
                            エントランスの <br>
                            バリューアップ
                        </p>
                        <p class="desc">
                            住宅地エリアで <br>
                            目を引く存在に
                        </p>
                    </div>
                </div>

                <div class="c-card06">
                    <div class="c-card06__top">
                        <div class="c-card06_pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/card_img3.png" alt="">
                        </div>
                    </div>
                    <div class="c-card06__bottom">
                        <p class="card_ttl">
                            境界部分にも <br>
                            アプローチ
                        </p>
                        <p class="desc">
                            居住者の満足度向上も <br>
                            叶えた事例
                        </p>
                    </div>
                </div>

                <div class="c-card06">
                    <div class="c-card06__top">
                        <div class="c-card06_pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/card_img4.png" alt="">
                        </div>
                    </div>
                    <div class="c-card06__bottom">
                        <p class="card_ttl">
                            居室部分の <br>
                            リノーベションが好評
                        </p>
                        <p class="desc">
                            空室率の大幅改善に <br>
                            つながった成功例
                        </p>
                    </div>
                </div>

            </div> -->
            <!-- 
            <div class="c-buttonREP">
                <p class="txt">その他の事例を見る</p>
                <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
            </div> -->
        </div>

    </section>

    <section class="sect_8">
        <div class="l-wrap">
            <div class="sect_8__box-big-new">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_8_box-1.png.png" alt="">
            </div>
            <div class="sect_8__box-big-new2">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_8_box-2.png.png" alt="">
            </div>
            <div class="sect_8--top">
                <div class="sect_8__eng--ttl">
                    Questions
                </div>
                <div class="sect_8__header u-d-n-sp">
                    丸の内ルーフの収益不動産の売買<br class="u-d-n-sp">
                    よくある質問
                </div>
                <div class="sect_8__header u-d-n-pc">
                    ルーフの収益不動産の売買 <br>
                    よくある質問
                </div>

            </div>
        </div>
        <div class="sect_8--inner">
            <div class="l-wrap">
                <div class="sect_8__box-big-new3">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/realestate/sect_8_box-3.png.png" alt="">
                </div>
                <div class="c-card07">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>
                <div class="c-card07">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>
                <div class="c-card07">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>

                <div class="space hide-sp"></div>

                <div class="c-card07">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>
                <div class="c-card07">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>
                <div class="c-card07 bd-pr-n">
                    <div class="c-card07__top">
                        <p class="Question">Q</p>
                        <p class="qtext">
                            この文章はダミーです<br>
                            この文章はダミーです
                        </p>
                    </div>
                    <div class="c-card07__bottom">
                        <p class="Answer">A</p>
                        <p class="atext">
                            ◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●◯◯◯◯◯◯◯◯◯◯●
                        </p>
                    </div>
                </div>
                <!-- <div class="sect_8__btn--wrap">
                    <a class="c-buttonREP" href="#">
                        <p class="txt">収益不動産の買取について</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>

                    <a class="c-buttonREP" href="#">
                        <p class="txt">収益不動産の売却について</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div> -->
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>