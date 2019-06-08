<?php
/*
 * Template Name: Страница Структура компании
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
                    <div class="kinds-block">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12 "></div>
                            <div class="item col-sm-4 col-xs-12">
                                <a href="#" class="item-walp">
                                    <h3 class="title">
                                        ГеоЛад-Актив
                                    </h3>
                                    <div class="content">
                                        управляющая компания
                                    </div>
                                    <div class="arrow">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                             alt="иконка">
                                        <img class="hover"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                             alt="иконка">

                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xs-12 "></div>


                        </div>
                        <div class="arrow">
                            <img
                                 src="<?php echo get_theme_file_uri('/assets/images/arrow-structure.png') ?>"
                                 alt="Изображение">
                        </div>
                        <div class="row">
                            <div class="item col-sm-4 col-xs-12">
                                <a href="#" class="item-walp">
                                    <h3 class="title">
                                        Геолад-ГИС
                                    </h3>
                                    <div class="content">
                                        геофизические и геолого - технологические исследования скважин
                                    </div>
                                    <div class="arrow">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                             alt="иконка">
                                        <img class="hover"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                             alt="иконка">

                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-12">
                                <a href="#" class="item-walp">
                                    <h3 class="title">
                                        Геолад - Скважинные Технологии
                                    </h3>
                                    <div class="content">
                                        текущий и капитальный ремонт скважин, бурение скважин
                                    </div>
                                    <div class="arrow">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                             alt="иконка">
                                        <img class="hover"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                             alt="иконка">

                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-12">
                                <a href="#" class="item-walp">
                                    <h3 class="title">
                                        ГеоЛад - Скважинные Технологии Поволжья
                                    </h3>
                                    <div class="content">
                                        реконструкция скважин методом ЗБС, текущий и капитальный ремонт скважин в
                                        Приволжском
                                    </div>
                                    <div class="arrow">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                             alt="иконка">
                                        <img class="hover"
                                             src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                             alt="иконка">

                                    </div>
                                </a>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php get_footer();
