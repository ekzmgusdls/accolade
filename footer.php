<?php wp_footer(); 

?>
<div class="menu-modal">
    <div class="menu-modal__exit">
        <div class="exit-left"></div>
        <div class="exit-right"></div>
    </div>
    <ul class='lists'>
        <li class='list'>
            <div class="list__head">
                HOME
            </div>
            <a class='list-link' href='<?= home_url()?>'></a>
        </li>
        <?php 
            make_menu('brand', ['film','accolade','philosophy']);
            make_menu('fortuna', ['nature','city']);
            make_menu('virtu', ['design','timeless','lifestyle','premium']);
            make_menu('architect', ['chanjoong kim']);
            make_menu('gallery', ['gallery', 'map & contact']);
            make_menu('magazine', ['instagram','event']);
             ?>
        <li class='list register-trigger'>
            <div class="list__head">
                REGISTER
            </div>
        </li>
    </ul>
    <div class="logo">
        <img src="<?= get_template_directory_uri();?>/assets/src/accolade_logo.svg" alt="" /><a
            href="<?= home_url()?>"></a>
    </div>
</div>
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
</body>

</html>