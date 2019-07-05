<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$pagename = get_query_var('pagename');

?>
    <div id="primary" class="content-area  ">

        <div class="container-custom">
            <div class="row relative">
                <div class="content-custom">
                    <?php dimox_breadcrumbs(); ?>
                    <h1 class="title  black"><?php the_title(); ?></h1>
                    <?php
                    while (have_posts()) : the_post();

                        the_content();

                    endwhile;  ?>
                    <?php

                        if($pagename == 'geografiya-prisutstviya') {
                            $parent = get_field('data');

                            foreach ($parent as $item){

                                  print($item['child_data_info']);

                            }


                        }

                    ?>

                </div>
            </div>
        </div>
    </div>
<?php



if($pagename == 'geografiya-prisutstviya') {
    ?>
    <section class="map-block relative">
        <div id="map"></div>
    </section>

<?php } ?>

<?php get_footer();
