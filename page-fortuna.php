<?php get_header(); 
$count = 0;
?>
<main>
    <section class="section section--main" <?= mxmImg() ?>>
        <h1>FORTUNA</h1>
        <p>자연과 도시 사이.</br>
            </br>
            영구적인 마운틴 & 시티 파노라마 조망권을 가진</br>
            천혜의 입지Fortuna
        </p>
    </section>
    <section class="section section--nature" id='nature'>
        <div class="text">
            <h2>NATURE</h2>
            <p>아클래드 1009가 품은 영구조망.<br>
                <br>
                아클래드 1009의 정원처럼 펼쳐진 우면산은<br>
                계절 따라 다채로운 모습과<br>
                신선한 공기를 선사합니다.
            </p>
        </div>
        <div class="img" <?php mxmImg() ?>></div>
    </section>
    <section class="section section--city" id='city'>
        <div class="img" <?php mxmImg() ?>></div>
        <div class="text">
            <h2>CITY</h2>
            <p>
                창 밖 도시의 감각적인 낮과 밤.<br>
                <br>
                아클래드 1009의 시티뷰,<br>
                그 시간 속에는<br>
                놀라운 새벽의 일출과<br>
                장엄한 석양이 있고,<br>
                최고의 예술가들과<br>
                반짝이는 도시의 불빛이 있습니다.
            </p>
        </div>

    </section>
    <section class="section section--nature-city-view">
        <div class="text">
            <h2>NATURE&CITY VIEW</h2>
            <p>
                자연과 도시 사이<br>
                영구적인 파노라마 조망권을 가진<br>
                천혜의 입지
            </p>
        </div>
        <div class="img" <?php mxmImg() ?>></div>
    </section>
    <section class="section section--location">
        <div class="text">
            <h2>LOCATION</h2>
            <p>서울시 서초구 방배동 1009-1,2,3번지</p>
        </div>
        <div class="img" <?php mxmImg() ?>></div>
    </section>
</main>
<?php get_footer();?>