<?php get_header();

$imagedir = get_template_directory_uri();

?>
<div class="page__content result">
    <div class="c-banner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-ruf-txt"><img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">株式会社ルーフ</a>
        <div class="c-inner">
            <img class="bnr_pc" src="<?php echo $imagedir ?>/release/image/page/result/result_bnr.png" alt="">
            <img class="bnr_sp" src="<?php echo $imagedir ?>/release/image/page/result/result_bnr_sp.png" alt="">
            <div class="c-banner--ttl">
                <p>株 式 会 社 ル ー フ<br class="br-sp">の 業 績</p>
                <p>The Results</p>
            </div>
        </div>
        <!-- <div class="bread_crumps">
            <p class="txt">TOP <span>></span> 企 業 情 報 <span>＞</span>業 績</p>
        </div> -->
        <div class="c-bread_crumps">
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="top-clip"></div>
    <div class="section_1">
        <!-- Clip Path -->
        <div class="clip-path">
            <div class="l-wrap">
                <div class="bg-sq">
                    <img src="<?php echo $imagedir ?>/release/image/page/result/bg_min_square.png" alt="">
                </div>
                <p class="section_1__ttl">The Results</p>
                <h1 class="c-case01__title result_ttl">【丸の内】ルーフはさらなる長期的<br class="u-d-n-pc">発展を目指して参ります。</h1>
                <p class="c-case01__sub result_sub">私たちルーフは創業以来、赤字を出すことなく、<br>利益水準を持続的に成長させてきました。</p>

                <!-- <div class="section_1__charts">
                    <div class="p-content-block__body">
                        <div class="p-result-chart">

                            <div class="p-result-chart__block">
                                <p class="p-result-chart__ttl">売上高の推移<span>（百万円）</span></p>
                                <div class="p-result-chart__chart p-result-chart__chart--sales">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                            <div class="p-result-chart__block">
                                <p class="p-result-chart__ttl">経常利益<span>（百万円）</span></p>
                                <div class="p-result-chart__chart p-result-chart__chart--sales">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myChart_sub" width="400" height="180"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="section_1__charts">
                    <div class="p-content-block__body">
                        <div class="p-result-chart">

                            <div class="p-result-chart__block">
                                <p class="p-result-chart__ttl">売上高の推移<span>（百万円）</span></p>
                                <div class="p-result-chart__chart p-result-chart__chart--sales">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="chart-income" width="400" height="200"></canvas>
                                </div>
                            </div>
                            <div class="p-result-chart__block">
                                <p class="p-result-chart__ttl">経常利益<span>（百万円）</span></p>
                                <div class="p-result-chart__chart p-result-chart__chart--sales">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="chart-current-profit" width="400" height="180"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="section_1__chart-ins">カーソルを合わせると各年度の<br class="br-sp">詳細な業績が見られます。<br>
                    スマホ、タブレットの場合、グラフを拡大してタップし<br class="u-d-n-pc">ていただくと数値がご覧いただけます。<br class="br-sp">※グループ会社の売上含まず</p>
                <div class="section_1__result_btns">
                    <a href="<?php echo get_permalink(get_page_by_path('companyinformation')) ?>" class="c-buttonCase">
                        <p class="txt">ルーフの会社概要を見る</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>

                    <a href="<?php echo get_permalink(get_page_by_path('interview')) ?>" class="c-buttonCase button-2">
                        <p class="txt">代表インタビューを見る</p>
                        <img src="<?php echo $imagedir ?>/release/image/page/case/btn_arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>