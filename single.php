<?php

/* Template Name: Article Page  */

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
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>

        <div class="col1">
            <ul class="post-wrap">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>
                <li class="post-item">
                    <div class="col1_txt heading01">
                        <p class="col1_txt01">
                            この文章はダミーです<br class="u-d-n-sp">
                            この文章はダミー<br class="u-d-n-pc">ですこの文章はダミーです
                        </p>

                        <p class="col1_txt02 u-d-n-sp">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                    </div>

                    <a href="" class="post-item-link">
                        <div class="post-item-info u-d-f">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'post-item-img'));
                            } else {
                                echo '<img class="post-item-img" src="' . get_template_directory_uri() . '/release/image/page-column/no_img.png" alt="">';
                            }
                            ?>
                            <!-- <div class="post-item-content">
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
                                                    $output .= '<span class="cat"><span class="cat-hash">#</span>' . esc_html($category->name) . '</span>';
                                                }
                                                echo trim($output);
                                            }
                                            ?>
                                        </div>
                                    </div> -->
                        </div>
                    </a>

                    <div class="col1_txt u-pt-20 u-d-n-pc">
                        <p class="col1_txt02">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                    </div>

                    <div class="overlay__box">
                        <p class="overlay__box--heading">目次 <span>[<span>hide</span>]</span></p>
                        <div class="box">
                            <p class="left">01</p>
                            <div class="right">
                                <p>この文書はダミーですこの文書はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                            </div>
                        </div>
                        <div class="box">
                            <p class="left">02</p>
                            <div class="right">
                                <p>この文書はダミーですこの文書はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                            </div>
                        </div>
                        <div class="box">
                            <p class="left">03</p>
                            <div class="right">
                                <p>この文書はダミーですこの文書はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                                <p><span>●</span>この文章はダミーです</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="post-item bottom_line">
                    <div class="col1_txt">
                        <p class="col1_txt03">この文章はダミーですこの文章はダミーです</p>
                    </div>

                    <div class="single_frame">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/single_img1.png" alt="">
                            <p>出典：文章はダミーです(出典、キャプションなど)</p>
                        </div>
                    </div>

                    <div class="col1_txt">
                        <p class="col1_txt02">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                        <p class="col1_txt02--sub">>>この文章はダミーです</p>
                    </div>

                    <div class="col1_txt">
                        <p class="col1_txt04">この文章はダミーですこの文章はダミーです</p>
                        <p class="col1_txt02">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                        <p class="col1_txt02--sub">>>この文章はダミーです</p>
                    </div>

                    <div class="col1_txt">
                        <p class="col1_txt04">この文章はダミーですこの文章はダミーです</p>
                        <p class="col1_txt02">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                    </div>

                    <div class="single_numbering">
                        <div class="single_number">
                            <p>01</p>
                            <p>この文書はダミーですこの文書はダミーです</p>
                        </div>
                        <div class="single_number">
                            <p>02</p>
                            <p>この文書はダミーですこの文書はダミーです</p>
                        </div>
                        <div class="single_number">
                            <p>03</p>
                            <p>この文書はダミーですこの文書はダミーです</p>
                        </div>
                    </div>

                    <div class="col1_txt">
                        <p class="col1_txt02 u-d-n-sp">
                            この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<span>この文章はダミーですこの文章はダミー</span>ですこの文章はダミーですこの文章はダミーですこの文章はダミーです140w
                        </p>
                        <p class="col1_txt02--sub">>>この文章はダミーです</p>
                    </div>

                    <div class="single_frame">
                        <img class="big_img" src="<?php echo get_template_directory_uri(); ?>/release/image/page/single/single_img2.png" alt="">
                    </div>
                </li>
            </ul>
            <div class="page_navigation">
                <!-- <?php wp_pagenavi(array('query' => $the_query)); ?> -->
                <div class="page_navigation_content">
                    <a href="#">
                        <span class="left_arrow"></span>
                        <p>前の記事</p>
                    </a>

                    <a href="#">TOP</a>

                    <a href="#">
                        <p>前の記事</p>
                        <span class="right_arrow"></span>
                    </a>
                </div>
            </div>
        </div>


        <div class="col2">
            <!-- <div class="column-wrap">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-icon.svg" alt="">目的から探す</h3>
                <div class="cat-wrap">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" class="cat"><span class="cat-hash">#</span>' . $category->name . '</a>';
                    }
                    ?>
                </div>
            </div> -->
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
                        'posts_per_page' => 8,
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
                                                        $output .= '<span class="cat"><span class="cat-hash">#</span>' . esc_html($category->name) . '</span>';
                                                    }
                                                    echo trim($output);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

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
                                                        $output .= '<span class="cat"><span class="cat-hash">#</span>' . esc_html($category->name) . '</span>';
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