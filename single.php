<?php

get_header(); ?>
<div class="page__content column single_page">
    <section class="column_head_sect">
        <div class="l-wrap">
            <div class="column_head u-d-f">
                <div class="column_head__left">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/logo.svg" alt="">
                        <span>●●●●</span>COLUMN
                    </a>
                </div>
                <div class="column_head__right">
                    <span class="search_input">
                        <input type="text" class="" placeholder="キーワードで探す">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/search_icon.svg" alt="">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="jumbo_section">
        <div class="nav_tab">
            <ul class="tab_wrap u-d-f ">
                <li class="tab_wrap_item active">
                    <a href="tab_1" class="tab_wrap_item__link"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/yt_icon.svg" alt="">Youtube</a>
                </li>
                <li class="tab_wrap_item">
                    <a href="tab_2" class="tab_wrap_item__link"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/building_icon.svg" alt="">収益不動産</a>
                </li>
                <li class="tab_wrap_item">
                    <a href="tab_3" class="tab_wrap_item__link"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/mic_icon.svg" alt="">実績インタビュー</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="single_content">
        <!-- <div class="l-wrap"> -->
        <div class="c-bread_crumps">
            <?php echo do_shortcode('[aioseo_breadcrumbs]'); ?>
        </div>

        <div class="col1">

            <ul class="single-post">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="post-item bottom_line">
                        <div class="col1_txt heading01">
                            <h1 class="col1_txt01">
                                <?php echo get_the_title(); ?>
                            </h1>
                        </div>

                        <div class="col1--content">
                            <?php echo the_content(); ?>
                        </div>
                    </li>
                <?php endwhile; ?>

                <div class="page_navigation">
                    <div class="page_navigation_content">
                        <div class="prev">
                            <div class="p-pagination-width post-left post-pad-left">
                                <?php previous_post_link('%link', '<span class="left_arrow"></span> 前の記事') ?>
                            </div>
                        </div>
                        <div class="gototop">
                            <a href="#" class="page_navi_top">TOP</a>
                        </div>
                        <div class="next">
                            <div class="p-pagination-width post-right post-pad-right">
                                <?php next_post_link('%link', '次の記事 <span class="right_arrow"></span>') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="other_links">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/line.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/twitter.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/facebook.png" alt=""></a>
                </div>
            </ul>
        </div>


        <div class="col2">
            <div class="column-access-ranking">
                <div class="col2_icon1">
                    <img class="big_img" src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/single_icon1.png" alt="">
                    <p>その他の関連記事を<br class="u-d-n-pc">ご紹介いたします</p>
                </div>
                <ul class="post_wrap">
                    <?php
                    $sidepaged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                    $sideargs = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'paged' => $sidepaged,
                    );

                    $sidebar_query = new WP_Query($sideargs);
                    ?>
                    <?php if ($sidebar_query->have_posts()) : ?>
                        <?php while ($sidebar_query->have_posts()) : $sidebar_query->the_post(); ?>
                            <li class="post-item">
                                <a href="" class="post-item-link">
                                    <div class="post-item-info u-d-f">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => 'post-item-img'));
                                        } else {
                                            echo '<img class="post-item-img" src="' . get_template_directory_uri() . '/release/image/page-column/no_img.png" alt="">';
                                        }
                                        ?>
                                        <div class="post-item-content">
                                            <p class="post-item-content-date"><?php echo get_the_date('Y.m.d'); ?></p>
                                            <p class="post-item-content-title"><?php the_title(); ?></p>
                                            <?php the_excerpt(array('class' => 'post-item-content-excerpt u-d-n-sp')); ?>
                                            <div class="post-item-content-cat">
                                                <?php
                                                $categories = get_the_category();
                                                $separator = ' ';
                                                $output = '';
                                                if (!empty($categories)) {
                                                    foreach ($categories as $category) {
                                                        $output .= '<a href="' . get_category_link($category->term_id) . '" class="cat"><span class="cat-hash">#</span>' . $category->name . '</a>';
                                                    }
                                                    echo trim($output);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="col2_icon1">
                    <img class="big_img" src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/single_icon2.png" alt="">
                    <p>その他の関連タグ</p>
                </div>

                <div class="column-wrap">
                    <div class="cat-wrap">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<a href="' . get_category_link($category->term_id) . '" class="cat"><span class="cat-hash">#</span>' . $category->name . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>
</div>
<?php get_footer(); ?>