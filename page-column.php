<?php

/* Template Name: Blog Page */

get_header(); ?>
<div class="page__content column">
    <section class="column_head_sect">
        <div class="l-wrap">
            <div class="column_head u-d-f">
                <div class="column_head__left">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
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
        <div class="slider_wrapper tab_content">
            <div id="tab_1" class="tab_cont active">
                <div class="your-class slider_realestate">
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="tab_2" class="tab_cont">
                <div class="your-class slider_realestate">
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="tab_3" class="tab_cont">
                <div class="your-class slider_realestate">
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="post-item-img" src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-img-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sect_2">
        <div class="l-wrap u-d-f">
            <div class="left">
                <ul class="post-wrap u-d-f">
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
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <div class="page_navigation">
                    <?php wp_pagenavi(array('query' => $the_query)); ?>
                </div>
            </div>
            <div class="right">
                <div class="column-wrap">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-icon.svg" alt="">目的から探す</h3>
                    <div class="cat-wrap">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<a href="' . get_category_link($category->term_id) . '" class="cat"><span class="cat-hash">#</span>' . $category->name . '</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="column-access-ranking">
                    <h3><img src="<?php echo get_template_directory_uri(); ?>/release/image/page-column/column-crown-icon.svg" alt="">アクセスランキング</h3>
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
                                <li class="post_wrap_row">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="post">
                                            <figure>
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('full', array('class' => 'post-item-img'));
                                                } else {
                                                    echo '<img class="post-item-img" src="' . get_template_directory_uri() . '/release/image/page-column/no_img.png" alt="">';
                                                }
                                                ?>
                                            </figure>
                                            <div class="post_info">
                                                <p class="post_info_date"><?php echo get_the_date('Y.m.d'); ?></p>
                                                <p class="post_info_title"><?php the_title(); ?></p>
                                                <?php
                                                $category = get_the_category();
                                                if (!empty($category)) {
                                                    echo '<span class="cat"><span class="cat-hash">#</span>' .  $category[0]->cat_name . '</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>