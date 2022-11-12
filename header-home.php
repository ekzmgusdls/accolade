<!DOCTYPE html>
<html lang="<?= get_bloginfo( 'language' ); ?>">

<head>
    <?php wp_head();?>
    <meta charset="<?= get_bloginfo( 'charset' ); ?>">
    <!-- Global site tag (gtag.js) - Google Ads: 10889286814 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10889286814"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-10889286814');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6BJ9E5DB33"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-6BJ9E5DB33');
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= get_template_directory_uri();?>/assets//src/favicon.svg" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/fullpage.js@3.1.2/dist/fullpage.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/klf3xix.css" />
    <script src="assets/js/fullpage.scrollHorizontally.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fullpage.js@3.1.2/dist/fullpage.extensions.min.js"></script>
    <title><?= get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body <?php body_class() ?>>
    <?php
if($_GET['submit'] == 'thank'){
    echo "<div class='register-notice'>
            감사합니다. 등록되었습니다.
         </div>";
}
if($_GET['submit'] == 'already-exists'){
    echo "<div class='register-notice register-notice--error'>
             이미 등록된 전화번호가 존재합니다.
         </div>";
}
?>
    <div id="header">
        <div class="menu-trigger-container">
            <div class='menu-trigger'>
                MENU
            </div> ►
            <div class="current-page-title">
                <?= empty(get_the_title()) ? 'HOME' : get_the_title(); ?>
            </div>
        </div>

        <div data-menuanchor="home" class="logo">
            <img src="<?= get_template_directory_uri();?>/assets/src/accolade_logo.svg" alt="" /><a
                href="<?= home_url()?>"></a>
        </div>
        <?php 
            
            get_template_part('/components/nav');
        ?>


    </div>
    <div id="mobile-header">
        <div class="menu-button menu-trigger">
            <img src="<?= get_template_directory_uri();?>/assets/src/menu-button.svg" alt="" />
        </div>
        <div data-menuanchor="home" class="logo">
            <a href="#home"> <img src="<?= get_template_directory_uri();?>/assets/src/accolade_logo.svg" alt="" /></a>
        </div>
        <div class="sns">
            <a href="https://instagram.com/accolade1009?igshid=YmMyMTA2M2Y=" target="_blank">
                <img src="<?= get_template_directory_uri();?>/assets/src/insta.svg" alt="" />
            </a>
        </div>
    </div>
    <!-- <div id="mobile-nav">
        <div class="left-bar"></div>
        <ul class="nav">
            <li data-menuanchor="brand"><a href="#brand">BRAND</a></li>
            <li data-menuanchor="fortuna">
                <a href="#fortuna">FORTUNA</a>
            </li>
            <li data-menuanchor="virtu">
                <a href="#virtu">VIRTU</a>
            </li>
            <li data-menuanchor="architect">
                <a href="#architect">ARCHITECT</a>
            </li>
            <li data-menuanchor="location">
                <a href="#location">LOCATION</a>
            </li>
            <li data-menuanchor="gallery">
                <a href="#gallery">GALLERY</a>
            </li>
        </ul>
        <div class="right-bar"></div>
    </div> -->
    <div class="pop-up-container">
        <div class="pop-up">
            <img src="<?= get_template_directory_uri()?>/assets/src/popup.jpeg
                " alt="" />
            <div class="exit"></div>
        </div>
    </div>
    <div class="register">
        <div class="register__trigger">
            <div class="register__en">REGISTER</div>
            <div class="register__kr pc-show">관심고객<br class='mobile-wrap' />등록하기</div>
        </div>
        <!-- <div class="register__close">
            <div class="left"></div>
            <div class="right"></div>
        </div> -->
    </div>
    <div class="register-popup">
        <div class="register-popup__exit">
            <div class="exit-left"></div>
            <div class="exit-right"></div>
        </div>
        <div class="register-popup__left"></div>
        <div class="register-popup__main">
            <div class="register-popup__title">REGISTER</div>
            <div class="register-popup__description">아클래드 1009의 관심 고객으로 등록하시면, <br />아클래드 1009의 다양한 소식과 분양 및 각종 브랜드 정보를
                안내해드립니다.
            </div>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" id="userForm">
                <input type="hidden" name="action" value="user_form">
                <?php wp_nonce_field( 'user_form' ); ?>
                <div class="form-01">
                    <div class="form-01__row">
                        <label for="name">성명</label>
                        <input name="name" id="name" type="text" required>
                    </div>
                    <div class="form-01__row">
                        <label for="phone">연락처</label>
                        <div class='phone-number'>
                            <select name="phone1" id="phone" class="stx" required>
                                <option value="010"> 010 </option>
                                <option value="011"> 011 </option>
                                <option value="016"> 016 </option>
                                <option value="017"> 017 </option>
                                <option value="018"> 018 </option>
                                <option value="019"> 019 </option>
                            </select>
                            <span class='hypen'>
                                <div class="hypen__bar"></div>
                            </span>
                            <input name="phone2" type="tel" required minlength="4" maxlength="4" pattern="[0-9]+">
                            <span class='hypen'>
                                <div class="hypen__bar"></div>
                            </span>
                            <input name="phone3" type="tel" required minlength="4" maxlength="4" pattern="[0-9]+">
                        </div>
                    </div>
                </div>
                <ul class="register-informs">
                    <li class='register-inform'>
                        <div class="register-inform__title">개인정보 수집 주체</div>
                        <div class="register-inform__content">(주) 와이즈시티</div>
                    </li>
                    <li class='register-inform'>
                        <div class="register-inform__title"> 목적</div>
                        <div class="register-inform__content"> - 당사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br /> - 아클래드 1009 분양 정보
                            안내 및 분양 상담 등 문의 처리<br /> - 전화 및 우편 등을 통한 마케팅 및 광고 홍보</div>
                    </li>
                    <li class='register-inform'>
                        <div class="register-inform__title"> 수집 방법</div>
                        <div class="register-inform__content"> 아클래드 1009 홈페이지의 관심고객등록</div>
                    </li>
                    <li class='register-inform'>
                        <div class="register-inform__title"> 항목 </div>
                        <div class="register-inform__content"> 성명, 연락처, 분양 및 청약 의사</div>
                    </li>
                    <li class='register-inform'>
                        <div class="register-inform__title">보유 및 이용기간</div>
                        <div class="register-inform__content"> 당사는 개인정보수집 및 이용목적이 달성된 후에는 예외 없이 해당정보를 지체없이 파기합니다.</div>
                    </li>
                </ul>
                <div class="register-questions">
                    <div class="register-question">
                        <div class="question">
                            [필수] 개인정보 수집 및 이용에 동의하십니까?
                        </div>
                        <div class="answer answer--yes">
                            <label for="p-agree">동의함<input type="radio" id="p-agree" name="p" value="동의함" required
                                    class='hidden'>
                                <div class='checkbox'></div>
                            </label>

                        </div>
                        <div class="answer answer--no">
                            <label for="p-disagree">동의하지 않음 <input type="radio" id="p-disagree" name="p" value="동의하지 않음"
                                    class='hidden'>
                                <div class='checkbox'></div>
                            </label>

                        </div>
                    </div>
                    <div class="register-question">
                        <div class="question">
                            [필수] 마케팅 활용 동의에 동의하십니까?
                        </div>
                        <div class="answer answer--yes">
                            <label for="m-agree">동의함
                                <input type="radio" id="m-agree" name="m" value="동의함" class='hidden' required>
                                <div class='checkbox'>
                            </label>
                        </div>
                    </div>
                    <div class="answer answer--no">
                        <label for="m-disagree">동의하지 않음
                            <input type="radio" id="m-disagree" name="m" value="동의하지 않음" class='hidden'>
                            <div class='checkbox'></div>
                        </label>

                    </div>
                </div>
                <div class="register-question register-question--allyes">
                    <div class="question">
                        본인은 상기 내용을 상세히 읽어보았고,<br /> 이에 관하여 충분히 이해하였으며, 본인의 의사에 따라 상기 내용에 동의합니다.
                    </div>
                    <div class="answer answer--allyes">
                        <label for="yes">전체 동의

                            <input type="checkbox" name="yes" id="yes" class='hidden'>
                            <div class='checkbox'></div>
                        </label>

                    </div>
                </div>
        </div>
        <button id="submit" type="submit">관심고객등록</button>
        <div class="img-container">
            <img src="<?= get_template_directory_uri();?>/assets/src/accolade_logo.svg" alt="" />
        </div>
        </form>
    </div>
    <div class="register-popup__right"></div>
    </div>