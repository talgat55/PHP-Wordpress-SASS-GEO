<?php

/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {

    $menu_arr = array(
        'top_menu' => 'Топ Меню'
    );


    register_nav_menus($menu_arr);


}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size('product-item', 244, 300, true);
add_image_size('event-image', 370, 310, true);
add_image_size('news-image', 320, 205, true);

/**
 * Enqueue scripts and styles.
 */
function th_scripts()
{

    if (is_page_template('page-about.php') || is_home() || is_page_template('page-menu.php')) {

        $slick = true;
    } else {
        $slick = false;
    }

    // Theme stylesheet.
    wp_enqueue_style('bootstrapcdn', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');


    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    if (is_page_template('login-page.php')) {
        wp_enqueue_style('login-page', get_theme_file_uri('/assets/css/login-page.css'), array(), '');
    }

    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.min.css'), array(), '');




    if ($slick) {

        wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '1.0');
        wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');

    }

    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');


    // wp_enqueue_script('vue-dev', get_theme_file_uri('/assets/js/vue_dev.js'), array(), '');
    wp_enqueue_script('vue-prod', get_theme_file_uri('/assets/js/vue_prod.js'), array(), '');
    if (is_page_template('page-vacancies.php')) {

        wp_enqueue_script('accordion-vue', get_theme_file_uri('/assets/js/components/accordion/accordion.js'), array(), '', true);

    }

    if (is_page_template('page-news.php')) {
        wp_enqueue_script('axios', get_theme_file_uri('/assets/js/axios.min.js'), array(), '', true);
        wp_enqueue_script('accordion-vue', get_theme_file_uri('/assets/js/components/news/load-more.js'), array(), '', true);


    }

    wp_enqueue_script('menu', get_theme_file_uri('/assets/js/components/menu/menu.js'), array(), '', true);

    if (is_page_template('page-contacts.php')) {

        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs&language=ru', array(), '2');
        wp_enqueue_script('maps', get_theme_file_uri('/assets/js/maps.js'), array(), '');

    }





    if ($slick) {
        wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
        wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
    }
    if (is_page_template('page-about.php')) {

        wp_enqueue_script('slider', get_theme_file_uri('/assets/js/components/slider/slider.js'), array(), '', true);

    }



//    wp_enqueue_script('jquery.pagepiling.min', get_theme_file_uri('/assets/js/jquery.pagepiling.min.js'), array(), '1');
//    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1.2');


}

add_action('wp_enqueue_scripts', 'th_scripts');




/*
*  Register Post Type  partners
*/

add_action('init', 'post_type_partners');

function post_type_partners()
{
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры',
        'all_items' => 'Партнеры',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "partners",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('partners', $args);
}

/*
*  Register Post Type  About page Banner
*/

add_action('init', 'post_type_banner_about');

function post_type_banner_about()
{
    $labels = array(
        'name' => 'Баннер о компании',
        'singular_name' => 'Баннер о компании',
        'all_items' => 'Баннер о компании',
        'menu_name' => 'Баннер о компании' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "slider_about",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('slider_about', $args);
}

/*
*  Register Post Type  partners
*/

add_action('init', 'post_type_vacancies');

function post_type_vacancies()
{
    $labels = array(
        'name' => 'Вакансии',
        'singular_name' => 'Вакансии',
        'all_items' => 'Вакансии',
        'menu_name' => 'Вакансии' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "vacancies",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('vacancies', $args);
}


/*
*  Rgister Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));
}




function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 2;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";


    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        if ($link != '1') {
            printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
        }

    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="link-next">%s</li>' . "\n", get_next_posts_link('<span> ' . __("Далее", "light") . '  </span>'));

    echo '</ul></div>' . "\n";

}


//
//function redirect_login_page()
//{
//    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
//    $page_viewed = basename($_SERVER['REQUEST_URI']);
//    if ($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
//        wp_redirect($login_page);
//        exit;
//    }
//}
//
//add_action('init', 'redirect_login_page');
//
//function login_failed()
//{
//    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
//    wp_redirect($login_page . '?login=failed');
//    exit;
//}
//
//add_action('wp_login_failed', 'login_failed');
//
//function verify_username_password($user, $username, $password)
//{
//    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
//    if ($username == "" || $password == "") {
//        wp_redirect($login_page . "?login=empty");
//        exit;
//    }
//}
//
//add_filter('authenticate', 'verify_username_password', 1, 3);
//function admin_default_page()
//{
//    return '/wp-admin';
//}
//
//add_filter('login_redirect', 'admin_default_page');
//function logout_page()
//{
//    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
//    wp_redirect($login_page . "?login=false");
//    exit;
//}
//
//add_action('wp_logout', 'logout_page');
//


/**
 * Replace symbols for phone
 * @param $phone
 * @return mixed
 */
function pregPhone($phone)
{

    return str_replace(['+', '(', ')', '-', ' ', '<span>', '</span>'], "", $phone);

}


/*
 * * Breadscrumb
 */

function dimox_breadcrumbs()
{

    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before = '<div class="breadcrumbs main flex-container"  itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '/'; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</li>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a href="/news"  ' . $link_attr . '>Новости</a>' . $link_after, $cats);


                echo $cats;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && !$parent_id) {
            $pageDirectChild = get_page_template_slug();
            if($pageDirectChild == 'page-direction-child.php' ){
                if ($show_current) echo $sep . $link_before .'<a href="/directions">Направления</a>' .  $link_after .$sep.  $before . get_the_title() . $after;
            }else{
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            }






        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }

        echo $wrap_after;

    }
}

/**
 * Build menu
 * @param array $elements
 * @param int $parentId
 * @return array
 */
function buildTreeMenu( $elements, $parentId = 0) {
    $branch = array();

    foreach ($elements as $element) {
        if ($element->menu_item_parent == $parentId) {

            $children = buildTreeMenu($elements, $element->ID);

            if ($children) {


                array_push($branch, [
                    'title'    =>  $element->post_title,
                    'url'      =>  $element->url,
                    'child'    =>  $children


                ]);
            }else{
                array_push($branch, [
                    'title' =>  $element->post_title,
                    'url'   =>  $element->url

                ]);

            }


        }
    }

    return $branch;
}
