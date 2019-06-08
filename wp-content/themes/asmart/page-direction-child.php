<?php
/*
 * Template Name: Страница Направлений Подразделы
 */

get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black"><?php the_title(); ?></h1>
                    <div class="content">
                        <?php
                        while (have_posts()) : the_post();

                            the_content();

                        endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
