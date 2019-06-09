<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="yandex-verification" content="b19eaf226c9b90c0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
<!--    <link rel="shortcut icon" href="--><?php //echo get_theme_file_uri('favicon.png?v=1.1') ?><!--" type="image/x-icon"/>-->

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url": "<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */

    </script>


</head>


<body <?php body_class(); ?>>

<?php if (is_home()) { ?>
    <!--<div id="hola">-->
    <!--    <div id="preloader">-->
    <!--        <div class="preloader-logo">-->
    <!--            <img  src="--><?php //echo get_theme_file_uri('/assets/images/Logo.png') ?><!--" alt="логотип">-->
    <!--        </div>-->
    <!--        <div class="preloader-bar">-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--        </div>-->
    <!--        <a href="#" class="close-preloader">-->
    <!--            --><?php // _e('Закрыть прелоадер', 'light'); ?>
    <!--        </a>-->
    <!--    </div>-->
    <!--</div>-->
<?php } ?>
<div id="page" class="site  <?= get_locale(); ?>">

    <header class="site-header clearfix">
        <div class="menu-bar">
            <a href="<?= home_url(); ?>" class="logo">
                <img src="<?php echo get_theme_file_uri('/assets/images/logo.png') ?>" alt="логотип">
            </a>
            <?php wp_nav_menu('menu_id=menu-main&container=nav&menu_class=top-main-container clearfix&theme_location=top_menu'); ?>

            <a href="#" class="link-presentation">
                Презентация о компании
            </a>
        </div>
    </header><!-- #masthead -->


    <div class="site-content-contain">
        <div id="top-bar">
            <?php
            $phone = get_field('phone_main', 'option');
            $email = get_field('email_main', 'option');
            $redyPhone = $phone ? pregPhone($phone) : '';
            ?>
            <div class="container-custom">
                <div class="row">
                    <div class="first-column col-sm-6 col-xs-12">
                            <div class="phone-block ">
                                <div class="img-block">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/phone.png') ?>"
                                         alt="иконка">
                                </div>
                                <div class="content">
                                    <a href="tel:<?= $redyPhone; ?>" class="link-clean"><?= $phone; ?></a>
                                </div>
                            </div>
                            <div class="email-block  ">
                                <div class="img-block">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/mail.png') ?>" alt="иконка">
                                </div>
                                <div class="content">
                                    <a href="mailto:<?= $email; ?>" class="link-clean"><?= $email; ?></a>
                                </div>
                            </div>

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <a href="#" class="link link-call">
                            Заказать звонок
                        </a>

                    </div>

                </div>

            </div>


        </div>

        <div id="content" class="site-content">
<!--            <ul id="menu">-->
<?php
//$items = wp_get_nav_menu_items( 'Menu 1' );
//$tree = buildTreeMenu($items);
//
//
//
////var_dump($tree->children);
//        foreach ($tree as $item){
//
//            ?>
<!---->
<!--            <menu-item theme="main" class="item">-->
<!---->
<!--                --><?php
//                if($item['child']){?>
<!--                <span slot="title"   href="--><?//=$item['url']; ?><!--"  >--><?//= $item['title']; ?><!--</span>-->
<!---->
<!---->
<!--                --><?php
//
//                    echo "<ul>";
//                            foreach ($item['child'] as $item_child){  ?>
<!---->
<!--                                <li class="item">-->
<!--                                    <a class="" href="--><?//= $item_child['url']; ?><!--" >--><?//= $item_child['title']; ?><!--</a>-->
<!--                                </li>-->
<!---->
<!--                            --><?php
//                            }
//                    echo "</ul>";
//
//                }else{ ?>
<!--                    <span slot="icon"></span>-->
<!--                    <span slot="title" >--><?//= $item['title']; ?><!--</span>-->
<!---->
<!--                --><?php //} ?>
<!---->
<!--            </menu-item>-->
<!--        --><?php
//        }
//
//?>
<!--            </ul>-->

