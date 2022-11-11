<?php
require 'functions/admin-css.php';
require 'functions/script.php';
require 'functions/custom-post-type.php';
require 'functions/menu.php';

add_action('wp_enqueue_scripts', 'theme_scripts');
// add_action('init', 'custom_post_type');
// add_action('admin_enqueue_scripts', 'load_admin_style');


// 관심고객 등록 기능
function get_user_form() {
    check_admin_referer( 'user_form' );

    global $wpdb;
    $sql = "SELECT meta_value FROM wp_postmeta WHERE meta_key='phone'";
    $phoneArr = $wpdb -> get_results($sql);
    $phoneNums = array();
    foreach($phoneArr as $phoneNum){
        array_push($phoneNums, get_object_vars($phoneNum)['meta_value']);
    };

    $phone = "{$_POST['phone1']}-{$_POST['phone2']}-{$_POST['phone3']}";
    
    if(in_array($phone, $phoneNums)){
        wp_redirect( esc_url( add_query_arg( 'submit', 'already-exists', home_url() ) ) );
        exit; 
    };
    $name = $_POST['name'];
    $personal_information_agree = $_POST['p'];

    var_dump($_POST['m']);
    if($_POST['m'] == NULL){
        $marketing_agree = '동의하지 않음';
    } else{
        $marketing_agree = $_POST['m'];
    }
    
    $post = array(
      'post_title' => $name,
      'post_content' => '',
      'post_type' => 'customer',
      'post_status' => 'publish', // 'pending'  ,
      'meta_input'  => array(
        'phone' =>$phone,
        'personal_information_agree' => $personal_information_agree,
        'marketing_agree' => $marketing_agree
      )
    );
    
   wp_insert_post($post);
    wp_redirect( esc_url( add_query_arg( 'submit', 'thank', home_url() ) ) );
    exit();
  }
  
  add_action( 'admin_post_user_form', 'get_user_form' );
  add_action( 'admin_post_nopriv_user_form', 'get_user_form' ); // this is for non logged user


  // Export button
function admin_post_list_add_export_button( $which ) {
    global $typenow;
    if ( 'customer' === $typenow && 'top' === $which ) {
        ?>
<input type="submit" name="export_all_posts" class="button button-primary" value="<?php _e('관심고객 내려받기'); ?>" />
<?php
    }
  } 
  
  add_action( 'manage_posts_extra_tablenav', 'admin_post_list_add_export_button', 20, 1 );
  
  function func_export_all_posts() {
    if(isset($_GET['export_all_posts'])) {
        $arg = array(
            'post_type' => 'customer',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
  
  
        
        global $post;
        $arr_post = get_posts($arg);
        if ($arr_post) {
  
            header('Content-type: text/csv;charset=UTF-8;');
            header('Content-Disposition: attachment; filename="subscriber.csv"');
            header('Pragma: no-cache');
            header('Expires: 0');
  
            echo "\xEF\xBB\xBF";
  
            $file = fopen('php://output', 'w');
  
            fputcsv($file, array('날짜', '이름', '전화번호', '개인정보 수집 및 이용 동의 여부
            ', '마케팅 활용 동의 여부'));
  
            foreach ($arr_post as $post) {
                setup_postdata($post);
                fputcsv($file, array(get_the_date( 'Ymd' ), get_the_title(), get_field('phone'),get_field('personal_information_agree'), get_field('marketing_agree')));
            }
  
            exit();
        }
    }
  }
  
  add_action( 'init', 'func_export_all_posts' );


  function mxmImg(){
    global $count;
    $img = '"'.get_field('gallery')[$count]['sizes']['2048x2048'].'"';
    echo  "style='background-image:url(".
    $img
    .")'";
    echo "data-img=$img";
    $count++;
}

function mxmImgC($count){
    $img = '"'.get_field('gallery')[$count]['sizes']['2048x2048'].'"';
    echo  "style='background-image:url(".
    $img
    .")'";
    echo "data-img=$img";
}

// 헤더 리스트를 만드는 함수입니다.
function make_nav_list($arr){
    $dir_url = get_template_directory_uri();
    foreach($arr as $li){
        $upper = strtoupper($li);
        $selector = join('-', explode(' ', preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", " ", $li)));
        echo "
        <li data-menuanchor='$selector'>
            <a href='$dir_url/#$selector'> $upper</a>
        </li>
        ";
    }
}

// 메뉴 모달의 리스트를 만드는 함수입니다.
function make_menu_list($url, $arr){
    $list = '';
    foreach($arr as $li){
        $upper = strtoupper($li);
        $selector = join('-', explode(' ', preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", " ", $li)));
        $list .= "
        <li data-menuanchor='$selector'>
            <a href='$url#$selector'> $upper</a>
        </li>
        ";
    }
    return $list;
}

function make_menu($page_name, $li_arr){
    $main_link = get_permalink( get_page_by_path( $page_name ));
    $menu_list = make_menu_list( $main_link, $li_arr);
    $upper_page_name = strtoupper($page_name);
    echo "
    <li class='list list--$page_name'>
        <div class='list__head'>
            $upper_page_name
        </div>
        <ul class='list__lists'>
            $menu_list
        </ul>
        <a class='list-link' href='$main_link'></a>
    </li>";




}