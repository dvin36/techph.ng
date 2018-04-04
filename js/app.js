$(document).ready(function() {
    // Carousel Timer
    $('.carousel').carousel({
        interval: 2000
    })
});

$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        // Navabr Background color Switcher
        $("nav").addClass("navbar-fixed-top");
        $("nav").addClass("scrolled-navbar");
    } else {
        $("nav").removeClass("navbar-fixed-top");
        $("nav").removeClass("scrolled-navbar");
    }
});

$(document).ready(function() {
    $('.team-slide').slick({
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    console.log("slick");
});