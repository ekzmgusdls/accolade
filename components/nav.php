<?php

  
if(is_home()){
    $args = ['brand','fortuna','virtu','architect','gallery'];
}

if(is_page('brand')){
    $args = ['film','accolade','philosophy'];
}

if(is_page('fortuna')){
    $args = ['nature','city'];
}

if(is_page('virtu')){
    $args = ['design','timeless','lifestyle','premium'];
}

if(is_page('architect')){
    $args = ['chanjoong kim'];
}

if(is_page('gallery')){
    // $args = ['gallery','floor plan', 'map & contact'];
    $args = ['map & contact'];
}

if(is_page('magazine')){
    $args = ['instagram', 'event'];
}

?>
<ul class="nav">
    <?php  make_nav_list($args); ?>
    <div class="sns">
        <a href="https://instagram.com/accolade1009?igshid=YmMyMTA2M2Y=" target="_blank">
            <img src="<?= get_template_directory_uri();?>/assets/src/insta.svg" alt="" />
        </a>
    </div>
</ul>
<?php
?>