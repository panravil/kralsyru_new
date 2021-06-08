var triggerS;

$(document).ready(function() {

    // SCROLLBAR

    $('.scrollbar-inner').scrollbar();

    // NAVIGATION HIDE/SHOW ON SCROLL

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navBar = $('#nav-bar');
    var navBarLogo = $('#nav-bar .logo');
    var navbarHeight = navBar.outerHeight();

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            navBarLogo.addClass('logo-up');
            navBar.removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                navBarLogo.removeClass('logo-up');
                navBar.removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }

    // NAVIGATION MOBILE

    var hamburger = $('.hamburger'),
        navBarMobile = $('.nav-bar-mobile'),
        hamburgerX = $('.hamburger-close');

    hamburger.on('click', function() {
        navBarMobile.fadeIn(100);
        $('body').addClass('fixed');
    });

    hamburgerX.on('click', function() {
        navBarMobile.fadeOut(100);
        $('body').removeClass('fixed');
    });

    // ARROW SCROLL

    var arrow = $('.arrow-down');

    arrow.on('click', function(event) {
        $('html,body').animate({ scrollTop: $('.content').offset().top }, 600);
    });

    // BUY BUTTON SCROLL

    var btnBuy = $('.btn-buy-package');

    btnBuy.on('click', function(event) {
        $('html,body').animate({ scrollTop: $('.kolonial-package-headline').offset().top }, 300);
    });

    // SELECT POPUPS

    var cheeseLink = $('.select-href'),
        cheesePopup = $('.select-cheese-wrapper'),
        winePopup = $('.select-wines-wrapper'),
        overlayPopup = $('#overlayPopup'),
        closePopup = $('.close');

    winePopup.hide();
    overlayPopup.hide();
    cheesePopup.hide();

    cheeseLink.on('click', function(e) {
        e.preventDefault();

        if ($('.select-popup').hasClass('popupActive')) {
            $('.select-popup').hide();
        }

        $(this).parent().find('.select-popup').fadeIn(100).addClass('popupActive');
        overlayPopup.show();
        /*cheesePopup.fadeIn(100);*/
    });

    overlayPopup.on('click', function() {
        overlayPopup.hide();
        $('.select-popup').fadeOut(100);
    });

    closePopup.on('click', function() {
        $('.select-popup').fadeOut(100);
        overlayPopup.hide();
    });

    // SLIDER

    $('#slider-cheese').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        infinite: false,
        arrows: true,
        dots: false,
        centerPadding: "10%",
        focusOnSelect: false,
        initialSlide: 2,
        draggable: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    initialSlide: 0,
                    infinite: true,
                    draggable: true
                },
            },
            {
                breakpoint: 960,
                settings: {
                    draggable: true,
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "30%"
                }
            },
            {
                breakpoint: 768,
                settings: {
                    draggable: true,
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "25%",
                    arrows: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    draggable: true,
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "20%",
                    arrows: false
                }
            }
        ]
    });

    //$('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');

    triggerS = false;

    if ($(window).width() < 1200) {
        triggerS = true;
    }

    $(window).on('resize', function(e) {
        if ($(window).width() < 1200) {
            triggerS = true;
        } else {
            triggerS = false;
        }

    });

    if (triggerS == false) {

        sliderChange();

    } else {
        $('.slick-prev').removeClass('slick-disabled').css('pointer-events', 'all');
        $('.slick-next').removeClass('slick-disabled').css('pointer-events', 'all');
    }

    function sliderChange() {
        $('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');
        $('#slider-cheese').on('afterChange', function(event, slick, currentSlide) {
            if (currentSlide === 6) {
                $('.slick-next').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-next').removeClass('slick-disabled').css('pointer-events', 'all');
            }

            if (currentSlide === 2) {
                $('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-prev').removeClass('slick-disabled').css('pointer-events', 'all');
            }
        });
    }
    $('#slider-cheese').on('afterChange', function(event, slick, currentSlide) {
        if ($(window).width() >= 1200) {

            if (currentSlide === 7) {
                $('.slick-next').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-next').removeClass('slick-disabled').css('pointer-events', 'all');
            }

            if (currentSlide === 2) {
                $('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-prev').removeClass('slick-disabled').css('pointer-events', 'all');
            }
        }
    });


    $('#slider-cheese-2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        infinite: false,
        arrows: true,
        dots: false,
        focusOnSelect: false,
        initialSlide: 2,

        responsive: [{
                breakpoint: 20000,
                settings: {
                    slidesToShow: 3,
                    initialSlide: 2,
                    infinite: true
                },
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "30%"
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "25%",
                    arrows: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "20%",
                    arrows: false
                }
            }
        ]
    });
    $('#slider-box').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        infinite: false,
        arrows: true,
        dots: false,
        centerPadding: "10%",
        focusOnSelect: false,
        initialSlide: 2,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    initialSlide: 2,
                    infinite: true
                },
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "30%"
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "25%",
                    arrows: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0,
                    centerMode: true,
                    infinite: true,
                    centerPadding: "20%",
                    arrows: false
                }
            }
        ]
    });

    var numOfSlides = $("#slider-box").find(".slide").length;
    $('#slider-box').find('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');

    $('#slider-box').on('afterChange', function(event, slick, currentSlide) {
        if ($(window).width() >= 1200) {

            if (currentSlide >= (numOfSlides - 2)) {
                $('.slick-next').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-next').removeClass('slick-disabled').css('pointer-events', 'all');
            }

            if (currentSlide <= 2) {
                $('.slick-prev').addClass('slick-disabled').css('pointer-events', 'none');
            } else {
                $('.slick-prev').removeClass('slick-disabled').css('pointer-events', 'all');
            }
        }
    });

    $('.slider--headlines').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        infinite: false,
        adaptiveHeight: true,
        asNavFor: '.slider--images, .slider--texts'
    });


    $('.slider--texts').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        infinite: false,
        adaptiveHeight: true,
        asNavFor: '.slider--images, .slider--texts'
    });

    $('.slider--images').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider--texts, .slider--headlines',
        centerMode: true,
        infinite: false,
        arrows: true,
        dots: true,
        centerMode: true,
        centerPadding: "0px",
        focusOnSelect: true,
        mobileFirst: true,
        responsive2: [{
            breakpoint: 1024,
            settings: {
                centerPadding: "10%",
            }
        }]
    });


    // CONTACT FORM

    var overlay = $('#overlay'),
        contactForm = $('#contact-form'),
        contactButton = $('#contact'),
        animationSpeed = 300,
        form = $('#form');

    overlay.hide();
    contactForm.hide();

    contactButton.on('click', function(e) {
        e.preventDefault();
        formShow();
    });

    overlay.on('click', function() {
        formHide();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function formShow() {
        $('body').addClass('fixed');
        overlay.fadeIn(animationSpeed, function() {
            contactForm.show().animate({ top: "50" }, animationSpeed);
        });
    }

    function formHide() {
        $('body').removeClass('fixed');
        contactForm.animate({ top: "-500" }, animationSpeed, function() {
            overlay.fadeOut(animationSpeed);
            $('.form-control').val('');
            $('#form').show();
            $('.form-success').hide();
        }).fadeOut(animationSpeed);
    };

    // AJAX SEND MAIL

    var ajaxRunning = false;

    form.on('submit', function(e) {
        e.preventDefault();
        console.log("form submit");

        if (!ajaxRunning) {
            ajaxRunning = true;
            $("#pageloader").fadeIn();

            $.ajax({
                type: "POST",
                url: "/kontakt",
                data: $(form).serialize(),
                success: function() {
                    $('#form').fadeOut(300, function() {
                        $('.form-success').fadeIn(300);
                    });
                    ajaxRunning = false;
                    $("#pageloader").fadeOut();
                },
                error: function(xhr, status, errorThrown) {
                    var errorMsg = xhr.responseJSON;
                    var errorCode = xhr.status;
                    console.log("status", xhr.status);
                    console.log(xhr.responseText);
                    if (errorCode == 422) {
                        console.log(errorMsg["message"]);
                        if (errorMsg.hasOwnProperty('errors')) {
                            if (errorMsg["errors"].hasOwnProperty('g-recaptcha-response')) {
                                alert(errorMsg["errors"]["g-recaptcha-response"]);
                            } else {
                                alert(errorMsg["errors"]);
                            }
                        } else {
                            alert(errorMsg["message"]);
                        }
                    } else {
                        alert(errorMsg["message"]);
                    }

                    ajaxRunning = false;
                    $("#pageloader").fadeOut();
                }
            });
        }

    });


    var videos = document.getElementsByClassName("covervid-video");

    if (videos.length > 0) {

        var video = videos[0];
        var videoFaded = false;

        if ($(video).data("type") === "hp") {
            video.addEventListener("timeupdate", function(e) {
                if (!videoFaded) {
                    $('.covervid-wrapper').fadeIn(300);
                    $('.covervid-video').coverVid(1280, 720);
                    videoFaded = true;
                }
            });
        } else {
            video.addEventListener("timeupdate", function(e) {
                var time = video.currentTime;

                if (!videoFaded) {
                    $('.covervid-wrapper').fadeIn(300);
                    $('.covervid-video').coverVid(1280, 720);
                    videoFaded = true;
                }

                if ((time > 9.5 && time < 12.5) || (time > 22 && time < 25)) {
                    $(".header").addClass("hide-claim");
                } else {
                    $(".header").removeClass("hide-claim");
                }
            });
        }

        video.play();
    }

    if ($(".content-columns-divider").length > 0) {

        function computeScrollStep() {

            var $dividers = $(".content-columns-divider").find(".divider-dot");

            var halfHeight = $(window).innerHeight() * 2 / 3;
            var scrollTop = $(window).scrollTop() + halfHeight;

            var step = 1;

            for (var i = 0; i < $dividers.length; i++) {

                var $divider = $($dividers[i]);

                if (scrollTop > $divider.offset().top) {
                    step = parseInt($divider.data("step"));
                }
            }

            $(".content-columns-divider .content-divider-rail")
                .removeClass("step-1")
                .removeClass("step-2")
                .removeClass("step-3")
                .removeClass("step-4")
                .addClass("step-" + step);
        }

        $(window).scroll(function() {
            computeScrollStep();
        });

        $(window).resize(function() {
            computeScrollStep();
        });
    }
});