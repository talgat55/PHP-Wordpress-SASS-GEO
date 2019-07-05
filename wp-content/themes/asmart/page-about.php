<?php
/*
 * Template Name: О компании
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row  padding-bottom-80">
                <div class="col-sm-12 col-xs-12">
                <div class="row">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black w-100"><?php the_title(); ?></h1>


                    <div class="first-block">
                        <div class="row  ">
                            <div class="content col-sm-8 col-xs-12">
                                Рекламный макет, пренебрегая деталями, недостаточно притягивает обществвенный сегмент
                                рынка. <span>Более того</span>, восприятие марки достижимо в разумные сроки. Организация
                                практического взаимодействия определяет медиаплан.<br>
                                <span>Представляется логичным,</span> что баинг и селлинг порождает экспериментальный
                                пресс-клиппинг. Партисипативное планирование наиболее полно усиливает клиентский спрос.
                                В соответствии с законом Ципфа, бизнес-модель охватывает рейтинг, учитывая современные
                                тенденции.<br>
                                Конкурент допускает комплексный охват аудитории, осознав маркетинг как часть
                                производства. <span>Инструмент маркетинга</span> подсознательно охватывает
                                экспериментальный анализ зарубежного опыта.

                            </div>
                            <div class="aside col-sm-4 col-xs-12">
                                <h4 class="title">
                                    Дата регистрации
                                </h4>
                                <p class="content">
                                    28.08.2012
                                </p>
                                <h4 class="title">
                                    Вид деятельности
                                </h4>
                                <p class="content">
                                    управление собственным имуществом, сдача в аренду движимого и недвижимого имущества
                                    структурам группы компании ГеоЛад
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="second-block w-100">

                        <div id="list-slider">


                            <ul class="list-slider-about">
                                <?php
                                $args = array(
                                    'posts_per_page' => '-1',
                                    'post_type' => 'slider_about',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status' => 'publish'

                                );

                                $the_query = new WP_Query($args);

                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) :
                                        $the_query->the_post();
                                        $post_id = $the_query->post->ID;
                                        ?>
                                        <li>
                                            <img src="  <?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "about-image")[0]; ?> "
                                                 alt="Изображение">
                                        </li>
                                        <?php
                                    endwhile;
                                endif;
                                wp_reset_query();

                                ?>

                            </ul>
                            <ul class="nav-arrow">
                                <li>
                                    <a href="#" class="prev"><i class='fas fa-chevron-left' aria-hidden='true'></i></a>
                                </li>
                                <li>
                                    <a href="#" class="next"><i class='fas fa-chevron-right' aria-hidden='true'></i></a>
                                </li>

                            </ul>

                        </div>


                    </div>
                    <div class="third-block">
                        <h2 class="sub-title">
                            Задачи компании
                        </h2>
                        <ul class="list-tasks">
                            <li class="flex-container">
                                <img src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                     alt="Иконка">
                                <p>
                                    Обеспечение контроля за использованием и сохранностью имущества
                                </p>
                            </li>
                            <li class="flex-container">
                                <img src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                     alt="Иконка">
                                <p>
                                    Эффективная реализация инвестиционных проектов, связанных с развитием группы
                                    компании Геолад
                                </p>
                            </li>
                            <li class="flex-container">
                                <img src="<?php echo get_theme_file_uri('/assets/images/arrow-active.png') ?>"
                                     alt="Иконка">
                                <p>
                                    Приобретение производственного оборудования и других категорий основных средств,
                                    отличающихся новыми характеристиками, более высокой производительностью, низким
                                    энергопотреблением, экономией ресурсов.

                                </p>
                            </li>


                        </ul>

                        <h2 class="sub-title">
                            Технопарк
                        </h2>
                        <div class="row  ">
                            <div class="content col-md-8 col-xs-12">
                                Транспортный цех АО «СНПХ» является стабильно развивающимся <span>структурным блоком,</span> основной
                                деятельностью которого является оказание широкого спектра транспортных услуг. В <span>его
                                    составе имеется</span> многофункциональная и мобильная техника отечественного и импортного
                                производства, предназначенная для выполнения всего комплекса технических,
                                технологических, транспортных операций на объектах нефтедобычи. Основная задача
                                обеспечение транспортом всех направлений деятельности компании, начиная от капитального
                                и текущего ремонта скважин, зарезки боковых стволов, мобильного бурения, заканчивая
                                кустовым бурением с эшелонной <span>буровой установки.</span><br>
                                Обладая широким диапазоном транспортных средств и квалифицированным персоналом,
                                транспортный цех имеет возможность решать вопросы, как в области перевозки пассажиров,
                                так и в области перевозки грузов, в том числе, негабаритных, <span>тяжеловесных и опасных,</span> а
                                также полное транспортное обслуживание бригад на всех стадиях производства.<br>
                                Для обеспечения бесперебойной работы компания регулярно обновляет и расширяет подвижной
                                парк <span>высокотехнологичной техники,</span> отвечающей современным стандартам безопасности и
                                экологии. Транспортный цех насчитывает более 3 тысяч единиц, включающий в себя <span>беговую
                                    технику,</span> спецтехнику, подъемные агрегаты и прочие транспортные средства. Парк техники
                                постоянно обновляется. Cрок службы у большинства транспортных средств – менее 3-х лет.
                            </div>
                            <div class="aside col-md-4 col-xs-12">
                                <img class="img-aside" src="<?php echo get_theme_file_uri('/assets/images/about1.jpg') ?>"
                                     alt="Изображение">
                                <img class="img-aside"  src="<?php echo get_theme_file_uri('/assets/images/about2.jpg') ?>"
                                     alt="Изображение">

                            </div>
                        </div>

                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
