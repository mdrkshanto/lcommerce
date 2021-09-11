$(document).ready(function(){
    $(".latestProducts").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ],
    });
    $(".bestSelling").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ],
    });
    $(".recentlyViewed").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ],
    });
    $(".productPage .productThumbnail").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        draggable: false
    });



    $('.xzoomLens, .xzoomgalleryLens').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
        var isTouchSupported = 'ontouchstart' in window;

        if (isTouchSupported) {
            //If touch device
            $('.xzoomLens').each(function(){
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });
            
            $('.xzoomLens').each(function() {
                var xzoom = $(this).data('xzoom');
                $(this).hammer().on("tap", function(event) {
                    event.pageX = event.gesture.center.pageX;
                    event.pageY = event.gesture.center.pageY;
                    var s = 1, ls;
    
                    xzoom.eventmove = function(element) {
                        element.hammer().on('drag', function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            xzoom.movezoom(event);
                            event.gesture.preventDefault();
                        });
                    }
    
                    xzoom.eventleave = function(element) {
                        element.hammer().on('tap', function(event) {
                            xzoom.closezoom();
                        });
                    }
                    xzoom.openzoom(event);
                });
            });

        }



});