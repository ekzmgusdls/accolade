<?php get_header();
$count = 0; ?>
<main>
    <section class="section section--main" <?php mxmImg();?>>
        <h1><?php the_title() ?>
        </h1>
    </section>
    <section class="section section--instagram" id='instagram'>
        <div class="text">
            <h2>ACCOLADE 1009 INSTAGRAM</h2>
            <p>
                아클래드 1009의 다양한 <br class="mobile-br">
                이벤트 및 소식을<br> <br class="mobile-br">
                실시간으로 전달드립니다.
            </p>
        </div>
        <div class="img" <?php mxmImg();?>></div>
    </section>
    <section class="section section--fritz-hansen" id='event'>
        <div class="img" <?php mxmImg();?>></div>
        <div class="text">

            <div class="chair" <?php mxmImg();?>></div>
            <h2>ACCOLADE 1009 &times; FRITZ HANSEN</h2>
            <p>
                ACCOLADE 1009 Limited Edition<br>
                <br>
                아클래드 1009가 프리츠한센과 함께 준비한<br>
                아클래드 1009 리미티드 에디션을 갤러리에서 만나보세요
            </p>
            <div class="img mobile-show" <?php mxmImgC(2) ?>></div>
            <p class='text__description'>
                프리츠 한센은 가구 제작자였던 프리츠 한센이 1872년 덴마크에서 설립한 세계적인 디자인 브랜드입니다. 단 하나의 가구로 공간 전체를 아름답게 꾸밀 수 있고, 나아가 그 공간을 경험하는
                사람들의 삶의 질을 개선할 수 있다는 철학을 바탕으로 유니크한 디자인과 프리미엄급 품질을 가진 가구를 만들어오고 있습니다. 아르네 야콥센, 폴 케흘름, 한스 웨그너 등 세계적
                디자이너들과의 협업을 통해 덴마크 디자인의 전통을 선보이고 있습니다.
            </p>
        </div>
    </section>
    <section class="section section--leeseongsoo">
        <div class="text">
            <h2>ACCOLADE 1009 &times; 이성수 작가</h2>
            <p>
                아클래드 1009 갤러리에서 이성수 작가의 작품을 만나보세요.
                아클래드 1009는 이성수 작가와 함께
                아클래드 1009 로비에 설치될 오브제를 계획하고 있습니다.
            </p>
            <div class="img mobile-show" <?php mxmImgC(4)?>></div>
            <div class="records">
                <div class="record">
                    <h3>학력</h3>
                    <div class='record__row'>
                        <div class="year">1999</div>
                        <div class="year-content">서울대학교 조소과 졸업</div>
                    </div>
                </div>
                <div class="record">
                    <h3>개인전 (19회)</h3>
                    <div class="record__row">
                        <div class="year">2021</div>
                        <div class="year-content">
                            PINKMAN, 영원 같은 일상<br>
                            @ U-Square 금호갤러리
                        </div>
                    </div>
                    <div class="record__row">
                        <div class="year">2019</div>
                        <div class="year-content">
                            PINKMAN, 우리가 따뜻해질 때<br>
                            @ 안영갤러리, 서울 인사동
                        </div>
                    </div>
                    <div class="record__row">
                        <div class="year">2018</div>
                        <div class="year-content">어느날, 공원에서 만난 반영과 직면<br>@ 갤러리 밈 초대 개인전
                        </div>
                    </div>
                    <div class="record__row">
                        <div class="year">2016</div>
                        <div class="year-content">
                            무한을 위한 표지 <br>
                            @ Artspace Knot 초대 개인전

                        </div>
                    </div>
                    <div class="record__row">
                        <div class="year">2010</div>
                        <div class="year-content">
                            The Life Spectrum<br>
                            @ 갤러리 츠바키, 도쿄
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="img" <?php mxmImg() ?>></div>
    </section>
</main>
<?php get_footer();?>