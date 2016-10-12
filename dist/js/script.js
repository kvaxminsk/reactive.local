'use strict'

var myMap;

$(function() {

    var firstMenuOpen = false,
        mapOpen = false;

    if ($('#map').length > 0) {
        ymaps.ready(function() {
            init();
        });
    }


    $('.map-wrap').click(function() {
        if (mapOpen == false) {
            $('.footer-map').css('height', '400px');
            $(this).css('transform', 'translate(-50%,-50%) rotate(180deg)');
            var position = $(window).scrollTop() + 310;
            $('body, html').animate({
                scrollTop: position
            }, 300);
            mapExpand();
            mapOpen = true;
        } else {
            $('.footer-map').css('height', '90px');
            mapExpand();
            $(this).css('transform', 'translate(-50%,-50%) rotate(0deg)');
            mapOpen = false;
        }
    })

    createParallax();
    projectsCircleHover();
    rightMenuHover();
    upPageButton();
    initSliders();

    if ($('.single-number').length > 0) {
        setInterval(function() {
            if (isScrolledIntoView('.single-number')) {
                $('.number-container').each(function() {
                    var number = $(this).attr('data-number');
                    var currentNumber = -90 + number * 10;
                    $(this).css('transform', 'translateY(' + currentNumber + '%)');
                })
            }
        }, 1)
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
            if (firstMenuOpen == false) {
                $('.menu-icon').addClass('open');
                $('.menu-links').slideDown(500);
            }
            firstMenuOpen = true;
        } else {
            if (!$('.menu-icon').hasClass('open')) {

                $('.menu-icon').removeClass('open');
                $('.menu-links').slideUp(500);
            }
        }
    })

    $('.menu-icon-container').click(function() {
        $(this).find('#nav-icon3').toggleClass('open');
        if ($('.menu-links').is(':hidden')) {
            $('.menu-links').slideDown(500);
        } else {
            $('.menu-links').slideUp(500);
        }
    });


    projectPresentation();
    adaptiveShowSwitch();
    feedbackOpen();
    fullScreenContacts();
    feedbackInputsLableLock();
    showContactsMap();
});

function showContactsMap() {
    $('.contacts-map-show-button').click(function() {
        $('.contacts-map-information-line, .contacts-information, .contacts-path-image, .contacts-map-masc').fadeOut(500);
        $('.contacts-map-close').fadeIn(500);
    })
    $('.contacts-map-close').click(function() {
        $('.contacts-map-information-line, .contacts-information, .contacts-path-image, .contacts-map-masc').fadeIn(500);
        $('.contacts-map-close').fadeOut(500);
    })
}

function fullScreenContacts() {
    if ($(window).height() > 677) {
        if ($(window).width() > 1000) {
            $('.contacts-main-container').css('min-height', $(window).height());
        }
    }
}

function feedbackOpen() {
    $('.contacts-main-container .feedback-open-button').click(function() {
        if ($(this).hasClass('feedback-close-button')) {
            $('.contacts-main-container').removeClass('contacts-open-feedback');
            $(this).removeClass('feedback-close-button');
            $('.contacts-information').css('bottom', 0);
        } else {
            var feedbackHeight = $('.contacts-feedback').outerHeight();
            $('.contacts-main-container').addClass('contacts-open-feedback')
            $(this).addClass('feedback-close-button');
            $('.contacts-information').css('bottom', feedbackHeight);
        }
    })
    $('.project-feedback .feedback-open-button').click(function() {
        if ($(this).hasClass('feedback-close-button')) {
            $(this).removeClass('feedback-close-button');
            $('.project-feedback-content').slideUp(500);
        } else {
            $(this).addClass('feedback-close-button');
            var feedbackHeight = $('.project-feedback-content').outerHeight();
            var position = $(window).scrollTop() + feedbackHeight;
            $('.project-feedback-content').slideDown(500);
            $('body, html').animate({
                scrollTop: position
            }, 500);
        }
    })
}

function feedbackInputsLableLock() {
    $('.feedback-inputs input, .feedback-inputs textarea').keyup(function() {
        if ($(this).val().length > 0) {
            $(this).parent('.input-line').addClass('input-with-text');
        } else {
            $(this).parent('.input-line').removeClass('input-with-text');
        }
    })
}

function init() {
    myMap = new ymaps.Map('map', {
        center: [53.907830, 27.499796],
        zoom: 16
    }, {
        searchControlProvider: 'yandex#search'
    });
}

function mapExpand() {
    var yMapInterval = setInterval(function() {
        myMap.container.fitToViewport();
    }, 1);
    setTimeout(function() {
        clearInterval(yMapInterval);
    }, 300);
}


function createParallax() {
    var $slide = $('.background-slide'),
        slideBottom = $(window).height() - $slide.height();

    $(window).scroll(function() {
        $slide.css('background-position-y', $(window).scrollTop() / slideBottom * 100 + '%');
        $('.slider-slide-content').css('transform', 'translateY(-' + $(window).scrollTop() / slideBottom * 100 * 0.75 + '%)');
        $('.projects-navigation-slider').css('transform', 'translateY(-' + $(window).scrollTop() / slideBottom * 100 * 0.75 + '%)');
    });
}

function projectsCircleHover() {
    $('.single-project').hover(function() {
        $(this).find('.project-circle').next().addClass('upped-project-type');
    }, function() {
        $(this).find('.project-circle').next().removeClass('upped-project-type');
    })
}

function rightMenuHover() {
    $('.right-menu > div > div').hover(function() {
        $(this).addClass('hover-menu');
    }, function() {
        $(this).removeClass('hover-menu');
    })
}

