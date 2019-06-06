var app = new Vue({
    el: '#list-slider',

    mounted () {
        jQuery('.list-slider-about').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            prevArrow: jQuery('.nav-arrow .prev'),
            nextArrow: jQuery('.nav-arrow .next')

        });
    }
});