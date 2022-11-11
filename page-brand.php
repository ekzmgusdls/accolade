<?php get_header(); 
$count = 0;

?>
<main>
    <section class='section section--main' <?php mxmImg()?>>
        <h1>
            <?php the_title() ?>
        </h1>
    </section>
    <section class="section section--video" id='film'>
        <iframe
            src="https://www.youtube.com/embed/fbqsB9ATUcA?rel=0&showinfo=0&modestbranding=1&playsinline=1&controls=1&color=white&loop=1&mute=1&enablejsapi=1"
            frameborder="0" width="560" height="315"></iframe>
    </section>
    <section id='accolade'>
        <section class="section section--in-art">
            <div class="section-row section-row--1">
                <div class="text">
                    <h2>ACCOLADE <br class="mobile-br"> IN ART</h2>
                    <p>

                        본래 ‘기사작위수여식‘을 뜻하던 ‘ACCOLADE’는<br>
                        영예, 상, 칭찬의 뜻으로 확장되어 사용되고 있습니다.<br>
                        아클래드라는 이름의 이 그림은 기사작위수여식을 표현합니다.
                        <br><br>
                        <br class='mobile-br'>
                        <br class='mobile-br'>
                        ACCOLADE 1009는 하나하나 쌓여진 차이로 만들어낸 당신을 증명하는 차이입니다.
                    </p>
                </div>
                <div class="img-container">
                    <div class="img" <?php mxmImg()?>></div>
                    <div class="img-caption">
                        &lt;The ACCOLADE&gt; by Edmund Blair Leighton(1901)

                    </div>
                </div>
            </div>
        </section>
        <section class="section section--in-architecture">
            <div class="section-row section-row--1">
                <div class="img" <?php mxmImg()?>></div>
                <div class="text">
                    <h2>ACCOLADE <br class="mobile-br"> IN ARCHITECTURE</h2>
                    <p>
                        ACCOLADE는 후기 고딕 건축에서 일반적으로 발견되는 Ogee Arch를 의미합니다. <br>정점에서 두개의 S자 커브가 만나 대칭적인 아치를 이루는 Ogee arch는
                        <br>후기 고딕 건축에서 교회, 수도원 등의 출입구와 창문 등의 <br>
                        장식용 아치로 사용되었습니다.<br class='mobile-br'><br class='mobile-br'>
                        ACCOLADE의 대칭적인 비례와 리듬은 <br>ACCOLADE 1009가 가진 우아한 운율과 닮아있습니다.
                    </p>
                </div>
            </div>
        </section>
        <section class="section section--in-music">
            <div class="section-row section-row--1">
                <div class="text">
                    <h2>ACCOLADE <br class="mobile-br"> IN MUSIC</h2>
                    <p>
                        음악에 있어 ‘ACCOLADE’란 피아노, <br>
                        하프 등의 악기를 연주할 때, <br>
                        서로 다른 음자리를 조화롭게 동시에 연주하기 위해<br>
                        두개 이상의 오선지를 연결하는 묶음표입니다.
                        <br class='mobile-br'>
                        <br class='mobile-br'>

                        ACCOLADE의
                        조화로움은<br>
                        자연과 도시 사이에서 생활 속 장면을 최고의 순간으로 만드는<br>
                        ACCOLADE 1009와 닮아있습니다.

                    </p>
                </div>
                <div class="img" <?php mxmImg()?>></div>
            </div>
        </section>
    </section>
    <section id="philosophy">
        <section class="section section--philosophy">
            <div class="section-row section-row--1">
                <div class="text">
                    <h2>PHILOSOPHY</h2>
                    <p>아클래드는<br>
                        Design, Timeless, Lifestyle 세가지 요소와<br><br class="mobile-br">
                        그 조합을 통해 가치와 차이를 가진<br>
                        주거공간을 만듭니다.
                    </p>
                </div>
                <?php get_template_part('/assets/src/accolade_dia') ?>
                <div class="dummy"></div>
            </div>
        </section>
        <section>
            <div class="footer-bottom-title">
                <div class="en letter-space-wide">PROVE YOUR DIFFERENCE</div>
                <div class="ko">아클래드는 하나하나 쌓여진 가치로 만들어낸 <br class="mobile-br"> 당신을 증명하는 차이입니다.</div>
            </div>
        </section>
        <section class="section section--code-identity">
            <h2>
                CORE IDENTITY
            </h2>
            <div class="section--code-identity__body">
                <div class="column column--design">
                    <h2>DESIGN</h2>
                    <p>아름다움과<br>
                        유용함의 균형적인 조합<br>
                        <br>
                        -<br>
                        <br>
                        Beauty<br>
                        질서와 균형, 그리고 우아함이 있는 아름다움을 추구합니다.<br>
                        <br>
                        Use<br>
                        주거 공간을 위한 유용한 쓰임을 제공합니다.
                    </p>
                </div>
                <div class="column column--timeless">
                    <h2>TIMELESS</h2>
                    <p>변치 않음과<br>
                        지속가능성의 조화<br>
                        <br>
                        -<br>
                        <br>
                        Timeless<br>
                        변치 않는 본질에 집중합니다<br>
                        <br>
                        Sustainable<br>
                        주거 공간의 지속가능성을 추구합니다.
                    </p>
                </div>
                <div class="column column--lifestyle">
                    <h2>LIFESTYLE</h2>
                    <p>
                        주거 공간을 통해 얻는<br>
                        최상의 삶의 질과 경험<br>
                        <br>
                        -<br>
                        <br>
                        Experience<br>
                        각자의 새로운 경험과 취향을 구현합니다<br>
                        <br>
                        Quality<br>
                        삶의 질을 높이는 주거 공간을 제공합니다.
                    </p>
                </div>
            </div>
        </section>
        <section class="section section--identity-combination">
            <h2>
                IDENTITY COMBINATION
            </h2>
            <div class="section--identity-combination__body">
                <div class="column column--design">
                    <h2>TIMELESS DESIGN</h2>
                    <p>변치않는 아름다움(Beauty)과 지속가능한 쓰임(Use)
                    </p>
                </div>
                <div class="column column--timeless">
                    <h2>TIMELESS LIFESTYLE</h2>
                    <p>시간이 흐르고 세대가 바뀌어도<br>
                        변화하는 삶의 모습을 수용하는 주거공간
                    </p>
                </div>
                <div class="column column--lifestyle">
                    <h2>DESIGN LIFESTYLE</h2>
                    <p>
                        생활 속 장면들이 최고의 순간으로
                    </p>
                </div>
            </div>
        </section>
        <section class="section section--value-difference">
            <h2>
                VALUE & DIFFERECNE
            </h2>
            <div class="section--value-difference__body ">
                <h2>
                    아클래드는 하나하나 쌓여진 가치로 만들어낸 당신을 증명하는 차이입니다.
                </h2>
            </div>
        </section>
    </section>

</main>
<div class="footer-bottom-title">
    <div class="en letter-space-wide">PROVE YOUR DIFFERENCE</div>
    <div class="ko">당신을 증명하는 차이, 아클래드</div>
</div>
<?php get_footer();?>