<?php
/*
 * Template Name: Страница Направлений
 */

get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                <div class="row">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black w-100"><?php the_title(); ?></h1>
                    <div class="content">
                        <?php
                        while (have_posts()) : the_post();

                            the_content();

                        endwhile; ?>
                    </div>
                    <div class="list-directions">
                        <div class="row">
                            <div class="item-col col-md-6 col-xs-12">
                                <a href="<?=arrayLinks('burenie-skvazhin'); ?>" class="item">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/d1.jpg') ?>"
                                         alt="Изображеине направления">
                                    <div class="overlay"></div>
                                    <h3 class="title">
                                        Бурение скважин
                                    </h3>
                                </a>
                            </div>
                            <div class="item-col  col-md-6 col-xs-12">
                                <a href="<?=arrayLinks('osvoenie-skvazhin'); ?>" class="item">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/d2.jpg') ?>"
                                         alt="Изображеине направления">
                                    <div class="overlay"></div>
                                    <h3 class="title">
                                        Освоение скважин
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="item-col-2 col-md-4 col-xs-12">
                                <a href="<?=arrayLinks('geofizicheskie-i-geologo-tehnologicheskie-isledovaniya-skvazhin'); ?>" class="item">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/d3.jpg') ?>"
                                         alt="Изображеине направления">
                                    <div class="overlay"></div>
                                    <h3 class="title two">
                                        Геофизические и геолого - технологические иследования скважин
                                    </h3>
                                </a>
                            </div>
                            <div class="item-col-2  col-md-4 col-xs-12">
                                <a href="<?=arrayLinks('tekushhij-i-kapitalnyj-remont-skvazhin'); ?>" class="item">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/d4.jpg') ?>"
                                         alt="Изображеине направления">
                                    <div class="overlay"></div>
                                    <h3 class="title two">
                                        Текущий и капитальный ремонт скважин
                                    </h3>
                                </a>
                            </div>
                            <div class="item-col-2  col-md-4 col-xs-12">
                                <a href="<?=arrayLinks('rekonstrukcziya-skvazhin-metodom-zbs'); ?>" class="item">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/d5.jpg') ?>"
                                         alt="Изображеине направления">
                                    <div class="overlay"></div>
                                    <h3 class="title two">
                                        Реконструкция скважин методом ЗБС
                                    </h3>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
