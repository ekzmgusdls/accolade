<?php get_header(); 
    $count = 0;
?>
<main>
    <section class="section section--main" <?php mxmImg();?>>
        <h1>
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="section section--map-contact" id='map---contact'>
        <div class="text">
            <h2>MAP & CONTACT</h2>
            <p>02.511.1009<br>
                서울특별시 강남구 청담동 99-20<br>
                <br>
                방문은 사전 예약 후 가능합니다.
            </p>
        </div>
        <div class="img" <?php mxmImg();?>></div>
    </section>
</main>
<?php get_footer();?>