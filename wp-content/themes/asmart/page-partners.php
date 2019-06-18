<?php
/*
 * Template Name: Страница  партнеров
 */
get_header(); ?>
    <div id="primary" class="content-area  ">
                <div class="container-custom ">
                    <div class="row">
                         <div class="col-sm-12 col-xs-12">
                        <?php dimox_breadcrumbs(); ?>
                             <h1 class="title  white"><?php the_title(); ?></h1>
                             <ul class="pathers-list flex-space-beetwen">
                                 <?php
                                 $args = array(
                                     'posts_per_page' => '-1',
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
                                         <li class="item  ">
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
                </div>
    </div>


<?php get_footer();
