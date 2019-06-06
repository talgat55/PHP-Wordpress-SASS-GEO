<?php
/*
 * Template Name: Страница контактов
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row  padding-bottom-80">
                <div class="col-sm-12 col-xs-12">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black"><?php the_title(); ?></h1>

                    <div class="row contact-block">

                        <div class="item col-sm-4  col-xs-12  text-left">

                            <h3>
                                Адрес:
                            </h3>
                            <ul>
                                <li>
                                    г. Радужный
                                </li>
                                <li>
                                    ул. Северная, 30
                                </li>
                            </ul>
                        </div>

                        <div class="item col-sm-4  col-xs-12  text-left">

                            <h3>
                                Время работы:
                            </h3>
                            <ul>
                                <li>
                                    пн. - пт 09.00 - 18.00


                                </li>

                            </ul>
                        </div>


                        <div class="item col-sm-4  col-xs-12  text-left">

                            <h3>
                                Телефон:
                            </h3>
                            <ul>
                                <li>
                                    <a href="tel:+73466852909" class="link-phone">
                                        +7 (34668) 52-909
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div id="map"></div>
    </div>
<?php get_footer();
