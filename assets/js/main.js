addEventListener('DOMContentLoaded', () => {
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

    makeVideoResponsible();
    addEventListener('resize', makeVideoResponsible);
    new fullpage('#fullpage', {
        autoScrolling: true,
        scrollHorizontally: true,
        scrollingSpeed: 700,
        anchors: ['home', 'brand', 'fortuna', 'virtu', 'architect', 'gallery'],
        menu: '.nav',
        slidesNavigation: true,
        licenseKey: '1AA06FBF-F19844AC-86DD0A61-41CD1505',
        scrollHorizontally: true,
        scrollHorizontallyKey: 'YWNjb2xhZGUxMDA5XzlidGMyTnliMnhzU0c5eWFYcHZiblJoYkd4NXJoOA', //see https://goo.gl/xkUmHS

        afterLoad: function (origin, destination, direction, trigger) {
            var origin = this;
            if (direction === 'down') {
                if (origin.index === 0) {
                    console.log('hi');
                    $('#header').css('display', 'flex').hide().fadeIn();
                }
            } else {
            }
        },
        onLeave: function (origin, destination, direction, trigger) {
            var origin = this;
            if (direction === 'down') {
            } else {
                if (origin.index === 1) {
                    $('#header')
                        .animate({
                            display: 'none',
                        })
                        .fadeOut();
                }
            }
        },
    });
});
