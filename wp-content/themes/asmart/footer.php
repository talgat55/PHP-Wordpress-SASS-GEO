</div><!-- #content -->
<?php
$phone = get_field('phone_main', 'option');
$email = get_field('email_main', 'option');
$redyPhone = $phone ? pregPhone($phone) : '';
?>
<footer class="site-footer">
    <div class="container-custom  ">
        <div class="row">


            <div class="first-row w-100">
                <div class="row">

                    <div class="col-md-6 col-xs-12">
                        <div class="content">
                            <h3 class="title">
                                Навигация
                            </h3>
                            <?php wp_nav_menu('menu_id=menu-main-footer&container=div&menu_class=bottom-main-container clearfix&theme_location=top_menu'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="content">
                            <h3 class="title">
                                Контакты
                            </h3>
                            <ul class="footer-contact-block">
                                <li>
                                    <a href="tel:<?= $redyPhone; ?>" class="link-clean"><?= $phone; ?></a>
                                </li>
                                <li>
                                    <a href="mailto:<?= $email; ?>" class="link-clean  email"><?= $email; ?></a>
                                </li>
                                <li>
                                    <a href="#" class="link-clean">
                                        г. Радужный, ул. Северная, 30
                                    </a>
                                </li>


                            </ul>

                        </div>


                    </div>
                </div>
            </div>
            <div class="second-row  w-100">
                <div class="row">
                    <div class="col-lg-6 col-xs-12 text-left">
                        <p class="copyright">
                            ГК «ГеоЛад» © 2019 г. Все права защищены
                        </p>
                    </div>
                    <div class="col-lg-6 col-xs-12 text-right">
                        <a target="_blank" class="bootom-copyright" title="Перейти на сайт разработчика"
                           href="http://asmart-group.ru/"><?php _e('Разработка сайта:', 'light'); ?>
                            <span>Asmart Group</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<!-- modal  -->
    <div class="custom-modal">
        <div class="d-flex w-100">
            <h3 class="title">
                Заказать звонок
            </h3>
        </div>
        <i class="fas fa-times"></i>
        <div class="content">
            <?= do_shortcode('[contact-form-7 id="168" title="Звонок"   html_class="call-form"]'); ?>
        </div>

    </div>
    <div class="overlay-layer"></div>
</body>
</html>
