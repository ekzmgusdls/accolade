<?php get_header(); 
$count = 0;?>
<main>
    <section class="section section--main" <?php mxmImg();?>>
        <h1><?= the_title(); ?></h1>
    </section>
    <section class="section section--kim" id='chanjoong-kim'>
        <h2 class='mobile-show'>CHANJOONG KIM</h2>
        <div class="img">
            <div class="img-box" <?php mxmImg();?>></div>
            <div class="text-box">
                <p class='en'>By accepting conditions and limits and negotiating with them, through the act of
                    construction,
                    architecture becomes what it really is.</p>
                <p>조건과 한계를 받아들이고 조율함으로써, 구축의 행위를 통해 건축은 비로소 실재하게 된다.</p>
            </div>

        </div>
        <div class="text">
            <hr>

            주요 이력<br>
            <br>
            경희대학교 공과대학 건축학과 초빙교수<br>
            THE SYSTEM LAB 대표<br>
            고려대학교 건축공학과 학사, 하버드대학 건축학 석사<br>
            한울건출, 캠브리지 챈 크리거, 보스턴 KSWA 근무<br>


            <hr>

            수상<br>
            <br>
            <ul>
                <li>
                    <div class='year'>2006</div>
                    <div class='year-content'>
                        제10회 이태리 베니스 비엔날레 초청 전시<br>
                        제2회 베이징 비엔날레 초청 전시 [아시아의 주목받는 젊은 건축가 6인 선정]
                    </div>
                </li>
                <li>
                    <div class='year'>2016 </div>
                    <div class='year-content'>영국 월페이퍼 [주목해야 할 세계 건축가 20인]</div>
                </li>
                <li>
                    <div class='year'> 2018</div>
                    <div class='year-content'> 제36회 서울시 건축상 대상</div>
                </li>
                <li>
                    <div class='year'>2019</div>
                    <div class='year-content'> 영국 월페이퍼 [THE BEST NEW HOTEL WINNER: 코스모스 리조트]</div>
                </li>
                <li>
                    <div class='year'>2021</div>
                    <div class='year-content'> 한국건축가협회 건축상, BEST 7</div>
                </li>
                <li>
                    <div class='year'>그 외 </div>
                    <div class='year-content'>
                        IF 디자인어워드, Red Dot 디자인어워드, IDEA 디자인어워드 수상 등</div>
                </li>
            </ul>
            <hr>
            주요 작품<br>
            <br>
            울릉도 코스모스 리조트<br>
            하나은행 삼성동(PLACE 1)<br>
            현대어린이책미술관(MOKA)<br>
            한남동 HANDS 사옥<br>
            마곡 서울식물원<br>
            우란문화재단<br>
            JTBC 신사옥
            <hr>
        </div>
    </section>
    <div class="section section--works">
        <div class="work">
            <div class="img" <?php mxmImg();?>></div>
            <div class="img-caption">우란문화재단</div>
        </div>
        <div class="work">
            <div class="img" <?php mxmImg();?>></div>
            <div class="img-caption">울릉도 코스모스</div>
        </div>
        <div class="work">
            <div class="img" <?php mxmImg();?>></div>
            <div class="img-caption">KEB하나은행</div>
        </div>
        <div class="work">
            <div class="img" <?php mxmImg();?>></div>
            <div class="img-caption">서울식물원</div>
        </div>
        <div class="work">
            <div class="img" <?php mxmImg();?>></div>
            <div class="img-caption">삼진제약</div>
        </div>

    </div>
</main>

<?php get_footer();?>