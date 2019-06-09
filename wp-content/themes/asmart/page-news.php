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
                    <ul class="list-news">


                        <li class="item flex-container-top"  v-for='post in posts'>
                            <div class="img-block">
                                <a :href="post.link">
                                    <img  :src="post.image"  alt="Изображение"/>
                                </a>
                            </div>
                            <div class="text">
                                <h3 class="title" >
                                    <a :href="post.link">
                                    {{ post.title }}
                                    </a>
                                </h3>
                                <div class="date" v-cloak>
                                    {{ post.date }}
                                </div>
                                <div class="excerpt" v-cloak>
                                    {{ post.excerpt }}
                                </div>
                                <a :href="post.link" class="link-more">
                                    Читать полностью
                                </a>
                            </div>

                        </li>
                    </ul>
                    <a  class="news-link" v-bind:class="[isFinished ? 'finish' : 'load-more']" @click='getPosts()' v-cloak>{{ buttonText }}</a>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php get_footer();
