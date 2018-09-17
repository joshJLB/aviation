jQuery(document).ready(function( $ ) {
    // Slick
    $('.links-section-content').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        vertical: true,
        appendArrows: $('.links-section-links'),
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fal fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fal fa-angle-right' aria-hidden='true'></i></button>",
    }) ;
});//close all jquery