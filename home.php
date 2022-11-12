<?php get_header('home'); ?>


<main id="fullpage">
    <section class="section fp-auto-height-responsive section--1">
        <div class="section__back"></div>
        <div class="section__content">
            <div class="left-bar"></div>
            <div class="right-bar"></div>
            <div class="bottom-arrow">
                <img src="<?= get_template_directory_uri();?>/assets/src/bottom-arrow.svg" alt="" />
            </div>
            <div class="main-logo">
                <img src="<?= get_template_directory_uri();?>/assets/src/accolade_logo.svg" alt="" />
            </div>
        </div>
        <!-- <div id="video">
                    <div class="video-container">
                        <div class="video-exit">
                            <div class="video-exit__left"></div>
                            <div class="video-exit__right"></div>
                        </div>
                        <video controls playsinline>
                            <source src="/assets/src/launch.mp4" />
                        </video>
                    </div>
                </div> -->
    </section>
    <!-- <div class="section fp-auto-height-responsive section--video">
        <div class="section__content">
            <div class="left-container">
                세월이 쌓여 울림이 되고,<br />
                그 울림을 발자취로 남기는 당신.<br />
                아클래드 1009 당신을 증명합니다.
            </div>
            <div class="right-container">
                <iframe
                    src="https://www.youtube.com/embed/fbqsB9ATUcA?autoplay=1&rel=0&showinfo=0&modestbranding=1&playsinline=1&controls=1&color=white&loop=1&mute=1"
                    title="당신을 증명하는 차이, 아클래드 1009 [ACCOLADE 1009]" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div> -->
    <section id="brand" class="section fp-auto-height-responsive section--2">
        <div class="section__content">
            <div class="bottom-title">
                <div class="en letter-space-wide">PROVE YOURSELF</div>
                <div class="ko">당신을 증명하는 차이, 아클래드 1009</div>
            </div>
            <div class="left-container"></div>
            <div class="right-container">
                <div class="content">
                    타인보다 조금 낫다고 훌륭한 것이 아니다.<br />
                    과거의 자신보다 더 훌륭해진 것이야말로<br />
                    진정으로 성공한 것이다.<br /><br />
                    -어니스트 헤밍웨이-<br /><br />
                    <a class='view-more' href='<?= get_permalink( get_page_by_path( 'brand' ) )?>'>
                        VIEW MORE
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="fortuna" class="section section--3">
        <div class="slide slide--1 first">
            <div class="slide__content">
                <div class="text">
                    <h2>FORTUNA</h2>
                    <p>
                        자연과 도시 사이. <br />
                        <br />
                        영구적인 마운틴 & 시티 파노라마 조망권을 가진<br />
                        천혜의 입지<sup>Fortuna</sup>
                    </p>
                    <br>
                    <a class='view-more' href='<?= get_permalink( get_page_by_path( 'fortuna' ) )?>'>
                        VIEW MORE
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section id="virtu" class="section fp-auto-height-responsive section--4">
        <div class="slide slide--1 first">
            <div class="slide__content">
                <div class="text">
                    <h2>VIRTU</h2>
                    <p>
                        아클래드 1009의 지혜와 역량.<br />
                        <br />
                        최상의 환경<sup>Fortuna</sup>에<br />
                        아클래드 1009만의 세심한 역량<sup>Virtu</sup>을 더하여<br />
                        가치와 차이를 가진 주거 공간 아클래드 1009를 만듭니다.
                    </p>
                    <br>
                    <a class='view-more' href='<?= get_permalink( get_page_by_path( 'virtu' ) )?>'>
                        VIEW MORE
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="architect" class="section fp-auto-height-responsive section--5">
        <div class="slide slide--1 first">
            <div class="img mobile-show"></div>
            <div class="slide__content">
                <div class="text">
                    <h2>ARCHITECT</h2>
                    <p>
                        시간에 맞서는 건축가,<br />
                        김찬중
                    </p>
                    <br>
                    <a class='view-more' href='<?= get_permalink( get_page_by_path( 'architect' ) )?>'>
                        VIEW MORE
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="location" class="section fp-auto-height-responsive section--6">
        <div class="section__content first">
            <div class="mxm-left-container"></div>
            <div class="mxm-right-container">
                <h2>LOCATION</h2>
                <p>영구적인 마운틴&시티 파노라마 조망권을 가진 최상의 위치</p>
            </div>
        </div>
    </section> -->
    <section id="gallery" class="section fp-auto-height-responsive section--7">
        <div class="section__content first">
            <div class="top-container">
                <div class="left-container">
                    <div class="text">
                        <h2>GALLERY</h2>
                        <p>
                            아클래드 1009를 <br />
                            느끼고 경험하는 공간입니다.<br />
                            <br />
                            02.511.1009<br />
                            서울특별시 강남구 청담동 99-20
                        </p>
                        <br>
                        <a class='view-more' href='<?= get_permalink( get_page_by_path( 'gallery' ) )?>'>
                            VIEW MORE
                        </a>
                    </div>
                    <!-- <img src="./assets/src/gallery-map.svg" alt="" /> -->
                </div>
                <div class="right-container"></div>
            </div>
            <div class="bottom-title">
                <div class="en letter-space-wide">PROVE YOUR DIFFERENCE</div>
                <div class="ko">당신을 증명하는 차이, 아클래드 1009</div>
                <footer>
                    <div class="footer-left">
                        © 2022 ACCOLADE 1009. ALL RIGHTS ARE RESERVED.<br />
                        본 사이트 내 사용된 이미지는 소비자의 이해를 돕기 위한 것으로 실제와 차이가 있을 수 있습니다.
                    </div>
                    <div class="footer-right">
                        <!-- <div class="footer-right__row">
                                    <div class="label">온라인대행</div>
                                    <div class="label">아이엠플러스</div>
                                </div> -->
                        <div class="footer-right__row">
                            <div class="label">시행</div>
                            <div class="logo wisecity">
                                <img src="<?= get_template_directory_uri();?>/assets/src/wisecity.svg" alt="" />
                                <!-- 주식회사 와이즈시티 -->
                            </div>
                        </div>
                        <div class="footer-right__row">
                            <div class="label">시공</div>
                            <div class="logo dl">
                                <img src="<?= get_template_directory_uri();?>/assets/src/dl.svg" alt="" />
                            </div>
                        </div>
                        <div class="footer-right__row">
                            <div class="label">마케팅</div>
                            <div class="logo cnd">
                                <img src="<?= get_template_directory_uri();?>/assets/src/cnd.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>