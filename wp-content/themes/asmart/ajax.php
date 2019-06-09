<?php
require_once("../../../wp-load.php");

if($_GET['page']){

    $args = array(
        'posts_per_page' => '2',
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'paged' => ($_GET['page']) ? $_GET['page'] : 1

    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        $output=[];
        while ($the_query->have_posts()) :
            $the_query->the_post();
            $post_id = $the_query->post->ID;
            array_push($output,[
                'link'      => get_the_permalink(get_the_ID()),
                'title'     => get_the_title(get_the_ID()),
                'date'      =>  get_the_date('d.m.Y'),
                'excerpt'   => mb_strimwidth(get_the_content(get_the_ID()), 0, 100, ""),
                'image'     =>  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "news-image")[0]
            ]);

        endwhile;
    else:
        $output=[];
    endif;
    wp_reset_query();
}
    echo json_encode($output);
?>