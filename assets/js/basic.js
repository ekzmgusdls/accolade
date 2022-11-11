jQuery(document).ready(function ($) {
    const mobileWidthStd = 800;

    function adjustIframeRatio() {
        const videos = document.querySelectorAll('iframe');
        if (videos.length >= 1) {
            videos.forEach((video) => {
                const aspectRatio = video.getAttribute('width') / video.getAttribute('height');
                video.removeAttribute('width');
                video.removeAttribute('height');
                video.setAttribute('style', `aspect-ratio: ${aspectRatio}`);
            });
        }
    }

    function headerShow() {
        if ($('#header').css('display') !== 'flex') {
            $('#header').css('display', 'flex').hide().fadeIn();
        }
    }

    function headerHide() {
        $('#header').fadeOut();
    }

    function headerToggle() {
        const showBarometer = 40;
        if (innerWidth > mobileWidthStd) {
            if ($('.home').length > 0) {
                if (window.pageYOffset >= showBarometer) {
                    headerShow();
                } else {
                    headerHide();
                }
            } else {
                headerShow();
            }
        }
    }

    function registerBtnToggle() {
        const registerBtn = $('.register');

        if (window.pageYOffset + innerHeight + 30 >= $('body').height()) {
            registerBtn.fadeOut();
        } else {
            if (window.pageYOffset > innerHeight) {
                registerBtn.fadeIn();
            } else {
                registerBtn.fadeOut();
            }
        }
    }

    function sessionForPopup() {
        console.log(sessionStorage.getItem('popupBoolean'));
        if (sessionStorage.getItem('popupBoolean')) {
            $('.pop-up-container').remove();
            $('body').css('overflow', 'auto');
        }
    }

    $('.pop-up-container').click((e) => {
        if ($(e.target).hasClass('pop-up-container') || $(e.target).hasClass('exit')) {
            $('.pop-up-container').fadeOut();
            $('body').css('overflow', 'auto');

            if (!sessionStorage.getItem('popupBoolean')) {
                sessionStorage.setItem('popupBoolean', true);
            }
        }
    });

    // 전체동의를 조작했을때,
    $('.answer--allyes input').click(() => {
        // 전체동의가 체크가 되었을떄,
        if ($('.answer--allyes input').is(':checked')) {
            $('input[type="radio"][name="p"]').each(function (index, item) {
                if ($(item).attr('id') == 'p-agree') {
                    $(item).prop('checked', true);
                }
            });
            $('input[type="radio"][name="m"]').each(function (index, item) {
                if ($(item).attr('id') == 'm-agree') {
                    $(item).prop('checked', true);
                }
            });
        }
        // 전체 동의가 체크가 해제되었을때,
        else {
            $('input[type="radio"][name="p"]').each(function (index, item) {
                $(item).prop('checked', false);
            });
            $('input[type="radio"][name="m"]').each(function (index, item) {
                $(item).prop('checked', false);
            });
        }
    });

    // 각각의 동의 라인을 조작했을때,
    $('input[type="radio"][name="p"]').click(function () {
        if ($(this).attr('id') == 'p-disagree') {
            $('.answer--allyes input').prop('checked', false);
        }
    });
    $('input[type="radio"][name="m"]').click(function () {
        if ($(this).attr('id') == 'm-disagree') {
            $('.answer--allyes input').prop('checked', false);
        }
    });

    // 관심고객등록 팝업 엑싯버튼
    $('.register-popup__exit').click(() => {
        $('.register-popup').fadeOut();
        $('body').css('overflow', 'auto');
    });

    // $('.register__close').click(() => {
    //     $('.register').remove();
    // });

    // 관심고객등록 팝업 버튼
    $('.register__trigger').click(() => {
        $('.register-popup').css('display', 'grid').hide().fadeIn();
        $('body').css('overflow', 'hidden');
    });
    $('.register-trigger').click(() => {
        $('.register-popup').css('display', 'grid').hide().fadeIn();
        $('body').css('overflow', 'hidden');
    });
    if ($('.register-notice').length > 0) {
        setTimeout(function () {
            $('.register-notice').fadeOut();
        }, 2000);
    }

    let videoPlay = false;

    function playVideo() {
        if ($('.section--video').length > 0) {
            $('.section--video').offset();
            const currentPos = window.pageYOffset + innerHeight;
            const barometer = Math.floor($('.section--video').offset().top + $('.section--video').height() / 3);
            if (currentPos >= barometer && !videoPlay) {
                const newUrl = $('.section--video iframe').attr('src') + '&autoplay=1';
                $('.section--video iframe').attr('src', newUrl);
                videoPlay = true;
            }
        }
    }

    function menuShow() {
        $('.menu-trigger').click(() => {
            $('body').css('overflow', 'hidden');
            $('.menu-modal').css('transform', 'translateX(0)');
        });
    }

    function menuHide() {
        $('.menu-modal__exit').click(() => {
            $('.menu-modal').css('transform', 'translateX(-100%)');
            $('body').css('overflow', 'auto');
        });
    }

    function currentHashMenu() {
        const menuArr = [];
        $('#header .nav li').each((index, elem) => {
            menuArr.push($(elem).data('menuanchor'));
        });
        if (window.pageYOffset <= $('.section--main').height()) {
            history.pushState({}, '', ` `);
            $(`#header .nav li`).removeClass('active');
        }

        $(menuArr).each((index, elem) => {
            if ($(`#${elem}`).offset().top + $(`#${elem}`).height() > window.pageYOffset && window.pageYOffset >= $(`#${elem}`).offset().top - 5) {
                $(`#header .nav li`).removeClass('active');
                $(`#header .nav li[data-menuanchor='${elem}']`).addClass('active');

                // window.location.hash = `#${elem}`;
                history.pushState({}, '', `#${elem}`);

                /**`
                 * BUGS hash값을 변경하니까 자꾸 스크롤이 움직여버린다.
                 * hash값이 변해도 스크롤이 움직이지 않도록하거나
                 * 움직일 것이 없는 hash값으로 속이거나 둘중하나로 해결을 봐야할듯하다.
                 *  */
            }
        });
    }

    function moveHasMenu() {
        const menuArr = [];
        $('#header .nav li').each((index, elem) => {
            menuArr.push($(elem).data('menuanchor'));
        });
        $(menuArr).each((index, elem) => {
            $(`li[data-menuanchor="${elem}"] a`).click((e) => {
                const url = new URL(e.currentTarget.getAttribute('href'));

                if (url.href.split('#')[0] == window.location.href.split('#')[0]) {
                    $('.menu-modal').fadeOut();
                    $('body').css('overflow', 'atuo');
                }

                e.preventDefault();
                $('html, body')
                    .stop()
                    .animate(
                        {
                            scrollTop: $(`#${elem}`).offset().top,
                        },
                        500
                    );
            });
        });
    }

    function architectureWorksZoom() {
        $('.work .img').click((e) => {
            const imgSrc = $(e.currentTarget).data().img;
            const zoomPop = document.createElement('div');
            const zoomPopImg = document.createElement('div');
            const zoomExit = document.createElement('div');
            const zoomExitLeft = document.createElement('div');
            const zoomExitRight = document.createElement('div');

            $(zoomExit).addClass('zoom__exit');
            $(zoomExitLeft).addClass('exit-left');
            $(zoomExitRight).addClass('exit-right');

            $(zoomExit).append(zoomExitLeft);
            $(zoomExit).append(zoomExitRight);

            zoomPop.classList.add('zoom');
            zoomPopImg.classList.add('zoom__img');
            $(zoomPopImg).css('background-image', `url("${imgSrc}")`);

            $(zoomPop).append(zoomPopImg);
            $(zoomPop).append(zoomExit);
            $('body').append(zoomPop);
            $(zoomPop).css('display', 'flex').hide().fadeIn();

            $(zoomPop).click(() => {
                $(zoomPop).fadeOut(700, function () {
                    $(zoomPop).remove();
                });
            });
        });
    }

    function homeMobileHeader() {
        if ($('.home').length >= 1) {
            if (innerWidth <= mobileWidthStd) {
                if (window.pageYOffset > 20) {
                    if ($('#mobile-header').css('display') !== 'flex') {
                        $('#mobile-header').css('display', 'flex').hide().fadeIn();
                    }
                } else {
                    $('#mobile-header').fadeOut();
                }
            }
        }
    }

    adjustIframeRatio();
    headerToggle();
    playVideo();
    menuShow();
    menuHide();
    moveHasMenu();
    currentHashMenu();
    architectureWorksZoom();
    homeMobileHeader();
    sessionForPopup();

    $(document).resize(function (e) {
        adjustIframeRatio();
        homeMobileHeader();

        // 웹일때
        if (innerWidth > mobileWidthStd) {
            $('#mobile-header').fadeOut();
            headerToggle();
        } else {
            $('#header').hide();
        }
    });

    $(document).scroll(function (e) {
        headerToggle();
        registerBtnToggle();
        playVideo();
        currentHashMenu();
        homeMobileHeader();
    });
});
