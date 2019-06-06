<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>


    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <?php dimox_breadcrumbs(); ?>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h1 class="title  black"><?php the_title(); ?></h1>
                    <div class="img">
                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?>"
                             alt="Изображение"/>
                        <div class="date">
                            <?= get_the_date('d.m.Y'); ?>
                        </div>
                    </div>
                    <div class="content">
                        <?php  the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
