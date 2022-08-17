addEventListener('DOMContentLoaded', () => {
    const mobileWidthStd = 800;
    function makeVideoResponsible() {
        const target = document.querySelector('video');
        if (target) {
            const currentRatio = innerWidth / innerHeight;
            const videoRatio = 16 / 9;
            if (videoRatio > currentRatio) {
                target.style.width = 'auto';
                target.style.height = '100vh';
            } else {
                target.style.height = 'auto';
                target.style.width = '100vw';
            }
        }
    }

    new fullpage('#fullpage', {
        autoScrolling: true,
        scrollHorizontally: true,
        scrollingSpeed: 700,
        anchors: ['home', 'brand', 'fortuna', 'virtu', 'architect', 'gallery'],
        menu: '.nav',
        slidesNavigation: true,
        licenseKey: '9FC70B70-EE3A4072-95F27451-A24A1E71',
        scrollHorizontally: true,
        scrollHorizontallyKey: 'YWNjb2xhZGUxMDA5LmNvbV85MFNjMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDVuQ0U=',

        afterLoad: function (origin, destination, direction, trigger) {
            var origin = this;
            // 웹인 경우
            if (innerWidth > mobileWidthStd) {
                if (direction === 'down') {
                    if (origin.index === 0) {
                        $('#header').css('display', 'flex').hide().fadeIn();
                    }
                } else {
                }
            }
            // 모바일인 경우
            if (innerWidth <= mobileWidthStd) {
                if (direction === 'down') {
                    if (origin.index === 0) {
                        $('#mobile-header').css('display', 'flex').hide().fadeIn();
                    }
                } else {
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

    makeVideoResponsible();
    addEventListener('resize', () => {
        makeVideoResponsible();
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
