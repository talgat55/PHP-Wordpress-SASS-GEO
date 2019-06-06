<?php
/*
 * Template Name: Страница новостей
 */

get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="container-custom ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black"><?php the_title(); ?></h1>
                    <div id="news-list">
                    <ul >
                        <?php
                        $args = array(
                            'posts_per_page' => '2',
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish'

                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;

                                get_template_part('inc/item');

                            endwhile;
                        endif;
                        wp_reset_query();

                        ?>

                    </ul>
                    <a v-bind:class="[isFinished ? 'finish' : 'load-more']" @click='getPosts()' v-cloak>{{ buttonText }}</a>

                    </div>
                    <div>
                        <a class="load-more"  href="#" >
                            Показать ещё
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
