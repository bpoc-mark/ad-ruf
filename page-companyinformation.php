<?php get_header();

$imagedir = get_template_directory_uri();

?>
<div class="page__content ci">
    <div class="c-banner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">株式会社ルーフ</a>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/company_information/company_info_bnr.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/company_information/company_info_bnr_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>会 社 概 要</p>
                <p>Company<br>
                    Information</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span> 企 業 情 報 <span>＞</span>会 社 概 要</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <div class="ci__section_1">
        <!-- //CLIP -->
        <!-- <div class="clip-path"> -->
        <div class="ci__main-content">
            <div class="l-wrap">
                <img class="ci__bg_1" src="<?php echo $imagedir ?>/release/image/page/case/bg_1.png" alt="">
                <div class="ci__main-content--row">

                    <div class="col">
                        <div class="infos">
                            <div class="info">
                                <div class="info_left il01">
                                    <div>
                                        <p>社名</p>
                                    </div>

                                </div>

                                <div class="info_right ir01">

                                    <div class="info_right-cont">
                                        <p>株式会社ルーフ</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>代表者</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p>代表取締役　木村 武史</p>
                                    </div>

                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>所在地</p>
                                </div>

                                <div class="info_right">

                                    <div class="info_right-cont">
                                        <p>〒100-6334<br>
                                            東京都千代田区丸の内2-4-1　<br class="u-d-n-pc">丸の内ビルディング34F 3401区 <br class="u-d-n-pc">THE PREMIER FLOOR<br></p>
                                        <p><span class="bullets">●</span>JR 東京駅…丸の内南口徒歩1分</p>
                                        <p><span class="bullets">●</span>東京メトロ 丸の内線<span class="sp-block">…東京駅より直結</span></p>
                                        <p><span class="bullets">●</span>東京メトロ 千代田線<span class="sp-block">…二重橋駅より直結</span></p>
                                    </div>

                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>連絡先</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p class="tel">電話 ： <a href="tel:+03-3211-0123">03-3211-0123</a>（代）<br class="u-d-n-pc"> <span class="u-d-n-sp">/</span> FAX　： <a href="tel:+03-3211-0234">03-3211-0234</a> <br class="u-d-n-pc"><span class="u-d-n-sp">/</span> Email： info@ruf.jp</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>設立</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p>2001年4月</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>資本金</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p>20,000千円</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>売上高</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p class="rslt-here">業績については <a href="<?php echo get_permalink(get_page_by_path('result')) ?>">こちら</a> を<br class="u-d-n-pc">ご覧ください。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>免許</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p>東京都知事(5)第79660号</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>加盟団体</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p>東京都宅地建物取引業協会会員：<br class="u-d-n-pc">千代田中央支部</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">

                                <div class="info_left">
                                    <p>取引金融機関</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont info_right-cont-flex">
                                        <div class="col_1">
                                            <p><span class="bullets">●</span>みずほ銀行</p>
                                            <p><span class="bullets">●</span>三菱UFJ銀行</p>
                                            <p><span class="bullets">●</span>三井住友銀行</p>
                                            <p><span class="bullets">●</span>りそな銀行</p>
                                            <p><span class="bullets">●</span>千葉銀行</p>
                                            <p><span class="bullets">●</span>関西みらい銀行</p>
                                            <p><span class="bullets">●</span>東日本銀行</p>
                                            <p><span class="bullets">●</span>武蔵野銀行</p>
                                            <p><span class="bullets">●</span>きらぼし銀行</p>
                                        </div>
                                        <div class="col_2">
                                            <p> <span class="bullets">●</span>SBJ銀行</p>
                                            <p><span class="bullets">●</span>京葉銀行</p>
                                            <p><span class="bullets">●</span>香川銀行</p>
                                            <p><span class="bullets">●</span>群馬銀行</p>
                                            <p><span class="bullets">●</span>静岡銀行</p>
                                            <p><span class="bullets">●</span>商工組合中央金庫</p>
                                            <p><span class="bullets">●</span>城北信用金庫</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>取引先</p>
                                </div>

                                <div class="info_right lw">
                                    <div class="info_right-cont info_right-cont-flex">
                                        <div class="col_1">
                                            <p><span class="bullets">●</span>株式会社青山財産ネットワークス</p>
                                            <p><span class="bullets">●</span>小田急不動産株式会社</p>
                                            <p><span class="bullets">●</span>株式会社キットモット</p>
                                            <p><span class="bullets">●</span>株式会社ケン・コーポレーション</p>
                                            <p><span class="bullets">●</span>コリアーズ・インターナショナル・ジャパン株式会社</p>
                                            <p><span class="bullets">●</span>サンフロンティア不動産株式会社</p>
                                            <p><span class="bullets">●</span>シービーアールイー株式会社</p>
                                            <p><span class="bullets">●</span>株式会社シーラ</p>
                                            <p><span class="bullets">●</span>スターツピタットハウス株式会社</p>
                                            <p><span class="bullets">●</span>スターツコーポレートサービス株式会社</p>
                                            <p><span class="bullets">●</span>住商建物株式会社</p>
                                            <p><span class="bullets">●</span>住友不動産販売株式会社</p>
                                            <p><span class="bullets">●</span>住友林業ホームサービス株式会社</p>
                                            <p><span class="bullets">●</span>住友林業レジデンシャル株式会社</p>
                                            <p><span class="bullets">●</span>生和コーポレーション株式会社</p>
                                            <p><span class="bullets">●</span>株式会社テンポアップ</p>
                                            <p><span class="bullets">●</span>東急リバブル株式会社</p>
                                            <p><span class="bullets">●</span>株式会社東京カンテイ</p>
                                            <p><span class="bullets">●</span>東京建物不動産販売株式会社</p>
                                        </div>
                                        <div class="col_2">
                                            <p><span class="bullets">●</span>東洋不動産株式会社</p>
                                            <p><span class="bullets">●</span>トーセイ・アセット・アドバイザーズ株式会社</p>
                                            <p><span class="bullets">●</span>日本資産総研株式会社</p>
                                            <p><span class="bullets">●</span>野村不動産ソリューションズ株式会社</p>
                                            <p><span class="bullets">●</span>ヒューリック株式会社</p>
                                            <p><span class="bullets">●</span>株式会社ビーロット</p>
                                            <p><span class="bullets">●</span>株式会社福田財産コンサル</p>
                                            <p><span class="bullets">●</span>ブラックストーン・グループ・ジャパン株式会社</p>
                                            <p><span class="bullets">●</span>みずほ信託銀行株式会社</p>
                                            <p><span class="bullets">●</span>みずほ不動産販売株式会社</p>
                                            <p><span class="bullets">●</span>三菱地所リアルエステートサービス株式会社</p>
                                            <p><span class="bullets">●</span>三菱UFJ信託銀行株式会社</p>
                                            <p><span class="bullets">●</span>三井住友信託銀行株式会社</p>
                                            <p><span class="bullets">●</span>三井住友トラスト不動産株式会社</p>
                                            <p><span class="bullets">●</span>三井不動産リアルティ株式会社</p>
                                            <p><span class="bullets">●</span>三菱地所株式会社</p>
                                            <p><span class="bullets">●</span>三菱地所リアルエステートサービス株式会社</p>
                                            <p><span class="bullets">●</span>モルガン・スタンレー・キャピタル株式会社</p>
                                            <p><span class="bullets">●</span>PAGインベストメント・マネジメント株式会社</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <div class="info_left">
                                    <p>事業内容</p>
                                </div>

                                <div class="info_right">
                                    <div class="info_right-cont">
                                        <p> <span class="bullets">●</span>収益不動産売買業務</p>
                                        <p> <span class="bullets">●</span>収益不動産管理業務</p>
                                        <p> <span class="bullets">●</span>不動産仲介業務</p>
                                        <p> <span class="bullets">●</span>企業・法人用不動産取扱業務</p>
                                        <p> <span class="bullets">●</span>不動産コンサルティング業務</p>
                                        <p> <span class="bullets">●</span>賃貸管理業務</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section_3">
                <div class="l-wrap pt100">
                    <div class="u-d-f u-d-f-jcc u-mt-60 ci--fd">
                        <a href="<?php echo get_permalink(get_page_by_path('about')) ?>" class="c-buttonCase ci--btn">
                            <p class="txt">ルーフについて</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                        <a href="<?php echo get_permalink(get_page_by_path('access ')) ?>" class="c-buttonCase ci--btn">
                            <p class="txt">アクセス情報を見る</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<?php get_footer(); ?>