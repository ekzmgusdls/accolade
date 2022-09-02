addEventListener('DOMContentLoaded', () => {
    const mobileWidthStd = 800;

    new fullpage('#fullpage', {
        autoScrolling: true,
        scrollHorizontally: true,
        scrollingSpeed: 700,
        anchors: ['home', 'brand', 'fortuna', 'virtu', 'architect', 'location', 'gallery'],
        menu: '.nav',
        slidesNavigation: true,
        licenseKey: '9FC70B70-EE3A4072-95F27451-A24A1E71',
        scrollHorizontally: true,
        scrollHorizontallyKey: 'YWNjb2xhZGUxMDA5LmNvbV85MFNjMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDVuQ0U=',
        responsiveWidth: '800pxc ',
        afterLoad: function (origin, destination, direction, trigger) {
            var origin = this;
            // 웹인 경우
            if (innerWidth > mobileWidthStd) {
                if (direction === 'down') {
                    if ($('#header').css('display') !== 'flex') {
                        $('#header').css('display', 'flex').hide().fadeIn();
                    }
                } else {
                }
            }
            // 모바일인 경우
            if (innerWidth <= mobileWidthStd) {
                if (direction !== 'down') {
                    return;
                }

                if ($('#mobile-header').css('display') !== 'flex') {
                    $('#mobile-header').css('display', 'flex').hide().fadeIn();
                }
            }
        },
        onLeave: function (origin, destination, direction, trigger) {
            var origin = this;
            // 웹인 경우
            if (innerWidth > mobileWidthStd) {
                if (direction === 'down') {
                } else {
                    if (origin.index === 1) {
                        $('#header').fadeOut();
                    }
                }
            }
            // 모바일인 경우
            if (innerWidth <= mobileWidthStd) {
                if (direction === 'down') {
                } else {
                    if (origin.index === 1) {
                        $('#mobile-header').fadeOut();
                    }
                }
            }

            if (destination.anchor !== 'home') {
                $('#video').stop();
                $('#video').fadeOut();
            }
        },

        afterRender: function () {
            const swiper = new Swiper('.gallery', {
                // Optional parameters
                effect: 'fade',

                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        },
    });

    setTimeout(function () {
        $('#video').css('display', 'flex').hide().fadeIn(1200);
    }, 4000);

    // makeVideoResponsible();
    addEventListener('resize', () => {
        // makeVideoResponsible();
        // 웹일때
        if (innerWidth > mobileWidthStd) {
            $('#mobile-header').fadeOut();
        } else {
            $('#header').fadeOut();
        }
    });

    $('#mobile-header .menu-button').click(() => {
        $('#mobile-nav').css('display', 'flex').hide().fadeIn();
        $('#mobile-nav').click(() => {
            $('#mobile-nav').fadeOut();
        });
    });
});