function upPageButton() {

    $(window).scroll(function() {
        if ($(window).scrollTop() > $(window).height()) {
            $('.up-page-button').css('transform', 'translateY(0)');
        } else {
            $('.up-page-button').css('transform', 'translateY(100%)');
        }
    });

    $('.up-page-button').click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 1000);
    })
}

function showMoreProjects() {
    var blockCount = $('.single-project').length,
        blocksOnLine = 6,
        linesCount = blockCount / blocksOnLine,
        lineNumber;
    for (var i = 0; i < 3; i++) {
        $('.our-projects').append('<div class="single-project-line"></div>');
    }
    $('.single-project').each(function() {
        $(this).appendTo('.single-project-line').eq(1);
    })
    while (i < blockCount) {
        i++;
    }
    $('.more-projects-button').click(function() {

    })

}

function isScrolledIntoView(elem) {
    var $elem = $(elem);
    var $window = $(window);

    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();

    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function initSliders() {
    var $navSlider = $('.projects-navigation-slider .slider-body'),
        $projectsSlider = $('.projects-slider'),
        $backgroundSlider = $('.background-slider'),
        $projectIntroSlider = $('.project-intro-slider');

    // $projectIntroSlider.on('init',function (event, slick, currentSlide, nextSlide) {
    //     var $currentSlide = $('.project-intro-slide').eq(nextSlide + 1);
    //     $currentSlide.find('.project-intro-dots ul li').eq(nextSlide).css('background','red');
    // })

    $projectIntroSlider.slick({
        prevArrow: ('.project-intro-arrows .prev-arr'),
        nextArrow: ('.project-intro-arrows .next-arr')
    });

    // $projectIntroSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    //     var $currentSlide = $('.project-intro-slide').eq(nextSlide + 1);
    //     $currentSlide.find('.project-intro-dots ul li').eq(nextSlide).css('background','red');
    // });

    $('.our-partners-slider').slick({
        dots: false,
        slidesToShow: 6,
        prevArrow: ('.partners-prev-arrow'),
        nextArrow: ('.partners-next-arrow'),
        speed: 1500,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 5
            }
        }, {
            breakpoint: 1300,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 1000,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 700,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 500,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.device-display').each(function() {
        $(this).slick({
            arrows: false,
            autoplay: true
        })
    })

    $projectsSlider.slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        asNavFor: $navSlider,
        speed: 1500,
        infinite: true
    });

    $navSlider.slick({
        dots: false,
        centerMode: true,
        infinite: true,
        centerPadding: '0px',
        slidesToShow: 3,
        speed: 1500,
        prevArrow: ('.navigation-arrows .prev-arrow-container'),
        nextArrow: ('.navigation-arrows .next-arrow-container'),
        asNavFor: $projectsSlider,
        responsive: [{
            breakpoint: 1201,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $navSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $backgroundSlider.slick('slickGoTo', nextSlide);
    });

    $backgroundSlider.slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        infinite: true,
        vertical: true
    });
}


function projectPresentation() {
    var $presentationBlock = $('.project-presentation'),
        isPresentationShow = false;
    return;
    $presentationBlock.css('height', $(window).outerHeight());

    function presentationFixPosition() {
        var viewportTop = $(window).scrollTop(),
            presentationTop = $presentationBlock.offset().top;
        if (viewportTop > presentationTop / 10 * 9 && isPresentationShow == false) {
            $('body, html').animate({
                scrollTop: presentationTop
            }, 1000);
            $('body').css('overflow', 'hidden');
            $('.skip-presentation-button').css('opacity', '1');
            $('.project-presentation').css('overflow', 'auto');
            isPresentationShow = true;
        }
        if (viewportTop > $(window).outerHeight() + presentationTop) {
            isPresentationShow == false;
        }

    }

    presentationFixPosition();
    $(window).scroll(function() {
        presentationFixPosition();
    })

    $('.skip-presentation-button').click(function() {
        $('body').css('overflow', 'auto');
        $(this).css('opacity', '0');
        $('.project-presentation').css('overflow', 'hidden');
    })
}

function adaptiveShowSwitch() {
    var animationTimeout = 1501;

    adaptiveShowSwitch('adaptive-phone', 'adaptive-show-1', '.phone-switch');
    adaptiveShowSwitch('adaptive-tablet', 'adaptive-show-2', '.tablet-switch');
    adaptiveShowSwitch('adaptive-pc', 'adaptive-show-3', '.pc-switch');

    adaptiveIconsClick('.phone-switch', 'adaptive-show-1');
    adaptiveIconsClick('.tablet-switch', 'adaptive-show-2');
    adaptiveIconsClick('.pc-switch', 'adaptive-show-3');

    function adaptiveShowSwitch(targetClass, presentationPosition, iconClass) {
        $('.adaptive-device').click(function() {
            if ($(this).hasClass(targetClass)) {
                if (!$('.adaptive-show').hasClass(presentationPosition)) {
                    adaptiveShowRemoveClass();
                    $('.adaptive-show-switches > div').removeClass('active-switch');
                    $(iconClass).addClass('active-switch');
                    setTimeout(function() {
                        $('.adaptive-show').addClass(presentationPosition);
                    }, animationTimeout);
                }
            }
        })
    }

    function adaptiveIconsClick(iconClass, presentationPosition) {
        $(iconClass).click(function() {
            adaptiveShowRemoveClass();
            $('.adaptive-show-switches > div').removeClass('active-switch');
            $(this).addClass('active-switch');
            setTimeout(function() {
                $('.adaptive-show').addClass(presentationPosition);
            }, animationTimeout);
        })
    }

    function adaptiveShowRemoveClass() {
        $('.adaptive-show').removeClass('adaptive-show-1');
        $('.adaptive-show').removeClass('adaptive-show-2');
        $('.adaptive-show').removeClass('adaptive-show-3');
    }
}