<?php
/*
 * Template Name: Страница  вакансий
 */
get_header(); ?>
    <div id="primary" class="content-area  ">
                <div class="container-custom ">
                    <div class="row">
                         <div class="col-sm-12 col-xs-12">
                        <?php dimox_breadcrumbs(); ?>
                             <h1 class="title  black"><?php the_title(); ?></h1>
                             <div id="vacancies-list">
                                 <?php
                                 $args = array(
                                     'posts_per_page' => '-1',
                                     'post_type' => 'vacancies',
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


                                         <accordion theme="main">
                                             <div slot="title"><?= get_the_title($post_id); ?></div>
                                             <?php the_content($post_id); ?>
                                             <div>
                                                 <a href="#" class="link-alt-two">
                                                     Отправить резюме
                                                 </a>
                                             </div>

                                         </accordion>


                                     <?php
                                     endwhile;
                                 endif;
                                 wp_reset_query();

                                 ?>

                             </div>
                         </div>
                    </div>
                </div>
    </div>


<?php get_footer();
