<li class="item flex-container-top">
    <div class="img-block">
        <a href="<?= get_the_permalink(get_the_ID()); ?>">
            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "news-image")[0]; ?>"
                 alt="Изображение"/>
        </a>
    </div>
    <div class="text">
        <h3 class="title">
            <?= get_the_title(get_the_ID()); ?>
        </h3>
        <div class="date">
            <?= get_the_date('d.m.Y'); ?>
        </div>
        <div class="excerpt">
            <?= mb_strimwidth(get_the_content(get_the_ID()), 0, 100, ""); ?>
        </div>
        <a href="<?= get_the_permalink(get_the_ID()); ?>" class="link-more">
            Читать полностью
        </a>
    </div>

</li>