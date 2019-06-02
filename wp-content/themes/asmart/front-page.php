<?php
/*
 * Template Name: Домашняя страница
 */


get_header(); ?>
    <section class="first-block">
        <div class="clearfix">
            <div class="container-custom relative">
                <div class="row">
                    <h1 class="title text-left">Группа компаний «ГеоЛад»</h1>
                    <blockquote>
                        Состоит из 4 предприятий и основана <span>в 1998 году в городе «Радужный»,</span><br>
                        общая численность персонала группы — <span>500+</span> человек.
                    </blockquote>
                    <a href="#" class="link-alt">
                        Узнать подробнее
                    </a>
                    <div class="kinds-block">
                        <div class="row">
                            <div class="item col-sm-3 col-xs-12">
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
                            <div class="item col-sm-3 col-xs-12">
                                <a href="#" class="item-walp">
                                    <h3 class="title">
                                        ГеоЛад-Актив
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
                            <div class="item col-sm-3 col-xs-12">
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
                            <div class="item col-sm-3 col-xs-12">
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

    </section>
    <section class="second-block">
        <div class="container-custom relative">
            <div class="row">
                <h2 class="sub-title">
                    Миссия компании
                </h2>
                <p class="description">
                    <span>Динамичное развитие компании</span> и расширение спектра оказываемых услуг, <span>повышение технического потенциала компании</span>,
                    <span>совершенствование технологии</span> ведения работ, эффективное ведение производственной
                    деятельности, <span>обеспечение безаварийного производственного процесса</span> и безопасных условий
                    труда.<br>
                    А также, <span>минимизация негативного влияния своей деятельности на окружающую среду.</span>
                </p>
            </div>
        </div>
    </section>
    <section class="partners-block">
        <div class="container-custom relative">
            <div class="row">
                <div class="bar flex-space-beetwen">
                    <h2 class="sub-title white-title">
                        Наши партнеры
                    </h2>
                    <a href="#" class="link-alt">
                        Весь список
                    </a>

                </div>
                <ul class="pathers-list flex-space-beetwen">
                    <?php
                    $args = array(
                        'posts_per_page' => '5',
                        'post_type' => 'partners',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish'

                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $post_id = $the_query->post->ID;
                            $img_url = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full');
                            $link = get_field('link_partners', $post_id);

                            ?>
                            <li class="item">
                                <a href="<?= $link; ?>" target="_blank">
                                    <img src="<?= $img_url; ?>" alt="Логотип партнер"/>
                                </a>


                            </li>


                        <?php
                        endwhile;
                    endif;
                    wp_reset_query();

                    ?>

                </ul>
            </div>
        </div>
    </section>
    <section class="third-block relative">
        <div class="container-custom relative">
            <div class="row">
                <p class="description">
                    <span>Промоакция, в рамках сегодняшних воззрений,</span> традиционно искажает контент. Согласно
                    предыдущему,
                    соц-дем характеристика аудитории восстанавливает портрет потребителя. Пак-шот экономит фактор
                    коммуникации. <span>Рейтинг,</span> безусловно, версифицирован.<br>
                    <span> Практика однозначно показывает,</span> что спонсорство стабилизирует традиционный канал.
                    <span>Пресс-клиппинг</span>
                    основан на тщательном анализе данных. Медиамикс индуцирует пресс-клиппинг, оптимизируя бюджеты.
                </p>
            </div>
        </div>
    </section>
    <section class="map-block relative">
        <img src="<?php echo get_theme_file_uri('/assets/images/bg-four.jpg') ?>" alt="карта">

        <div class="content-block">
            <div class="container-custom relative">
                <div class="row">
                    <h2 class="sub-title white-title">
                        География компании
                    </h2>
                    <p class="description">
                        Рекламный блок упорядочивает бренд,<br> осознав маркетинг как часть производства.<br> Правда, специалисты отмечают, что<br> промоакция вырождена.

                    </p>
                </div>
            </div>
        </div>

    </section>
<?php get_footer();
